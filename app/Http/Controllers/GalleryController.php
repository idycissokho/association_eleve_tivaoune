<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 9;
        
        $imagesPath = public_path('images');
        $images = [];
        $totalImages = 0;
        
        if (is_dir($imagesPath)) {
            $files = scandir($imagesPath);
            $imageFiles = array_filter($files, function($file) use ($imagesPath) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                return in_array($ext, ['jpg', 'jpeg', 'png', 'gif']) && is_file($imagesPath . '/' . $file);
            });
            
            // Trier par date de modification (plus récent en premier)
            usort($imageFiles, function($a, $b) use ($imagesPath) {
                return filemtime($imagesPath . '/' . $b) - filemtime($imagesPath . '/' . $a);
            });
            
            $totalImages = count($imageFiles);
            $offset = ($page - 1) * $perPage;
            $images = array_slice($imageFiles, $offset, $perPage);
        }
        
        $totalPages = ceil($totalImages / $perPage);
        
        return view('gallery.index', compact('images', 'page', 'totalPages', 'totalImages'));
    }

    public function download($filename)
    {
        $imagePath = public_path('images/' . $filename);
        
        if (file_exists($imagePath)) {
            return response()->download($imagePath);
        }
        
        return abort(404, 'Image non trouvée');
    }

    public function uploadImages(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
        ]);

        $uploadedFiles = [];
        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $filename);
                $uploadedFiles[] = $filename;
            }
        }

        return redirect()->back()->with('success', count($uploadedFiles) . ' image(s) téléchargée(s) avec succès !');
    }

    public function getImages(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 4;
        
        $imagesPath = public_path('images');
        
        if (!File::exists($imagesPath)) {
            File::makeDirectory($imagesPath, 0755, true);
            return response()->json([
                'images' => [],
                'current_page' => 1,
                'total' => 0,
                'last_page' => 1
            ]);
        }
        
        $allImages = collect(File::files($imagesPath))
            ->filter(function ($file) {
                return in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif']);
            })
            ->map(function ($file) {
                return $file->getFilename();
            })
            ->sortByDesc(function ($filename) {
                return filemtime(public_path('images/' . $filename));
            });
        
        $total = $allImages->count();
        $images = $allImages->forPage($page, $perPage)->values();
        
        return response()->json([
            'images' => $images,
            'current_page' => $page,
            'total' => $total,
            'last_page' => ceil($total / $perPage)
        ]);
    }

    public function deleteImage(Request $request)
    {
        $filename = $request->get('filename');
        $imagePath = public_path('images/' . $filename);
        
        if (File::exists($imagePath)) {
            File::delete($imagePath);
            return response()->json(['success' => true, 'message' => 'Image supprimée avec succès']);
        }
        
        return response()->json(['success' => false, 'message' => 'Image non trouvée'], 404);
    }
}