@extends('layouts.app')

@section('title', 'Dashboard - AELT 93-97')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Bienvenue, {{ auth()->user()->name }}</h1>
                    <p class="text-gray-600">Promotion {{ auth()->user()->promotion_year }}</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                        <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                    </button>
                </form>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-blue-100 rounded-full">
                        <i class="fas fa-users text-blue-600"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600">Membres actifs</p>
                        <p class="text-2xl font-bold text-gray-900">{{ \App\Models\User::where('is_active', true)->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 rounded-full">
                        <i class="fas fa-calendar text-green-600"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600">Événements à venir</p>
                        <p class="text-2xl font-bold text-gray-900">{{ \App\Models\Event::where('event_date', '>', now())->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-yellow-100 rounded-full">
                        <i class="fas fa-newspaper text-yellow-600"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600">Articles publiés</p>
                        <p class="text-2xl font-bold text-gray-900">{{ \App\Models\Post::where('is_published', true)->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Actions rapides</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <a href="{{ route('events.index') }}" class="flex items-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>
                    <span class="text-blue-900 font-medium">Voir les événements</span>
                </a>
                
                <a href="{{ route('posts.index') }}" class="flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                    <i class="fas fa-newspaper text-green-600 mr-3"></i>
                    <span class="text-green-900 font-medium">Lire les actualités</span>
                </a>
                
                <a href="{{ route('gallery') }}" class="flex items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <i class="fas fa-images text-purple-600 mr-3"></i>
                    <span class="text-purple-900 font-medium">Galerie photos</span>
                </a>
                
                <a href="#" class="flex items-center p-4 bg-yellow-50 rounded-lg hover:bg-yellow-100 transition-colors">
                    <i class="fas fa-user-edit text-yellow-600 mr-3"></i>
                    <span class="text-yellow-900 font-medium">Modifier profil</span>
                </a>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Activité récente</h2>
            <div class="space-y-4">
                @forelse(\App\Models\Post::where('is_published', true)->latest()->take(3)->get() as $post)
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-newspaper text-blue-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900">
                                <span class="font-medium">{{ $post->user->name }}</span> a publié un article
                            </p>
                            <p class="text-sm text-gray-600">{{ $post->title }}</p>
                            <p class="text-xs text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center py-4">Aucune activité récente</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection