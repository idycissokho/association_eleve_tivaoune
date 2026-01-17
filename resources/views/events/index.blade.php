@extends('layouts.app')

@section('title', 'Événements - Association des Anciens Élèves du Lycée de Tivaouane')

@section('content')
    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        {{-- Background Image avec Overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/events-hero.jpg') }}" 
                 alt="Événements" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-800/80 to-blue-700/70"></div>
        </div>

        {{-- Contenu Principal --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            {{-- Badge Premium --}}
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-400/20 border border-yellow-400/30 mb-8">
                <span class="text-yellow-300 text-sm font-medium">Événements 2024</span>
            </div>

            {{-- Titre Principal --}}
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                Nos 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                    Événements
                </span>
            </h1>

            {{-- Sous-titre --}}
            <p class="text-xl md:text-2xl text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed">
                Découvrez nos prochains événements et rejoignez-nous pour des moments de partage et de convivialité.
            </p>
        </div>
    </section>

    {{-- Section Événements à venir --}}
    <section class="section-padding bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Événements à venir</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Ne manquez pas nos prochains rendez-vous qui renforcent les liens de notre communauté.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card-premium overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="text-4xl font-bold mb-2">15</div>
                            <div class="text-lg">FÉV</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Assemblée Générale</h3>
                        <p class="text-gray-600 mb-4">Assemblée générale annuelle pour faire le bilan de l'année et définir les objectifs futurs.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-gray-500">📍 Dakar, Sénégal</span>
                            <span class="text-sm text-blue-600 font-medium">14h00 - 18h00</span>
                        </div>
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            S'inscrire
                        </button>
                    </div>
                </div>
                
                <div class="card-premium overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-yellow-400 to-yellow-500 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="text-4xl font-bold mb-2">20</div>
                            <div class="text-lg">MAR</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Gala de Bienfaisance</h3>
                        <p class="text-gray-600 mb-4">Soirée de gala pour collecter des fonds destinés aux projets éducatifs de notre lycée.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-gray-500">📍 Tivaouane, Sénégal</span>
                            <span class="text-sm text-yellow-600 font-medium">19h00 - 23h00</span>
                        </div>
                        <button class="w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition-colors">
                            S'inscrire
                        </button>
                    </div>
                </div>

                <div class="card-premium overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="text-4xl font-bold mb-2">10</div>
                            <div class="text-lg">AVR</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Journée Portes Ouvertes</h3>
                        <p class="text-gray-600 mb-4">Visite du lycée et rencontre avec les élèves actuels pour partager nos expériences.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-gray-500">📍 Lycée de Tivaouane</span>
                            <span class="text-sm text-green-600 font-medium">09h00 - 16h00</span>
                        </div>
                        <button class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition-colors">
                            S'inscrire
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Événements passés --}}
    <section class="section-padding bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Événements passés</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Revivez les moments forts de nos précédents événements.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="h-64 bg-gradient-to-br from-purple-500 to-purple-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-medium">Décembre 2023</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Réunion Annuelle</h3>
                        <p class="text-gray-600 mb-4">Grande réunion annuelle avec plus de 150 participants venus de différents pays.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span>📍 Dakar, Sénégal</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="h-64 bg-gradient-to-br from-red-500 to-red-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium">Octobre 2023</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Journée Solidarité</h3>
                        <p class="text-gray-600 mb-4">Action de solidarité avec distribution de fournitures scolaires aux élèves actuels.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span>📍 Lycée de Tivaouane</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection