@extends('layouts.app')

@section('title', 'Accueil - AELT 93-97')

@section('content')
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white overflow-hidden">
    <!-- <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div> -->

    <div class="absolute inset-0 opacity-40">
        <img src="{{ asset('images/officiel.jpeg') }}" alt="Membres" class="w-full h-full object-cover">
    </div>

    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative z-10">
        <div class="text-center">
            <div class="inline-block mb-8 animate-fade-in-up">
                <div class="w-24 h-24 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center mx-auto shadow-2xl">
                    <span class="text-blue-900 font-bold text-4xl">LT</span>
                </div>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in-up">
                Association des Anciens Eleves
            </h1>
            <p class="text-2xl md:text-3xl mb-4 text-blue-200 animate-fade-in-up">
                Lycee de Tivaouane - Generation 1993-1997
            </p>
            <p class="text-xl md:text-2xl mb-12 text-yellow-300 font-semibold animate-fade-in-up">
                Unis par notre passe, engages pour l'avenir
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up">
                <a href="/inscription" class="btn-primary text-lg px-10 py-5">
                    <i class="fas fa-user-plus mr-2"></i>Rejoindre l'association
                </a>
                <a href="#actions" class="inline-flex items-center px-10 py-5 border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-blue-900 transition-all duration-300 text-lg">
                    <i class="fas fa-arrow-down mr-2"></i>Decouvrir nos actions
                </a>
            </div>
        </div>
    </div>
    
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#f8fafc"/>
        </svg>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-blue-900 mb-2">250+</div>
                <div class="text-gray-600 font-medium">Membres actifs</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-yellow-500 mb-2">30</div>
                <div class="text-gray-600 font-medium">Ans d'existence</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-green-600 mb-2">50+</div>
                <div class="text-gray-600 font-medium">Projets realises</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-purple-600 mb-2">15</div>
                <div class="text-gray-600 font-medium">Pays representes</div>
            </div>
        </div>
    </div>
</section>

<section id="actions" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Notre Association</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Depuis plus de 30 ans, nous rassemblons les anciens eleves dans un esprit de solidarite
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-premium text-center group hover:scale-105 transition-transform duration-300">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-users text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Reseau Solidaire</h3>
                <p class="text-gray-600 leading-relaxed">Un reseau de plus de 250 membres actifs repartis dans 15 pays</p>
            </div>

            <div class="card-premium text-center group hover:scale-105 transition-transform duration-300">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-lightbulb text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Projets d'Impact</h3>
                <p class="text-gray-600 leading-relaxed">Plus de 50 projets realises pour le developpement de notre communaute</p>
            </div>

            <div class="card-premium text-center group hover:scale-105 transition-transform duration-300">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-heart text-white text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Entraide</h3>
                <p class="text-gray-600 leading-relaxed">Un esprit de solidarite qui unit nos membres depuis 30 ans</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 rounded-3xl overflow-hidden shadow-2xl">
            <div class="grid md:grid-cols-2 gap-0">
                <div class="p-12 text-white flex flex-col justify-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Message du President</h2>
                    <p class="text-blue-100 mb-6 leading-relaxed text-lg">
                        Notre association represente bien plus qu'un simple reseau d'anciens eleves. Elle incarne les valeurs d'excellence, de solidarite et d'engagement transmises au Lycee de Tivaouane.
                    </p>
                    <p class="text-blue-100 mb-8 leading-relaxed">
                        Ensemble, nous continuons a batir un avenir meilleur pour notre communaute.
                    </p>
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-900 font-bold text-2xl">AD</span>
                        </div>
                        <div>
                            <div class="font-bold text-lg">Amadou DIALLO</div>
                            <div class="text-blue-200">President de l'Association</div>
                        </div>
                    </div>
                </div>
                <div class="relative h-96 md:h-auto">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/20 to-blue-600/20"></div>
                    <img src="{{ asset('images/directeur.jpeg') }}" alt="President" class="w-full h-full object-cover">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-r from-yellow-400 to-yellow-500">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6">Rejoignez-nous des aujourd'hui</h2>
        <p class="text-xl text-blue-800 mb-8">Faites partie d'une communaute engagee et solidaire</p>
        <a href="/inscription" class="inline-flex items-center px-10 py-5 bg-blue-900 text-white font-bold rounded-full hover:bg-blue-800 transition-all duration-300 text-lg shadow-xl hover:shadow-2xl transform hover:scale-105">
            <i class="fas fa-user-plus mr-3"></i>Devenir membre
        </a>
    </div>
</section>
@endsection
