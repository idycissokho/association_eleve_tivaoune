<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association des Anciens Élèves du Lycée de Tivaouane</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/premium-design.css') }}">
</head>
<body>
    {{-- Navigation Premium --}}
    <nav class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-md shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-10">
                    <span class="ml-3 text-xl font-bold text-blue-900">AELT 93-97</span>
                </div>
                <!-- <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium">Accueil</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium">À propos</a>
                    <a href="{{ route('posts.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Actualités</a>
                    <a href="{{ route('gallery.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Galerie</a>
                </div> -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Connexion</a>
                    <a href="#" class="btn-primary">Adhérer</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    @include('components.hero-section')

    {{-- Section Présentation --}}
    <section class="section-padding bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Notre Association</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Depuis plus de 30 ans, nous rassemblons les anciens élèves du Lycée de Tivaouane 
                    dans un esprit de solidarité et d'entraide mutuelle.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="card-premium text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Réseau Solidaire</h3>
                    <p class="text-gray-600">Un réseau de plus de 250 membres actifs répartis dans 15 pays.</p>
                </div>

                <div class="card-premium text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Projets d'Impact</h3>
                    <p class="text-gray-600">Plus de 50 projets réalisés pour le développement de notre communauté.</p>
                </div>

                <div class="card-premium text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Entraide</h3>
                    <p class="text-gray-600">Un esprit de solidarité qui unit nos membres depuis 30 ans.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Message du Président --}}
    <section class="section-padding">
        <div class="max-w-7xl mx-auto">
            <div class="bg-gradient-to-r from-blue-900 to-blue-800 rounded-3xl p-12 text-white">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Message du Président</h2>
                        <p class="text-blue-100 mb-6 leading-relaxed">
                            "Notre association représente bien plus qu'un simple réseau d'anciens élèves. 
                            Elle incarne les valeurs d'excellence, de solidarité et d'engagement qui nous 
                            ont été transmises au Lycée de Tivaouane."
                        </p>
                        <div class="flex items-center">
                            <img src="{{ asset('images/president.jpg') }}" alt="Président" class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <div class="font-semibold">Amadou DIALLO</div>
                                <div class="text-blue-200 text-sm">Président de l'Association</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('images/president-full.jpg') }}" alt="Président" class="rounded-2xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Premium --}}
    <footer class="bg-gray-900 text-white section-padding">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('images/logo-white.png') }}" alt="Logo" class="h-10 w-10">
                        <span class="ml-3 text-xl font-bold">AELT 93-97</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Association des Anciens Élèves du Lycée de Tivaouane - Génération 1993-1997
                    </p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Navigation</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Accueil</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white">À propos</a></li>
                        <li><a href="{{ route('posts.index') }}" class="hover:text-white">Actualités</a></li>
                        <li><a href="{{ route('events.index') }}" class="hover:text-white">Événements</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Email: contact@aelt93-97.org</li>
                        <li>Tél: +221 77 123 45 67</li>
                        <li>Tivaouane, Sénégal</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M20 10C20 4.477 15.523 0 10 0S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Association des Anciens Élèves du Lycée de Tivaouane. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>