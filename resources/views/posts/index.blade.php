@extends('layouts.app')

@section('title', 'Actualites - AELT 93-97')

@section('content')
<section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Actualites</h1>
        <p class="text-xl text-blue-200">Restez informe de nos dernieres nouvelles</p>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-4 mb-12 justify-center">
            <a href="{{ route('posts.index') }}" class="px-6 py-3 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition-colors">
                Toutes
            </a>
            <a href="{{ route('posts.index', ['category' => 'evenement']) }}" class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                Evenements
            </a>
            <a href="{{ route('posts.index', ['category' => 'projet']) }}" class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                Projets
            </a>
            <a href="{{ route('posts.index', ['category' => 'annonce']) }}" class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                Annonces
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <article class="card-premium group cursor-pointer">
                <div class="relative overflow-hidden rounded-xl mb-6">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600" alt="Article" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Evenement</span>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>15 Janvier 2024</span>
                    <span class="mx-2">•</span>
                    <i class="fas fa-user mr-2"></i>
                    <span>Admin</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                    Assemblee Generale Annuelle 2024
                </h3>
                <p class="text-gray-600 mb-6">
                    Rejoignez-nous pour notre assemblee generale annuelle. Un moment important pour faire le bilan et definir nos objectifs.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">
                    Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>

            <article class="card-premium group cursor-pointer">
                <div class="relative overflow-hidden rounded-xl mb-6">
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600" alt="Article" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Projet</span>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>10 Janvier 2024</span>
                    <span class="mx-2">•</span>
                    <i class="fas fa-user mr-2"></i>
                    <span>Admin</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                    Renovation de la Bibliotheque
                </h3>
                <p class="text-gray-600 mb-6">
                    Notre projet de renovation de la bibliotheque du lycee avance bien. Decouvrez les progres realises.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">
                    Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>

            <article class="card-premium group cursor-pointer">
                <div class="relative overflow-hidden rounded-xl mb-6">
                    <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=600" alt="Article" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-yellow-500 text-white px-4 py-2 rounded-full text-sm font-semibold">Annonce</span>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>5 Janvier 2024</span>
                    <span class="mx-2">•</span>
                    <i class="fas fa-user mr-2"></i>
                    <span>Admin</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                    Nouveaux Membres Janvier 2024
                </h3>
                <p class="text-gray-600 mb-6">
                    Nous sommes heureux d'accueillir 15 nouveaux membres ce mois-ci. Bienvenue dans notre grande famille!
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">
                    Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>

            <article class="card-premium group cursor-pointer">
                <div class="relative overflow-hidden rounded-xl mb-6">
                    <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=600" alt="Article" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Culture</span>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>28 Decembre 2023</span>
                    <span class="mx-2">•</span>
                    <i class="fas fa-user mr-2"></i>
                    <span>Admin</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                    Celebration du Nouvel An
                </h3>
                <p class="text-gray-600 mb-6">
                    Retour en images sur notre celebration du Nouvel An. Une soiree memorable avec nos membres.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">
                    Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>

            <article class="card-premium group cursor-pointer">
                <div class="relative overflow-hidden rounded-xl mb-6">
                    <img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?w=600" alt="Article" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-red-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Solidarite</span>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>20 Decembre 2023</span>
                    <span class="mx-2">•</span>
                    <i class="fas fa-user mr-2"></i>
                    <span>Admin</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                    Action Humanitaire Reussie
                </h3>
                <p class="text-gray-600 mb-6">
                    Notre action de distribution de fournitures scolaires a touche plus de 200 eleves. Merci a tous les contributeurs.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">
                    Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>

            <article class="card-premium group cursor-pointer">
                <div class="relative overflow-hidden rounded-xl mb-6">
                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=600" alt="Article" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Evenement</span>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <i class="fas fa-calendar mr-2"></i>
                    <span>15 Decembre 2023</span>
                    <span class="mx-2">•</span>
                    <i class="fas fa-user mr-2"></i>
                    <span>Admin</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                    Conference sur l'Entrepreneuriat
                </h3>
                <p class="text-gray-600 mb-6">
                    Une conference inspirante animee par nos membres entrepreneurs. Des conseils precieux pour les jeunes.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">
                    Lire la suite <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>
        </div>

        <div class="mt-12 flex justify-center">
            <nav class="flex space-x-2">
                <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold">1</a>
                <a href="#" class="px-4 py-2 bg-white text-gray-700 rounded-lg font-semibold hover:bg-gray-100">2</a>
                <a href="#" class="px-4 py-2 bg-white text-gray-700 rounded-lg font-semibold hover:bg-gray-100">3</a>
                <a href="#" class="px-4 py-2 bg-white text-gray-700 rounded-lg font-semibold hover:bg-gray-100">Suivant</a>
            </nav>
        </div>
    </div>
</section>
@endsection
