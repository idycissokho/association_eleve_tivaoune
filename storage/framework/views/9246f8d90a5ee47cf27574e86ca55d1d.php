<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements - Association des Anciens Élèves du Lycée de Tivaouane</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/premium-design.css')); ?>">
</head>
<body>
    
    <nav class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-md shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" class="h-10 w-10">
                    <span class="ml-3 text-xl font-bold text-blue-900">AELT 93-97</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="<?php echo e(route('home')); ?>" class="text-gray-700 hover:text-blue-600 font-medium">Accueil</a>
                    <a href="<?php echo e(route('about')); ?>" class="text-gray-700 hover:text-blue-600 font-medium">À propos</a>
                    <a href="<?php echo e(route('posts.index')); ?>" class="text-gray-700 hover:text-blue-600 font-medium">Actualités</a>
                    <a href="<?php echo e(route('events.index')); ?>" class="text-gray-700 hover:text-blue-600 font-medium">Événements</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Galerie</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Connexion</a>
                    <a href="#" class="btn-primary">Adhérer</a>
                </div>
            </div>
        </div>
    </nav>

    
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img src="<?php echo e(asset('images/events-hero.jpg')); ?>" 
                 alt="Événements" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-800/80 to-blue-700/70"></div>
        </div>

        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-400/20 border border-yellow-400/30 mb-8">
                <span class="text-yellow-300 text-sm font-medium">Événements 2024</span>
            </div>

            
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                Nos 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                    Événements
                </span>
            </h1>

            
            <p class="text-xl md:text-2xl text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed">
                Découvrez nos prochains événements et rejoignez-nous pour des moments de partage et de convivialité.
            </p>
        </div>
    </section>

    
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
                            <span class="mx-2">•</span>
                            <span>150+ participants</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="h-64 bg-gradient-to-br from-red-500 to-red-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium">Octobre 2023</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Cérémonie de Remise de Bourses</h3>
                        <p class="text-gray-600 mb-4">Remise de bourses d'études à 20 élèves méritants du lycée de Tivaouane.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span>📍 Lycée de Tivaouane</span>
                            <span class="mx-2">•</span>
                            <span>20 bourses attribuées</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section-padding bg-gradient-to-r from-blue-900 to-blue-800">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-4xl font-bold mb-6">Organisez votre propre événement</h2>
            <p class="text-xl text-blue-100 mb-8">
                Vous souhaitez organiser un événement pour notre communauté ? 
                Contactez-nous pour en discuter !
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-yellow-400 text-blue-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-300 transition-colors">
                    Proposer un événement
                </a>
                <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-blue-900 transition-colors">
                    Nous contacter
                </a>
            </div>
        </div>
    </section>

    
    <footer class="bg-gray-900 text-white section-padding">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center mb-6">
                        <img src="<?php echo e(asset('images/logo-white.png')); ?>" alt="Logo" class="h-10 w-10">
                        <span class="ml-3 text-xl font-bold">AELT 93-97</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Association des Anciens Élèves du Lycée de Tivaouane - Génération 1993-1997
                    </p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Navigation</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="<?php echo e(route('home')); ?>" class="hover:text-white">Accueil</a></li>
                        <li><a href="<?php echo e(route('about')); ?>" class="hover:text-white">À propos</a></li>
                        <li><a href="<?php echo e(route('posts.index')); ?>" class="hover:text-white">Actualités</a></li>
                        <li><a href="<?php echo e(route('events.index')); ?>" class="hover:text-white">Événements</a></li>
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
</html><?php /**PATH C:\Users\HP\association-tivaouane\resources\views/events/index.blade.php ENDPATH**/ ?>