<?php $__env->startSection('title', 'À propos - Association des Anciens Élèves du Lycée de Tivaouane'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .hover-lift { transition: all 0.3s ease; }
    .hover-lift:hover { transform: translateY(-8px); }
    .fade-in { opacity: 0; animation: fadeIn 1s ease-in forwards; }
    @keyframes fadeIn { to { opacity: 1; } }
    .slide-up { transform: translateY(30px); opacity: 0; animation: slideUp 0.8s ease-out forwards; }
    @keyframes slideUp { to { transform: translateY(0); opacity: 1; } }
</style>


<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900">
    <div class="absolute inset-0 opacity-50">
        <img src="<?php echo e(asset('images/monument.jpeg')); ?>" alt="Membres" class="w-full h-full object-cover">
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center px-6 py-3 rounded-full bg-yellow-400/20 border border-yellow-400/30 mb-8 fade-in">
            <span class="text-yellow-300 text-sm font-medium">Promotion 1993-1997 • Fondée en 2026</span>
        </div>
        
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-8 leading-tight slide-up">
            Bienvenue à l'Association des 
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                Anciens Élèves de Tivaouane
            </span>
            <div class="text-3xl md:text-4xl lg:text-5xl mt-4 text-blue-200">
                Promo 93-97
            </div>
        </h1>
        
        <p class="text-xl md:text-2xl text-blue-100 mb-12 max-w-4xl mx-auto leading-relaxed slide-up" style="animation-delay: 0.2s;">
            Unis par notre passé, engagés pour l'avenir. Découvrez notre histoire, nos valeurs et notre mission.
        </p>
    </div>
</section>


<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="hover-lift">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-yellow-500 rounded-3xl opacity-20 blur-lg"></div>
                    <img src="<?php echo e(asset('images/officiel.jpeg')); ?>" alt="Promotion 1993-1997" 
                         class="relative w-full h-96 object-cover rounded-2xl shadow-2xl">
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                        <span class="text-blue-900 font-bold">Promotion 1993-1997</span>
                    </div>
                </div>
            </div>
            
            <div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
                    Notre <span class="text-blue-600">Histoire</span>
                </h2>
                <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                    <p class="hover-lift">
                        L'Association des Anciens Élèves du Lycée de Tivaouane - Promotion 1993-1997 
                        a vu le jour en <strong class="text-blue-600">2026</strong>, portée par la volonté 
                        commune de maintenir et renforcer les liens tissés durant nos années de formation.
                    </p>
                    <p class="hover-lift">
                        Notre lycée, symbole d'excellence éducative au Sénégal, nous a forgés et nous 
                        a transmis des valeurs qui nous unissent encore aujourd'hui. Cette association 
                        est née du désir de <strong class="text-yellow-600">réunir tous les anciens élèves</strong> 
                        de notre promotion pour créer un réseau solidaire et dynamique.
                    </p>
                    <p class="hover-lift">
                        Depuis sa création, notre association rassemble des membres venus des quatre 
                        coins du monde, unis par cette expérience commune qui a marqué notre jeunesse 
                        et façonné notre avenir.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Notre <span class="text-blue-600">Mission</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Construire ensemble un avenir meilleur à travers la solidarité, l'entraide et des projets communs
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift group">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Solidarité</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Maintenir et renforcer les liens fraternels entre tous les membres de notre promotion, 
                    créer un réseau d'entraide mutuelle.
                </p>
            </div>
            
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift group">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M12 2l3.09 6.26L22 9l-5 4.87L18.18 21 12 17.77 5.82 21 7 13.87 2 9l6.91-.74L12 2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Innovation</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Développer des solutions créatives et modernes pour répondre aux défis 
                    de notre communauté et de notre époque.
                </p>
            </div>
            
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift group">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Projets Communs</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Développer des initiatives collectives pour contribuer au développement 
                    de notre lycée et de notre communauté.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Nos <span class="text-blue-600">Valeurs</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Les principes fondamentaux qui guident nos actions et renforcent notre unité
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group hover-lift">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-rose-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Amitié</h3>
                <p class="text-gray-600">Des liens sincères et durables forgés au lycée</p>
            </div>
            
            <div class="text-center group hover-lift">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Respect</h3>
                <p class="text-gray-600">Considération mutuelle et valorisation de chacun</p>
            </div>
            
            <div class="text-center group hover-lift">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Excellence</h3>
                <p class="text-gray-600">Recherche constante de la qualité dans nos actions</p>
            </div>
            
            <div class="text-center group hover-lift">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Partage</h3>
                <p class="text-gray-600">Transmission de nos expériences et de nos savoirs</p>
            </div>
        </div>
    </div>
</section>


<section class="py-20 bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Rejoignez notre <span class="text-yellow-400">Communauté</span>
        </h2>
        <p class="text-xl text-blue-100 mb-8 leading-relaxed">
            Faites partie de cette belle aventure humaine et contribuez à renforcer les liens de notre promotion
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/inscription" class="inline-flex items-center px-8 py-4 bg-yellow-400 text-blue-900 font-bold rounded-full hover:bg-yellow-300 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"/>
                </svg>
                Devenir membre
            </a>
            <a href="/contact" class="inline-flex items-center px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-blue-900 transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                Nous contacter
            </a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\association-tivaouane\resources\views/about.blade.php ENDPATH**/ ?>