@extends('layouts.app')

@section('title', 'Actualités - Association des Anciens Élèves du Lycée de Tivaouane')

@section('content')
<style>
    .fade-in-up { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.8s ease-out forwards; }
    @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
    .hover-scale { transition: all 0.3s ease; }
    .hover-scale:hover { transform: scale(1.05); }
    .article-card { transition: all 0.4s ease; }
    .article-card:hover { transform: translateY(-10px); box-shadow: 0 25px 50px rgba(0,0,0,0.15); }
    .btn-read-more { background: linear-gradient(135deg, #d97706, #f59e0b); transition: all 0.3s ease; }
    .btn-read-more:hover { background: linear-gradient(135deg, #b45309, #d97706); transform: translateY(-2px); }
</style>

{{-- Hero Section --}}
<!-- <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900">
    <div class="absolute inset-0 opacity-30">
        <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" 
             alt="Paysage africain" class="w-full h-full object-cover">
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center px-6 py-3 rounded-full bg-amber-500/20 border border-amber-400/30 mb-8 fade-in-up">
            <span class="text-amber-300 text-sm font-medium">✨ Restez connectés avec nous</span>
        </div>
        
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-8 leading-tight fade-in-up" style="animation-delay: 0.2s;">
            Dernières 
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-orange-400">
                Actualités
            </span>
            <div class="text-3xl md:text-4xl lg:text-5xl mt-4 text-blue-200">
                de l'Association
            </div>
        </h1>
        
        <p class="text-xl md:text-2xl text-blue-100 mb-12 max-w-4xl mx-auto leading-relaxed fade-in-up" style="animation-delay: 0.4s;">
            Découvrez les dernières nouvelles, événements et réalisations de notre communauté d'anciens élèves
        </p>
    </div>
</section> -->

{{-- Section Articles Récents --}}
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Nos <span class="text-blue-600">Dernières Nouvelles</span>
            </h2>
            <!-- <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Suivez l'actualité de notre association et les projets qui nous tiennent à cœur
            </p> -->
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                cette page est en cours de développement.
            </p>
        </div>
        
        <!-- <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Article 1 --}}
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg article-card fade-in-up">
                <div class="h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="École en Afrique" class="w-full h-full object-cover hover-scale">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-medium">ÉDUCATION</span>
                        <span class="text-gray-500 text-sm ml-auto">15 Janvier 2024</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors">
                        Nouveau Projet Éducatif à Tivaouane
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Lancement d'un ambitieux programme de bourses d'études pour soutenir 50 élèves méritants 
                        du lycée de Tivaouane avec un budget de 25 millions FCFA.
                    </p>
                    <button class="btn-read-more text-white px-6 py-3 rounded-full font-semibold shadow-lg">
                        Lire la suite →
                    </button>
                </div>
            </article>

            {{-- Article 2 --}}
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg article-card fade-in-up" style="animation-delay: 0.2s;">
                <div class="h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Baobab africain" class="w-full h-full object-cover hover-scale">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium">ENVIRONNEMENT</span>
                        <span class="text-gray-500 text-sm ml-auto">12 Janvier 2024</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors">
                        Plantation de 1000 Arbres
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Notre association s'engage pour l'environnement avec une grande campagne de reboisement 
                        dans la région de Tivaouane, en partenariat avec les autorités locales.
                    </p>
                    <button class="btn-read-more text-white px-6 py-3 rounded-full font-semibold shadow-lg">
                        Lire la suite →
                    </button>
                </div>
            </article>

            {{-- Article 3 --}}
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg article-card fade-in-up" style="animation-delay: 0.4s;">
                <div class="h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Marché africain" class="w-full h-full object-cover hover-scale">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-medium">CULTURE</span>
                        <span class="text-gray-500 text-sm ml-auto">8 Janvier 2024</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors">
                        Festival Culturel Annuel
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Préparation du grand festival culturel de notre association qui mettra à l'honneur 
                        les traditions sénégalaises et l'art de notre région.
                    </p>
                    <button class="btn-read-more text-white px-6 py-3 rounded-full font-semibold shadow-lg">
                        Lire la suite →
                    </button>
                </div>
            </article>

            {{-- Article 4 --}}
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg article-card fade-in-up" style="animation-delay: 0.6s;">
                <div class="h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1571771019784-3ff35f4f4277?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Femmes africaines" class="w-full h-full object-cover hover-scale">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-xs font-medium">SOLIDARITÉ</span>
                        <span class="text-gray-500 text-sm ml-auto">5 Janvier 2024</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors">
                        Soutien aux Femmes Entrepreneures
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Lancement d'un programme de microfinance pour accompagner 30 femmes entrepreneures 
                        de la région dans leurs projets d'activités génératrices de revenus.
                    </p>
                    <button class="btn-read-more text-white px-6 py-3 rounded-full font-semibold shadow-lg">
                        Lire la suite →
                    </button>
                </div>
            </article>

            {{-- Article 5 --}}
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg article-card fade-in-up" style="animation-delay: 0.8s;">
                <div class="h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Coucher de soleil africain" class="w-full h-full object-cover hover-scale">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-medium">ASSEMBLÉE</span>
                        <span class="text-gray-500 text-sm ml-auto">2 Janvier 2024</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors">
                        Assemblée Générale 2024
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Invitation à tous les membres pour notre assemblée générale annuelle qui se tiendra 
                        le 15 février 2024 à Dakar. Ordre du jour et modalités d'inscription.
                    </p>
                    <button class="btn-read-more text-white px-6 py-3 rounded-full font-semibold shadow-lg">
                        Lire la suite →
                    </button>
                </div>
            </article>

            {{-- Article 6 --}}
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg article-card fade-in-up" style="animation-delay: 1s;">
                <div class="h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1484318571209-661cf29a69ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Enfants africains" class="w-full h-full object-cover hover-scale">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-medium">PARTENARIAT</span>
                        <span class="text-gray-500 text-sm ml-auto">28 Décembre 2023</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors">
                        Partenariat avec l'UNICEF
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Signature d'un accord de partenariat avec l'UNICEF pour améliorer l'accès à l'éducation 
                        et à la santé des enfants dans la région de Tivaouane.
                    </p>
                    <button class="btn-read-more text-white px-6 py-3 rounded-full font-semibold shadow-lg">
                        Lire la suite →
                    </button>
                </div>
            </article>
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center mt-16">
            <div class="flex items-center space-x-2">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">1</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">2</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">3</button>
                <span class="px-3 text-gray-500">...</span>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                    Suivant →
                </button>
            </div>
        </div> -->
    </div>
</section>

{{-- Section Newsletter --}}
<section class="py-20 bg-gradient-to-r from-blue-900 via-indigo-900 to-purple-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-12 border border-white/20">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Restez <span class="text-amber-400">Informés</span>
            </h2>
            <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                Abonnez-vous à notre newsletter pour recevoir toutes nos actualités et ne rien manquer de la vie de notre association
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                <input type="email" placeholder="Votre adresse email" 
                       class="flex-1 px-6 py-4 rounded-full border-0 bg-white/20 backdrop-blur-sm text-white placeholder-blue-200 focus:ring-2 focus:ring-amber-400 focus:outline-none">
                <button class="bg-gradient-to-r from-amber-500 to-orange-500 text-white px-8 py-4 rounded-full hover:from-amber-600 hover:to-orange-600 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
                    S'abonner
                </button>
            </div>
        </div>
    </div>
</section>
@endsection