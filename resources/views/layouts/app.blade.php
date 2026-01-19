<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AELT 93-97')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/premium-design.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-50">
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Succès !',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erreur !',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
    <nav class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-md shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-blue-700 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-xl">LT</span>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-blue-900 block">AELT 93-97</span>
                        <span class="text-xs text-gray-600">Generation 1993-1997</span>
                    </div>
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium">Accueil</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium">A propos</a>
                    <a href="{{ route('posts.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Actualites</a>
                    <!-- <a href="{{ route('events.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Evenements</a> -->
                    <a href="/galerie" class="text-gray-700 hover:text-blue-600 font-medium">Galerie</a>
                </div>
                
                <div class="hidden md:flex items-center space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                            <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium">
                                <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                            </button>
                        </form>
                    @else
                        <a href="/connexion" class="text-blue-600 hover:text-blue-800 font-medium">
                            <i class="fas fa-sign-in-alt mr-2"></i>Connexion
                        </a>
                        <a href="/inscription" class="btn-primary">
                            <i class="fas fa-user-plus mr-2"></i>Adhérer
                        </a>
                    @endauth
                </div>
                
                <button class="md:hidden text-gray-700" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <div class="md:hidden hidden bg-white border-t" id="mobile-menu">
            <div class="px-4 py-4 space-y-3">
                <a href="{{ route('home') }}" class="block py-2">Accueil</a>
                <a href="{{ route('about') }}" class="block py-2">A propos</a>
                <a href="{{ route('posts.index') }}" class="block py-2">Actualites</a>
                <a href="/galerie" class="block py-2">Galerie</a>
                <hr class="my-3">
                <a href="/connexion" class="block py-2 text-blue-600 font-medium">
                    <i class="fas fa-sign-in-alt mr-2"></i>Connexion
                </a>
                <a href="/inscription" class="block py-2 bg-blue-600 text-white rounded-lg px-4 text-center font-medium">
                    <i class="fas fa-user-plus mr-2"></i>Adherer
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer class="bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center">
                            <span class="text-blue-900 font-bold text-xl">LT</span>
                        </div>
                        <span class="text-xl font-bold">AELT 93-97</span>
                    </div>
                    <p class="text-gray-300 mb-6">Association des Anciens Eleves du Lycee de Tivaouane</p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center hover:bg-pink-700">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-6 text-yellow-400">Navigation</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Accueil</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white">A propos</a></li>
                        <li><a href="{{ route('posts.index') }}" class="text-gray-300 hover:text-white">Actualites</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-6 text-yellow-400">Contact</h3>
                    <ul class="space-y-4">
                        <li><i class="fas fa-envelope text-yellow-400 mr-3"></i>faltapha@hotmail.com</li>
                        <li><i class="fas fa-envelope text-yellow-400 mr-3"></i>generation9396@gmail.com</li>
                        <li><i class="fas fa-envelope text-yellow-400 mr-3"></i>mndong2003@yahoo.fr</li>
                        <li><i class="fas fa-phone text-yellow-400 mr-3"></i>+221 77 619 15 49</li>
                        <li><i class="fas fa-map-marker-alt text-yellow-400 mr-3"></i>Tivaouane, Senegal</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-6 text-yellow-400">Newsletter</h3>
                    <p class="text-gray-300 mb-4">Restez informe</p>
                    <input type="email" placeholder="Votre email" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white mb-3">
                    <button class="w-full bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 font-semibold py-3 rounded-lg">S'abonner</button>
                </div>
            </div>
            
            <div class="border-t border-white/10 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 AELT 93-97. Tous droits reserves.</p>
            </div>
        </div>
    </footer>
</body>
</html>