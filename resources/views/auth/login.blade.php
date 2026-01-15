@extends('layouts.app')

@section('title', 'Connexion - AELT 93-97')

@section('content')
<section class="py-20 bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex items-center">
    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="card-premium">
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-900 to-blue-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-3xl">LT</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Connexion</h1>
                <p class="text-gray-600">Acced ez a votre espace membre</p>
            </div>

            <form class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Adresse email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="votre@email.com" required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Mot de passe</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="••••••••" required>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                    </label>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-semibold">Mot de passe oublie?</a>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-blue-900 to-blue-800 text-white font-bold py-4 rounded-lg hover:from-blue-800 hover:to-blue-700 transition-all shadow-lg hover:shadow-xl">
                    <i class="fas fa-sign-in-alt mr-2"></i>Se connecter
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-gray-600">Pas encore membre? <a href="/inscription" class="text-blue-600 hover:text-blue-800 font-semibold">Inscrivez-vous</a></p>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-200">
                <p class="text-center text-sm text-gray-500 mb-4">Ou connectez-vous avec</p>
                <div class="grid grid-cols-2 gap-4">
                    <button class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        <i class="fab fa-google text-red-500 mr-2"></i>
                        <span class="text-sm font-semibold text-gray-700">Google</span>
                    </button>
                    <button class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        <i class="fab fa-facebook text-blue-600 mr-2"></i>
                        <span class="text-sm font-semibold text-gray-700">Facebook</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
