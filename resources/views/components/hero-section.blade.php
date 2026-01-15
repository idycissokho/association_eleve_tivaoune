{{-- Hero Section Premium --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    {{-- Background Image avec Overlay --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/lycee-tivaouane-hero.jpg') }}" 
             alt="Lycée de Tivaouane" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 via-blue-800/80 to-blue-700/70"></div>
    </div>

    {{-- Contenu Principal --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        {{-- Badge Premium --}}
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-400/20 border border-yellow-400/30 mb-8">
            <span class="text-yellow-300 text-sm font-medium">Génération 1993 - 1997</span>
        </div>

        {{-- Titre Principal --}}
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
            Association des 
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                Anciens Élèves
            </span>
            <br>du Lycée de Tivaouane
        </h1>

        {{-- Sous-titre --}}
        <p class="text-xl md:text-2xl text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed">
            Unis par notre passé, engagés pour l'avenir. 
            Ensemble, nous bâtissons un réseau solidaire au service de l'excellence.
        </p>

        {{-- Boutons CTA Premium --}}
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="#" 
               class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 font-semibold rounded-full hover:from-yellow-300 hover:to-yellow-400 transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <span>Rejoindre l'Association</span>
                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>

            <a href="{{ route('about') }}" 
               class="inline-flex items-center px-8 py-4 border-2 border-white/30 text-white font-semibold rounded-full hover:bg-white/10 hover:border-white/50 transition-all duration-300">
                Découvrir nos Actions
            </a>
        </div>

        {{-- Statistiques --}}
        <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">250+</div>
                <div class="text-blue-100 text-sm uppercase tracking-wide">Membres Actifs</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">30</div>
                <div class="text-blue-100 text-sm uppercase tracking-wide">Années d'Existence</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">50+</div>
                <div class="text-blue-100 text-sm uppercase tracking-wide">Projets Réalisés</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">15</div>
                <div class="text-blue-100 text-sm uppercase tracking-wide">Pays Représentés</div>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="animate-bounce">
            <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</section>