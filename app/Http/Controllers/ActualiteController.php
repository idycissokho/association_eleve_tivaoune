<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ActualiteController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);
        
        $post = Post::findOrFail($id);
        
        // Préparer les données à mettre à jour (sans l'image par défaut)
        $updateData = [
            'title' => $request->titre,
            'content' => $request->contenu,
            'slug' => Str::slug($request->titre)
        ];
        
        // Gérer l'upload d'image SEULEMENT si une nouvelle image est fournie
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            if ($post->featured_image) {
                $oldImagePath = public_path('images/' . $post->featured_image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            
            $image = $request->file('image');
            $imageName = 'actualite' . $id . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            
            // Ajouter la nouvelle image aux données à mettre à jour
            $updateData['featured_image'] = $imageName;
        }
        // Si pas de nouvelle image, on garde l'ancienne (pas besoin de code spécifique)
        
        // Mettre à jour les données
        $post->update($updateData);
        
        return response()->json([
            'success' => true,
            'message' => 'Actualité modifiée avec succès'
        ]);
    }
    
    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            
            // Supprimer l'image associée si elle existe
            if ($post->featured_image) {
                $imagePath = public_path('images/' . $post->featured_image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            
            // Supprimer l'actualité de la base de données
            $post->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Actualité supprimée avec succès'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de la suppression: ' . $e->getMessage()
            ], 500);
        }
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);
        
        $imageName = null;
        
        // Gérer l'upload d'image avec nommage automatique
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            // Trouver le prochain numéro d'actualité
            $nextNumber = $this->getNextActualiteNumber();
            $imageName = 'actualite' . $nextNumber . '.' . $image->getClientOriginalExtension();
            
            // Déplacer l'image vers le dossier public/images
            $image->move(public_path('images'), $imageName);
        }
        
        // Créer l'actualité
        Post::create([
            'title' => $request->titre,
            'content' => $request->contenu,
            'featured_image' => $imageName,
            'is_published' => true,
            'user_id' => auth()->id(),
            'slug' => Str::slug($request->titre)
        ]);
        
        return redirect()->back()->with('success', 'Actualité créée avec succès');
    }
    
    private function getNextActualiteNumber()
    {
        $imagesPath = public_path('images');
        $maxNumber = 0;
        
        if (is_dir($imagesPath)) {
            $files = scandir($imagesPath);
            foreach ($files as $file) {
                if (preg_match('/^actualite(\d+)\.(jpg|jpeg|png|gif)$/i', $file, $matches)) {
                    $number = (int)$matches[1];
                    if ($number > $maxNumber) {
                        $maxNumber = $number;
                    }
                }
            }
        }
        
        return $maxNumber + 1;
    }
}