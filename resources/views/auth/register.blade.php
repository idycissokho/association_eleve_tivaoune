@extends('layouts.app')

@section('title', 'Inscription - AELT 93-97')

@section('content')
<section class="py-20 bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex items-center">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="card-premium">
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-blue-900 font-bold text-3xl">LT</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Rejoignez-nous</h1>
                <p class="text-gray-600">Devenez membre de l'AELT 93-97</p>
            </div>

            <form class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Prenom</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Votre prenom" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nom</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Votre nom" required>
                    </div>
                </div>

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
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Telephone</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-phone text-gray-400"></i>
                        </div>
                        <input type="tel" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="+221 77 123 45 67" required>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Annee de promotion</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" required>
                            <option value="">Selectionnez</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Pays de residence</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" required>
                            <option value="">Selectionnez</option>
                            <option value="senegal">Senegal</option>
                            <option value="france">France</option>
                            <option value="usa">Etats-Unis</option>
                            <option value="canada">Canada</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Profession</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Votre profession">
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Mot de passe</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="••••••••" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Confirmer mot de passe</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="••••••••" required>
                        </div>
                    </div>
                </div>

                <div class="flex items-start">
                    <input type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 mt-1" required>
                    <label class="ml-3 text-sm text-gray-600">
                        J'accepte les <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">conditions d'utilisation</a> et la <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">politique de confidentialite</a>
                    </label>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 font-bold py-4 rounded-lg hover:from-yellow-300 hover:to-yellow-400 transition-all shadow-lg hover:shadow-xl">
                    <i class="fas fa-user-plus mr-2"></i>Creer mon compte
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-gray-600">Deja membre? <a href="/connexion" class="text-blue-600 hover:text-blue-800 font-semibold">Connectez-vous</a></p>
            </div>
        </div>
    </div>
</section>
@endsection
