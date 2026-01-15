@extends('layouts.app')

@section('title', 'Evenements - AELT 93-97')

@section('content')
<section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Evenements</h1>
        <p class="text-xl text-blue-200">Decouvrez nos prochains rendez-vous</p>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-8">
                <div class="card-premium">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=400" alt="Evenement" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4 bg-red-600 text-white px-4 py-2 rounded-lg font-bold">
                                <div class="text-2xl">25</div>
                                <div class="text-xs">FEV</div>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Assemblee Generale Annuelle 2024</h3>
                            <div class="space-y-3 mb-6">
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>
                                    <span>Samedi 25 Fevrier 2024, 14h00</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>
                                    <span>Lycee de Tivaouane, Salle de Conference</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-users text-blue-600 mr-3"></i>
                                    <span>150 participants attendus</span>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-6">
                                Rejoignez-nous pour notre assemblee generale annuelle. Bilan des activites, presentation des projets et election du nouveau bureau.
                            </p>
                            <a href="#" class="btn-primary">
                                <i class="fas fa-ticket-alt mr-2"></i>S'inscrire
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-premium">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=400" alt="Evenement" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4 bg-blue-600 text-white px-4 py-2 rounded-lg font-bold">
                                <div class="text-2xl">10</div>
                                <div class="text-xs">MAR</div>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Conference sur l'Entrepreneuriat</h3>
                            <div class="space-y-3 mb-6">
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>
                                    <span>Dimanche 10 Mars 2024, 10h00</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>
                                    <span>Hotel Teranga, Dakar</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-users text-blue-600 mr-3"></i>
                                    <span>100 places disponibles</span>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-6">
                                Conference animee par nos membres entrepreneurs. Partage d'experiences et conseils pour reussir dans les affaires.
                            </p>
                            <a href="#" class="btn-primary">
                                <i class="fas fa-ticket-alt mr-2"></i>S'inscrire
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-premium">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=400" alt="Evenement" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4 bg-green-600 text-white px-4 py-2 rounded-lg font-bold">
                                <div class="text-2xl">20</div>
                                <div class="text-xs">AVR</div>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Gala de Bienfaisance</h3>
                            <div class="space-y-3 mb-6">
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-calendar-alt text-blue-600 mr-3"></i>
                                    <span>Samedi 20 Avril 2024, 19h00</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>
                                    <span>Radisson Blu Hotel, Dakar</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-users text-blue-600 mr-3"></i>
                                    <span>200 invites</span>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-6">
                                Soiree de gala pour lever des fonds destines a la renovation de la bibliotheque du lycee. Diner, spectacle et tombola.
                            </p>
                            <a href="#" class="btn-primary">
                                <i class="fas fa-ticket-alt mr-2"></i>S'inscrire
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <div class="card-premium">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Calendrier</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4 pb-4 border-b">
                            <div class="bg-red-100 text-red-600 px-3 py-2 rounded-lg font-bold text-center min-w-[60px]">
                                <div class="text-xl">25</div>
                                <div class="text-xs">FEV</div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">AG Annuelle</h4>
                                <p class="text-sm text-gray-600">14h00 - Tivaouane</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4 pb-4 border-b">
                            <div class="bg-blue-100 text-blue-600 px-3 py-2 rounded-lg font-bold text-center min-w-[60px]">
                                <div class="text-xl">10</div>
                                <div class="text-xs">MAR</div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Conference</h4>
                                <p class="text-sm text-gray-600">10h00 - Dakar</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-green-100 text-green-600 px-3 py-2 rounded-lg font-bold text-center min-w-[60px]">
                                <div class="text-xl">20</div>
                                <div class="text-xs">AVR</div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Gala</h4>
                                <p class="text-sm text-gray-600">19h00 - Dakar</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-900 to-blue-800 rounded-2xl p-8 text-white">
                    <h3 class="text-xl font-bold mb-4">Proposer un evenement</h3>
                    <p class="text-blue-100 mb-6">Vous avez une idee d'evenement? Partagez-la avec nous!</p>
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-300 transition-colors">
                        <i class="fas fa-plus mr-2"></i>Proposer
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
