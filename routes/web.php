<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/a-propos', [HomeController::class, 'about'])->name('about');

Route::get('/actualites', [PostController::class, 'index'])->name('posts.index');
Route::get('/actualites/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/evenements', [EventController::class, 'index'])->name('events.index');
Route::get('/evenements/{event}', [EventController::class, 'show'])->name('events.show');
Route::post('/evenements/{event}/inscription', [EventController::class, 'register'])->name('events.register');

Route::get('/galerie', function () {
    return view('gallery.index');
})->name('gallery');

Route::get('/connexion', function () {
    return view('auth.login');
})->name('login');

Route::get('/inscription', function () {
    return view('auth.register');
})->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});