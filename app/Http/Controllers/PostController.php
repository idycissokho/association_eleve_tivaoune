<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with('author')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('author')->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function adminIndex()
    {
        $posts = Post::with('author')->latest()->get();
        return view('admin.dashboard', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            // Calculer le prochain numéro d'article
            $imagesPath = public_path('images');
            $articleImages = [];
            if (is_dir($imagesPath)) {
                $files = scandir($imagesPath);
                $articleImages = array_filter($files, function($file) {
                    return preg_match('/^article\d+\.(jpg|jpeg|png|webp)$/i', $file);
                });
            }
            $nextNumber = count($articleImages) + 1;
            
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = 'article' . $nextNumber . '.' . $extension;
            
            $request->file('image')->move(public_path('images'), $imageName);
        }

        Post::create([
            'title' => $request->titre,
            'slug' => Str::slug($request->titre),
            'content' => $request->contenu,
            'excerpt' => Str::limit(strip_tags($request->contenu), 150),
            'featured_image' => $imageName,
            'is_published' => true,
            'published_at' => now(),
            'user_id' => auth()->id()
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Actualité créée avec succès !');
    }
}
