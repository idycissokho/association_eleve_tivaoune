<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActualiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/a-propos', [HomeController::class, 'about'])->name('about');

Route::get('/actualites', [PostController::class, 'index'])->name('posts.index');
Route::get('/actualites/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/evenements', [EventController::class, 'index'])->name('events.index');
Route::get('/evenements/{event}', [EventController::class, 'show'])->name('events.show');
Route::post('/evenements/{event}/inscription', [EventController::class, 'register'])->name('events.register');

Route::get('/galerie', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/galerie/download/{filename}', [GalleryController::class, 'download'])->name('gallery.download');

// Routes d'authentification
Route::get('/inscription', [AuthController::class, 'showRegister'])->name('register');
Route::post('/inscription', [AuthController::class, 'register']);
Route::get('/connexion', [AuthController::class, 'showLogin'])->name('login');
Route::post('/connexion', [AuthController::class, 'login']);
Route::post('/deconnexion', [AuthController::class, 'logout'])->name('logout');

// Routes dashboard avec vérification alternative
Route::get('/dashboard', function () {
    // Vérification alternative si la session standard ne fonctionne pas
    if (!auth()->check() && session('user_id')) {
        $user = \App\Models\User::find(session('user_id'));
        if ($user) {
            auth()->login($user);
        }
    }
    
    if (!auth()->check()) {
        return redirect()->route('login');
    }
    
    // Récupérer les posts pour la vue
    $posts = [];
    try {
        $posts = \App\Models\Post::latest()->get();
    } catch (\Exception $e) {
        // Si pas de table posts, on utilise une collection vide
        $posts = collect();
    }
    
    return view('admin.dashboard', compact('posts'));
})->name('dashboard');

Route::get('/admin/dashboard', [PostController::class, 'adminIndex'])->name('admin.dashboard');

// Routes admin
Route::middleware('auth')->group(function () {
    // Routes galerie
    Route::post('/admin/gallery/upload', [GalleryController::class, 'uploadImages'])->name('admin.gallery.upload');
    Route::get('/admin/gallery/images', [GalleryController::class, 'getImages'])->name('admin.gallery.images');
    Route::delete('/admin/gallery/delete', [GalleryController::class, 'deleteImage'])->name('admin.gallery.delete');
    
    // Routes membres
    Route::post('/admin/members/store', [MemberController::class, 'store'])->name('admin.members.store');
    Route::get('/admin/members/{id}', [MemberController::class, 'show'])->name('admin.members.show');
    Route::put('/admin/members/{id}', [MemberController::class, 'update'])->name('admin.members.update');
    Route::delete('/admin/members/{id}', [MemberController::class, 'destroy'])->name('admin.members.destroy');
    
    // Routes actualités
    Route::post('/admin/actualites/store', [ActualiteController::class, 'store'])->name('admin.actualites.store');
    Route::delete('/admin/actualites/{id}', [ActualiteController::class, 'destroy'])->name('admin.actualites.destroy');
});

// Route de test pour vérifier l'auth
Route::get('/test-auth', function() {
    return auth()->check() ? 'Connecté: ' . auth()->user()->name : 'Non connecté';
});