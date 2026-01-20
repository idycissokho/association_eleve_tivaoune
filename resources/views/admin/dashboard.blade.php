@extends('layouts.admin')

@section('title', 'Admin Dashboard - AELT 93-97')

@section('head')
<style>
/* Premium Form Styles */
.form-group {
    position: relative;
}

.form-group input:focus {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
}

.role-card .role-option {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.role-card:hover .role-option {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.role-card input:checked + .role-option {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

/* Animations */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

#add-member-form {
    animation: slideIn 0.5s ease-out;
}

/* Hover effects */
.hover-lift {
    transition: transform 0.2s ease-in-out;
}

.hover-lift:hover {
    transform: translateY(-2px);
}

/* Card premium styling */
.card-premium {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

/* Gold background */
.gold-bg {
    background: linear-gradient(135deg, #f59e0b, #d97706);
}

/* Input focus states */
input:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Button hover effects */
button {
    transition: all 0.3s ease;
}

button:hover {
    transform: translateY(-1px);
}

/* Success/Error states */
.border-green-300 {
    border-color: #86efac;
}

.bg-green-50 {
    background-color: #f0fdf4;
}

.border-red-300 {
    border-color: #fca5a5;
}

.bg-red-50 {
    background-color: #fef2f2;
}
</style>
@endsection

@section('content')
@auth
<!-- Dashboard Content -->
<div id="dashboard-content" class="p-8">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Tableau de bord</h1>
        <p class="text-gray-600">Gérez votre association depuis ce panneau d'administration</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="card-premium rounded-2xl p-6 hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600 mb-1">Membres actifs</p>
                    <p class="text-3xl font-bold text-gray-900">{{ \App\Models\User::where('is_active', true)->count() }}</p>
                    <p class="text-sm text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>+12% ce mois
                    </p>
                </div>
                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
            </div>
        </div>

        <div class="card-premium rounded-2xl p-6 hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600 mb-1">Événements</p>
                    <p class="text-3xl font-bold text-gray-900">5</p>
                    <p class="text-sm text-blue-600 mt-1">
                        <i class="fas fa-calendar mr-1"></i>3 à venir
                    </p>
                </div>
                <div class="w-16 h-16 gold-bg rounded-2xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-calendar text-white text-2xl"></i>
                </div>
            </div>
        </div>

        <div class="card-premium rounded-2xl p-6 hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600 mb-1">Articles</p>
                    <p class="text-3xl font-bold text-gray-900">12</p>
                    <p class="text-sm gold-accent mt-1">
                        <i class="fas fa-eye mr-1"></i>1.2k vues
                    </p>
                </div>
                <div class="w-16 h-16 bg-gradient-to-br from-blue-800 to-blue-900 rounded-2xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-newspaper text-white text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="card-premium rounded-2xl p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Actions rapides</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <button onclick="showMembersSection()" class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all hover-lift group">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <i class="fas fa-users-cog text-white"></i>
                </div>
                <span class="text-blue-900 font-semibold">Gérer membres</span>
            </button>
            
            <button class="flex flex-col items-center p-6 bg-gradient-to-br from-amber-50 to-amber-100 rounded-xl hover:from-amber-100 hover:to-amber-200 transition-all hover-lift group">
                <div class="w-12 h-12 gold-bg rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <i class="fas fa-plus-circle text-white"></i>
                </div>
                <span class="text-amber-900 font-semibold">Créer événement</span>
            </button>
            
            <button onclick="showActualitesSection(); setTimeout(toggleActualiteForm, 100);" class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all hover-lift group">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-800 to-blue-900 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <i class="fas fa-newspaper text-white"></i>
                </div>
                <span class="text-blue-900 font-semibold">Créer actualité</span>
            </button>
            
            <button onclick="showGallerySection()" class="flex flex-col items-center p-6 bg-gradient-to-br from-amber-50 to-amber-100 rounded-xl hover:from-amber-100 hover:to-amber-200 transition-all hover-lift group">
                <div class="w-12 h-12 gold-bg rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <i class="fas fa-images text-white"></i>
                </div>
                <span class="text-amber-900 font-semibold">Gérer galerie</span>
            </button>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="card-premium rounded-2xl p-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Activité récente</h2>
        <div class="space-y-4">
            <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center">
                    <i class="fas fa-user-plus text-white text-sm"></i>
                </div>
                <div class="flex-1">
                    <p class="font-medium text-gray-900">Nouveau membre inscrit</p>
                    <p class="text-sm text-gray-600">Il y a 2 heures</p>
                </div>
            </div>
            
            <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl">
                <div class="w-10 h-10 gold-bg rounded-full flex items-center justify-center">
                    <i class="fas fa-calendar-plus text-white text-sm"></i>
                </div>
                <div class="flex-1">
                    <p class="font-medium text-gray-900">Événement créé</p>
                    <p class="text-sm text-gray-600">Il y a 1 jour</p>
                </div>
            </div>
            
            <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-800 to-blue-900 rounded-full flex items-center justify-center">
                    <i class="fas fa-newspaper text-white text-sm"></i>
                </div>
                <div class="flex-1">
                    <p class="font-medium text-gray-900">Article publié</p>
                    <p class="text-sm text-gray-600">Il y a 3 jours</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Members Management Section -->
<div id="members-content" class="p-8" style="display: none;">
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Gestion des Membres</h1>
                <p class="text-gray-600">Gérez les membres de l'association</p>
            </div>
            <button onclick="showDashboardSection()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all">
                <i class="fas fa-arrow-left mr-2"></i>Retour
            </button>
        </div>
    </div>

    <!-- Add Member Form (Hidden by default) -->
    <div id="add-member-form" class="card-premium rounded-2xl p-8 mb-8" style="display: none;">
        <!-- Header with gradient background -->
        <div class="bg-gradient-to-r from-blue-600 to-amber-600 -m-8 mb-8 p-8 rounded-t-2xl">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-2">
                        <i class="fas fa-user-plus mr-3"></i>Ajouter un nouveau membre
                    </h2>
                    <p class="text-blue-100">Créez un compte pour un nouveau membre de l'association</p>
                </div>
                <button onclick="toggleAddMemberForm()" class="bg-white/20 hover:bg-white/30 text-white p-3 rounded-xl transition-all">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.members.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <!-- Personal Information Section -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-user text-blue-600 mr-2"></i>
                    Informations personnelles
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- First Name -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Prénom <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input type="text" name="first_name" required 
                                   class="w-full px-4 py-3 pl-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-white shadow-sm hover:shadow-md"
                                   placeholder="Entrez le prénom">
                            <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Nom de famille <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input type="text" name="last_name" required 
                                   class="w-full px-4 py-3 pl-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-white shadow-sm hover:shadow-md"
                                   placeholder="Entrez le nom de famille">
                            <i class="fas fa-user-tag absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account Information Section -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-envelope text-amber-600 mr-2"></i>
                    Informations de compte
                </h3>
                
                <div class="space-y-6">
                    <!-- Email -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Adresse email <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input type="email" name="email" required 
                                   class="w-full px-4 py-3 pl-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-white shadow-sm hover:shadow-md"
                                   placeholder="exemple@email.com">
                            <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Un email de bienvenue sera envoyé à cette adresse</p>
                    </div>

                    <!-- Password Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Password -->
                        <div class="form-group">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Mot de passe <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="password" name="password" required 
                                       class="w-full px-4 py-3 pl-12 pr-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-white shadow-sm hover:shadow-md"
                                       placeholder="Minimum 8 caractères">
                                <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <button type="button" onclick="togglePassword('password')" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-eye" id="password-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Confirmer le mot de passe <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="password" name="password_confirmation" required 
                                       class="w-full px-4 py-3 pl-12 pr-12 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-white shadow-sm hover:shadow-md"
                                       placeholder="Répétez le mot de passe">
                                <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <button type="button" onclick="togglePassword('password_confirmation')" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-eye" id="password_confirmation-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Role Selection Section -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-crown text-amber-600 mr-2"></i>
                    Rôle dans l'association
                </h3>
                
                <div class="form-group">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        Sélectionner un rôle <span class="text-red-500">*</span>
                    </label>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <!-- Membre -->
                        <label class="role-card cursor-pointer">
                            <input type="radio" name="role" value="membre" class="hidden" required>
                            <div class="role-option border-2 border-gray-200 rounded-xl p-4 text-center transition-all hover:border-blue-300 hover:shadow-md">
                                <i class="fas fa-user text-2xl text-blue-600 mb-2"></i>
                                <p class="font-semibold text-gray-900">Membre</p>
                                <p class="text-xs text-gray-500">Accès standard</p>
                            </div>
                        </label>

                        <!-- Secrétaire -->
                        <label class="role-card cursor-pointer">
                            <input type="radio" name="role" value="secretaire" class="hidden">
                            <div class="role-option border-2 border-gray-200 rounded-xl p-4 text-center transition-all hover:border-green-300 hover:shadow-md">
                                <i class="fas fa-pen text-2xl text-green-600 mb-2"></i>
                                <p class="font-semibold text-gray-900">Secrétaire</p>
                                <p class="text-xs text-gray-500">Gestion documents</p>
                            </div>
                        </label>

                        <!-- Trésorier -->
                        <label class="role-card cursor-pointer">
                            <input type="radio" name="role" value="tresorier" class="hidden">
                            <div class="role-option border-2 border-gray-200 rounded-xl p-4 text-center transition-all hover:border-amber-300 hover:shadow-md">
                                <i class="fas fa-coins text-2xl text-amber-600 mb-2"></i>
                                <p class="font-semibold text-gray-900">Trésorier</p>
                                <p class="text-xs text-gray-500">Gestion finances</p>
                            </div>
                        </label>

                        <!-- Président -->
                        <label class="role-card cursor-pointer">
                            <input type="radio" name="role" value="president" class="hidden">
                            <div class="role-option border-2 border-gray-200 rounded-xl p-4 text-center transition-all hover:border-purple-300 hover:shadow-md">
                                <i class="fas fa-crown text-2xl text-purple-600 mb-2"></i>
                                <p class="font-semibold text-gray-900">Président</p>
                                <p class="text-xs text-gray-500">Accès complet</p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-6">
                <button type="button" onclick="toggleAddMemberForm()" 
                        class="flex-1 px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 hover:border-gray-400 transition-all font-semibold">
                    <i class="fas fa-times mr-2"></i>Annuler
                </button>
                <button type="submit" 
                        class="flex-1 px-8 py-3 bg-gradient-to-r from-blue-600 to-amber-600 text-white rounded-xl hover:from-blue-700 hover:to-amber-700 hover:shadow-lg transition-all font-semibold transform hover:scale-105">
                    <i class="fas fa-user-plus mr-2"></i>Créer le membre
                </button>
            </div>
        </form>
    </div>

    <!-- Members List -->
    <div id="members-list" class="card-premium rounded-2xl p-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-gray-900">Liste des Membres</h2>
            <button onclick="toggleAddMemberForm()" class="bg-gradient-to-r from-blue-600 to-amber-600 text-white px-4 py-2 rounded-lg hover:shadow-lg transition-all">
                <i class="fas fa-plus mr-2"></i>Ajouter un membre
            </button>
        </div>
        
        <!-- Search Bar -->
        <div class="mb-6">
            <input type="text" id="memberSearch" placeholder="Rechercher un membre..." class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Nom</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Email</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Rôle</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Statut</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(\App\Models\User::all() as $user)
                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition-all">
                        <td class="py-3 px-4">{{ $user->name }}</td>
                        <td class="py-3 px-4">{{ $user->email }}</td>
                        <td class="py-3 px-4">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium">
                                {{ $user->is_admin ? 'Admin' : 'Membre' }}
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">
                                {{ $user->is_active ? 'Actif' : 'Inactif' }}
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <button class="text-blue-600 hover:text-blue-800 mr-2 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="text-red-600 hover:text-red-800 transition-colors"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Gallery Management Section -->
<div id="gallery-content" class="p-8" style="display: none;">
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Gestion de la galerie</h1>
                <p class="text-gray-600">Gérez les images de votre association</p>
            </div>
            <button onclick="showDashboardSection()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all">
                <i class="fas fa-arrow-left mr-2"></i>Retour
            </button>
        </div>
    </div>

    <!-- Upload Section -->
    <div class="card-premium rounded-2xl p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Ajouter des images</h2>
        
        <form action="{{ route('admin.gallery.upload') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <!-- Drag & Drop Zone -->
            <div class="border-2 border-dashed border-blue-300 rounded-2xl p-12 text-center hover:border-amber-500 transition-all bg-gradient-to-br from-blue-50 to-amber-50 hover:from-blue-100 hover:to-amber-100">
                <div class="space-y-4">
                    <div class="w-20 h-20 gold-bg rounded-2xl flex items-center justify-center mx-auto">
                        <i class="fas fa-cloud-upload-alt text-white text-3xl"></i>
                    </div>
                    <div>
                        <p class="text-xl font-semibold text-gray-900 mb-2">Glissez vos images ici</p>
                        <p class="text-gray-600 mb-4">ou cliquez pour sélectionner</p>
                        <input type="file" name="images[]" multiple accept="image/*" class="hidden" id="imageInput">
                        <label for="imageInput" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-amber-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-amber-700 transition-all cursor-pointer">
                            <i class="fas fa-plus mr-2"></i>
                            Sélectionner des images
                        </label>
                    </div>
                    <p class="text-sm text-gray-500">PNG, JPG, GIF jusqu'à 10MB</p>
                </div>
            </div>

            <!-- Preview Area -->
            <div id="imagePreview" class="grid grid-cols-2 md:grid-cols-4 gap-4 hidden">
                <!-- Les aperçus d'images apparaîtront ici -->
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="gold-bg hover:opacity-90 text-white px-8 py-3 rounded-xl font-semibold transition-all hover-lift">
                    <i class="fas fa-upload mr-2"></i>
                    Télécharger les images
                </button>
            </div>
        </form>
    </div>

    <!-- Existing Images -->
    <div class="card-premium rounded-2xl p-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Images existantes</h2>
        
        <div id="imageGrid" class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            @php
                $imagesPath = public_path('images');
                $images = [];
                if (is_dir($imagesPath)) {
                    $files = scandir($imagesPath);
                    $imageFiles = array_filter($files, function($file) use ($imagesPath) {
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        return in_array($ext, ['jpg', 'jpeg', 'png', 'gif']) && is_file($imagesPath . '/' . $file);
                    });
                    
                    // Trier par date de modification (plus récent en premier)
                    usort($imageFiles, function($a, $b) use ($imagesPath) {
                        return filemtime($imagesPath . '/' . $b) - filemtime($imagesPath . '/' . $a);
                    });
                    
                    $images = array_slice($imageFiles, 0, 4);
                }
            @endphp
            
            @forelse($images as $image)
                <div class="relative group hover-lift">
                    <img src="{{ asset('images/' . $image) }}" alt="Image" class="w-full h-32 object-cover rounded-xl">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 rounded-xl transition-all flex items-center justify-center">
                        <button onclick="deleteImage('{{ $image }}')" class="bg-red-600 text-white p-2 rounded-full opacity-0 group-hover:opacity-100 transition-all hover:bg-red-700">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-4 text-center py-8 text-gray-500">
                    <i class="fas fa-images text-4xl mb-4"></i>
                    <p>Aucune image trouvée</p>
                </div>
            @endforelse
        </div>

        <!-- Simple Pagination -->
        @php
            $totalImages = 0;
            if (is_dir($imagesPath)) {
                $files = scandir($imagesPath);
                $totalImages = count(array_filter($files, function($file) use ($imagesPath) {
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    return in_array($ext, ['jpg', 'jpeg', 'png', 'gif']) && is_file($imagesPath . '/' . $file);
                }));
            }
            $totalPages = ceil($totalImages / 4);
        @endphp
        
        @if($totalPages > 1)
            <div class="flex justify-center space-x-2">
                @for($i = 1; $i <= $totalPages; $i++)
                    <button onclick="loadPage({{ $i }})" class="px-3 py-2 rounded-lg {{ $i === 1 ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        {{ $i }}
                    </button>
                @endfor
            </div>
        @endif
    </div>
</div>

<script>
// Navigation functions
function hideAllSections() {
    const sections = ['dashboard-content', 'gallery-content', 'members-content', 'profile-content', 'actualites-content'];
    sections.forEach(sectionId => {
        const section = document.getElementById(sectionId);
        if (section) section.style.display = 'none';
    });
}

// Toggle Add Member Form - Version simplifiée
function toggleAddMemberForm() {
    console.log('toggleAddMemberForm called');
    
    const form = document.getElementById('add-member-form');
    const list = document.getElementById('members-list');
    
    console.log('Form found:', !!form);
    console.log('List found:', !!list);
    
    if (form && list) {
        const isFormHidden = form.style.display === 'none' || !form.style.display;
        console.log('Form is hidden:', isFormHidden);
        
        if (isFormHidden) {
            form.style.display = 'block';
            list.style.display = 'none';
            console.log('Showing form, hiding list');
        } else {
            form.style.display = 'none';
            list.style.display = 'block';
            console.log('Hiding form, showing list');
        }
    } else {
        console.error('Form or list element not found!');
    }
}

// Toggle Password Visibility
function togglePassword(fieldName) {
    const field = document.querySelector(`input[name="${fieldName}"]`);
    const eye = document.getElementById(`${fieldName}-eye`);
    
    if (field.type === 'password') {
        field.type = 'text';
        eye.classList.remove('fa-eye');
        eye.classList.add('fa-eye-slash');
    } else {
        field.type = 'password';
        eye.classList.remove('fa-eye-slash');
        eye.classList.add('fa-eye');
    }
}

// Role Selection Handler
document.addEventListener('DOMContentLoaded', function() {
    // Handle role selection
    const roleCards = document.querySelectorAll('.role-card');
    roleCards.forEach(card => {
        card.addEventListener('click', function() {
            // Remove active class from all cards
            roleCards.forEach(c => {
                const option = c.querySelector('.role-option');
                option.classList.remove('border-blue-500', 'bg-blue-50', 'border-green-500', 'bg-green-50', 'border-amber-500', 'bg-amber-50', 'border-purple-500', 'bg-purple-50');
                option.classList.add('border-gray-200');
            });
            
            // Add active class to selected card
            const option = this.querySelector('.role-option');
            const role = this.querySelector('input[name="role"]').value;
            
            switch(role) {
                case 'membre':
                    option.classList.add('border-blue-500', 'bg-blue-50');
                    break;
                case 'secretaire':
                    option.classList.add('border-green-500', 'bg-green-50');
                    break;
                case 'tresorier':
                    option.classList.add('border-amber-500', 'bg-amber-50');
                    break;
                case 'president':
                    option.classList.add('border-purple-500', 'bg-purple-50');
                    break;
            }
            
            option.classList.remove('border-gray-200');
        });
    });
    
    // Form validation feedback
    const inputs = document.querySelectorAll('input[required]');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value.trim() === '') {
                this.classList.add('border-red-300', 'bg-red-50');
                this.classList.remove('border-gray-200');
            } else {
                this.classList.remove('border-red-300', 'bg-red-50');
                this.classList.add('border-green-300', 'bg-green-50');
            }
        });
        
        input.addEventListener('focus', function() {
            this.classList.remove('border-red-300', 'bg-red-50', 'border-green-300', 'bg-green-50');
            this.classList.add('border-blue-300');
        });
    });
});

function showActualitesSection() {
    hideAllSections();
    document.getElementById('actualites-content').style.display = 'block';
}

function showArticlesSection() {
    showActualitesSection(); // Redirection vers actualités
}

function toggleActualiteForm() {
    const form = document.getElementById('add-actualite-form');
    const list = document.getElementById('actualites-list');
    
    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        list.style.display = 'none';
        // Scroll vers le formulaire
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else {
        form.style.display = 'none';
        list.style.display = 'block';
    }
}

function editActualite(id) {
    Swal.fire({
        icon: 'info',
        title: 'Modification',
        text: `Modification de l'actualité #${id}`,
        timer: 2000
    });
}

function deleteActualite(id) {
    Swal.fire({
        title: 'Supprimer cette actualité ?',
        text: 'Cette action est irréversible !',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                icon: 'success',
                title: 'Supprimée !',
                text: 'L\'actualité a été supprimée.',
                timer: 2000
            });
        }
    });
}

function clearActualiteImage() {
    document.getElementById('actualiteImageInput').value = '';
    document.getElementById('actualiteImagePreview').classList.add('hidden');
}

// Gestion drag & drop et aperçu image
document.addEventListener('DOMContentLoaded', function() {
    const dropZone = document.getElementById('dropZone');
    const imageInput = document.getElementById('actualiteImageInput');
    const imagePreview = document.getElementById('actualiteImagePreview');
    const previewImg = document.getElementById('actualitePreviewImg');
    
    if (dropZone && imageInput) {
        // Click sur la zone de drop
        dropZone.addEventListener('click', () => imageInput.click());
        
        // Drag & Drop
        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.classList.add('border-blue-500', 'bg-blue-100');
        });
        
        dropZone.addEventListener('dragleave', () => {
            dropZone.classList.remove('border-blue-500', 'bg-blue-100');
        });
        
        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.classList.remove('border-blue-500', 'bg-blue-100');
            
            const files = e.dataTransfer.files;
            if (files.length > 0 && files[0].type.startsWith('image/')) {
                imageInput.files = files;
                handleImagePreview(files[0]);
            }
        });
        
        // Change sur input
        imageInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                handleImagePreview(e.target.files[0]);
            }
        });
    }
    
    function handleImagePreview(file) {
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImg.src = e.target.result;
                imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    }
});

function showDashboardSection() {
    hideAllSections();
    document.getElementById('dashboard-content').style.display = 'block';
}

function showGallerySection() {
    hideAllSections();
    document.getElementById('gallery-content').style.display = 'block';
}

function showMembersSection() {
    hideAllSections();
    document.getElementById('members-content').style.display = 'block';
    
    // Debug: vérifier que les éléments existent
    console.log('Form element:', document.getElementById('add-member-form'));
    console.log('List element:', document.getElementById('members-list'));
}

function showActualitesSection() {
    hideAllSections();
    document.getElementById('actualites-content').style.display = 'block';
}

function showProfileSection() {
    hideAllSections();
    document.getElementById('profile-content').style.display = 'block';
}

function toggleActualiteForm() {
    const form = document.getElementById('add-actualite-form');
    const list = document.getElementById('actualites-list');
    
    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        list.style.display = 'none';
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else {
        form.style.display = 'none';
        list.style.display = 'block';
    }
}

// Upload preview
document.getElementById('imageInput').addEventListener('change', function(e) {
    const files = e.target.files;
    const preview = document.getElementById('imagePreview');
    
    if (files.length > 0) {
        preview.classList.remove('hidden');
        preview.innerHTML = '';
        
        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const div = document.createElement('div');
                    div.className = 'relative group';
                    div.innerHTML = `
                        <img src="${e.target.result}" alt="Preview" class="w-full h-32 object-cover rounded-xl">
                        <div class="absolute top-2 right-2">
                            <button type="button" class="bg-red-600 text-white p-1 rounded-full text-xs hover:bg-red-700">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    `;
                    preview.appendChild(div);
                };
                reader.readAsDataURL(file);
            }
        });
    } else {
        preview.classList.add('hidden');
    }
});

// Upload preview for articles
document.addEventListener('DOMContentLoaded', function() {
    const articleImageInput = document.getElementById('articleImageInput');
    if (articleImageInput) {
        articleImageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('articleImagePreview');
            
            if (file && file.type.startsWith('image/')) {
                preview.classList.remove('hidden');
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `
                        <div class="relative inline-block">
                            <img src="${e.target.result}" alt="Aperçu" class="w-32 h-24 object-cover rounded-xl shadow-lg">
                            <button type="button" onclick="clearArticleImage()" class="absolute -top-2 -right-2 bg-red-600 text-white p-1 rounded-full text-xs hover:bg-red-700">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    `;
                };
                reader.readAsDataURL(file);
            } else {
                preview.classList.add('hidden');
            }
        });
    }
    
    // Article search functionality
    const articleSearch = document.getElementById('articleSearch');
    const categoryFilter = document.getElementById('categoryFilter');
    
    if (articleSearch) {
        articleSearch.addEventListener('input', filterArticles);
    }
    if (categoryFilter) {
        categoryFilter.addEventListener('change', filterArticles);
    }
});

function handleArticleSubmit(event) {
    event.preventDefault();
    
    // Simulation de sauvegarde
    Swal.fire({
        icon: 'success',
        title: 'Article créé !',
        text: 'Votre article a été publié avec succès.',
        timer: 2000,
        showConfirmButton: false
    }).then(() => {
        // Réinitialiser le formulaire
        event.target.reset();
        clearArticleImage();
        // Retourner à la liste
        toggleAddArticleForm();
    });
}

function clearArticleImage() {
    document.getElementById('articleImageInput').value = '';
    document.getElementById('articleImagePreview').classList.add('hidden');
}

function filterArticles() {
    const searchTerm = document.getElementById('articleSearch').value.toLowerCase();
    const categoryFilter = document.getElementById('categoryFilter').value;
    const rows = document.querySelectorAll('#articlesTableBody tr');
    
    rows.forEach(row => {
        const title = row.querySelector('h3').textContent.toLowerCase();
        const description = row.querySelector('p').textContent.toLowerCase();
        const category = row.querySelector('.bg-blue-100, .bg-amber-100, .bg-green-100').textContent.toLowerCase();
        
        const matchesSearch = title.includes(searchTerm) || description.includes(searchTerm);
        const matchesCategory = !categoryFilter || category.includes(categoryFilter);
        
        if (matchesSearch && matchesCategory) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}
// Delete image
function deleteImage(filename) {
    if (confirm('Êtes-vous sûr de vouloir supprimer cette image ?')) {
        fetch('{{ route("admin.gallery.delete") }}', {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ filename: filename })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }
}

// Load page function
function loadPage(page) {
    fetch(`{{ route('admin.gallery.images') }}?page=${page}`)
        .then(response => response.json())
        .then(data => {
            const grid = document.getElementById('imageGrid');
            grid.innerHTML = '';
            
            if (data.images.length === 0) {
                grid.innerHTML = `
                    <div class="col-span-4 text-center py-8 text-gray-500">
                        <i class="fas fa-images text-4xl mb-4"></i>
                        <p>Aucune image trouvée</p>
                    </div>
                `;
                return;
            }
            
            data.images.forEach(image => {
                const div = document.createElement('div');
                div.className = 'relative group hover-lift';
                div.innerHTML = `
                    <img src="/images/${image}" alt="Image" class="w-full h-32 object-cover rounded-xl">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 rounded-xl transition-all flex items-center justify-center">
                        <button onclick="deleteImage('${image}')" class="bg-red-600 text-white p-2 rounded-full opacity-0 group-hover:opacity-100 transition-all hover:bg-red-700">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                `;
                grid.appendChild(div);
            });
            
            // Update pagination buttons
            document.querySelectorAll('[onclick^="loadPage"]').forEach((btn, index) => {
                btn.className = `px-3 py-2 rounded-lg ${index + 1 === data.current_page ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'}`;
            });
        });
}
</script>

<!-- Actualités Management Section -->
<div id="actualites-content" class="p-8" style="display: none;">
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Gestion des Actualités</h1>
                <p class="text-gray-600">Créez et gérez les actualités de l'association</p>
            </div>
            <button onclick="showDashboardSection()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all">
                <i class="fas fa-arrow-left mr-2"></i>Retour
            </button>
        </div>
    </div>

    <!-- Formulaire Actualité -->
    <div id="add-actualite-form" class="card-premium rounded-2xl p-8 mb-8" style="display: none;">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-gray-900">Nouvelle Actualité</h2>
            <button onclick="toggleActualiteForm()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        
        <form id="actualiteForm" method="POST" action="{{ route('admin.actualites.store') }}" enctype="multipart/form-data" class="space-y-8">
            @csrf
            
        <form id="actualiteForm" method="POST" action="{{ route('admin.actualites.store') }}" enctype="multipart/form-data" class="space-y-8">
            @csrf
            
            <!-- Titre avec animation -->
            <div class="form-group relative">
                <input type="text" id="titre" name="titre" required value="{{ old('titre') }}"
                       class="peer w-full px-4 py-4 border-2 {{ $errors->has('titre') ? 'border-red-500' : 'border-gray-200' }} rounded-xl focus:border-blue-500 focus:outline-none transition-all bg-white placeholder-transparent"
                       placeholder="Titre de l'actualité">
                <label for="titre" class="absolute left-4 -top-2.5 bg-white px-2 text-sm font-semibold {{ $errors->has('titre') ? 'text-red-600' : 'text-blue-600' }} transition-all peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-blue-600">
                    Titre de l'actualité *
                </label>
                @error('titre')
                    <p class="text-red-500 text-sm mt-1"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Upload Image Premium -->
            <div class="form-group">
                <label class="block text-sm font-semibold text-gray-700 mb-4">Image de l'actualité</label>
                <div class="relative">
                    <div id="dropZone" class="border-2 border-dashed border-blue-300 rounded-2xl p-8 text-center hover:border-blue-500 transition-all bg-gradient-to-br from-blue-50 to-indigo-50 hover:from-blue-100 hover:to-indigo-100 cursor-pointer group">
                        <div class="space-y-4">
                            <div class="w-16 h-16 mx-auto bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-cloud-upload-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <p class="text-xl font-bold text-gray-900 mb-2">Glissez votre image ici</p>
                                <p class="text-gray-600 mb-4">ou cliquez pour sélectionner</p>
                                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl hover:shadow-lg transition-all">
                                    <i class="fas fa-plus mr-2"></i>Choisir une image
                                </div>
                            </div>
                            <p class="text-sm text-gray-500">JPG, PNG, WebP jusqu'à 5MB</p>
                        </div>
                    </div>
                    <input type="file" id="actualiteImageInput" name="image" accept="image/*" class="hidden">
                    
                    @error('image')
                        <p class="text-red-500 text-sm mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                    @enderror
                    
                    <!-- Aperçu Image -->
                    <div id="actualiteImagePreview" class="mt-6 hidden">
                        <div class="relative inline-block">
                            <img id="actualitePreviewImg" src="" alt="Aperçu" class="w-full max-w-md h-48 object-cover rounded-2xl shadow-lg">
                            <button type="button" onclick="clearActualiteImage()" class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-white p-2 rounded-full shadow-lg transition-all">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contenu avec style premium -->
            <div class="form-group relative">
                <textarea id="contenu" name="contenu" required rows="8"
                          class="peer w-full px-4 py-4 border-2 {{ $errors->has('contenu') ? 'border-red-500' : 'border-gray-200' }} rounded-xl focus:border-blue-500 focus:outline-none transition-all bg-white placeholder-transparent resize-none"
                          placeholder="Contenu de l'actualité">{{ old('contenu') }}</textarea>
                <label for="contenu" class="absolute left-4 -top-2.5 bg-white px-2 text-sm font-semibold {{ $errors->has('contenu') ? 'text-red-600' : 'text-blue-600' }} transition-all peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-blue-600">
                    Contenu de l'actualité *
                </label>
                @error('contenu')
                    <p class="text-red-500 text-sm mt-1"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Boutons Actions -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <button type="button" onclick="toggleActualiteForm()" class="px-8 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:bg-gray-50 hover:border-gray-400 transition-all">
                    Annuler
                </button>
                <button type="submit" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl hover:shadow-xl hover:scale-105 transition-all">
                    <i class="fas fa-paper-plane mr-2"></i>Publier l'actualité
                </button>
            </div>
        </form>
    </div>

    <!-- Liste des Actualités -->
    <div id="actualites-list" class="space-y-6">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900">Actualités Publiées</h2>
            <button onclick="toggleActualiteForm()" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-xl hover:shadow-lg hover:scale-105 transition-all font-semibold">
                <i class="fas fa-plus mr-2"></i>Nouvelle Actualité
            </button>
        </div>
        
        <!-- Cards Grid -->
        <div id="actualitesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($posts as $post)
            <div class="card-premium rounded-2xl overflow-hidden hover-lift group">
                <div class="relative">
                    <img src="{{ $post->featured_image ? asset('images/' . $post->featured_image) : 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjNmNGY2Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxOCIgZmlsbD0iIzlDQTNBRiIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkltYWdlPC90ZXh0Pjwvc3ZnPg==' }}" alt="{{ $post->title }}" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute top-4 right-4">
                        <span class="{{ $post->is_published ? 'bg-green-500' : 'bg-yellow-500' }} text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                            {{ $post->is_published ? 'Publié' : 'Brouillon' }}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">{{ $post->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}</p>
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <span><i class="fas fa-calendar mr-1"></i>{{ $post->created_at->format('d M Y') }}</span>
                        <span><i class="fas fa-user mr-1"></i>{{ $post->author->name ?? 'Admin' }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button onclick="editActualite({{ $post->id }})" class="flex-1 bg-blue-50 hover:bg-blue-100 text-blue-600 py-2 px-4 rounded-lg transition-all font-medium">
                            <i class="fas fa-edit mr-1"></i>Modifier
                        </button>
                        <button onclick="deleteActualite({{ $post->id }})" class="flex-1 bg-red-50 hover:bg-red-100 text-red-600 py-2 px-4 rounded-lg transition-all font-medium">
                            <i class="fas fa-trash mr-1"></i>Supprimer
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <!-- Message si aucune actualité -->
            <div class="col-span-3 text-center py-12">
                <div class="w-24 h-24 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-newspaper text-gray-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Aucune actualité</h3>
                <p class="text-gray-600 mb-6">Commencez par créer votre première actualité</p>
                <button onclick="toggleActualiteForm()" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-xl hover:shadow-lg transition-all">
                    <i class="fas fa-plus mr-2"></i>Créer une actualité
                </button>
            </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Profile Management Section -->
<div id="profile-content" class="p-8" style="display: none;">
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Mon Profil</h1>
                <p class="text-gray-600">Gérez vos informations personnelles</p>
            </div>
            <button onclick="showDashboardSection()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all">
                <i class="fas fa-arrow-left mr-2"></i>Retour
            </button>
        </div>
    </div>

    <div class="max-w-4xl">
        <div class="card-premium rounded-2xl p-8">
            <form method="POST" action="#" class="space-y-6">
                @csrf
                @method('PUT')
                
                <!-- Avatar Section -->
                <div class="flex items-center space-x-6 mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-amber-600 rounded-full flex items-center justify-center shadow-lg">
                        <span class="text-white text-2xl font-bold">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">{{ auth()->user()->name }}</h3>
                        <p class="text-gray-600">{{ auth()->user()->email }}</p>
                        <p class="text-sm text-amber-600 font-medium">Promotion {{ auth()->user()->promotion_year ?? '1993' }}</p>
                    </div>
                </div>

                <!-- Nom complet -->
                <div class="form-group">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nom complet *</label>
                    <input type="text" id="name" name="name" required
                           class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                           placeholder="Votre nom complet" value="{{ auth()->user()->name }}">
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Adresse email *</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                           placeholder="votre@email.com" value="{{ auth()->user()->email }}">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Téléphone -->
                    <div class="form-group">
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Téléphone</label>
                        <input type="text" id="phone" name="phone"
                               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                               placeholder="+221 XX XXX XX XX" value="{{ auth()->user()->phone ?? '' }}">
                    </div>

                    <!-- Année de promotion -->
                    <div class="form-group">
                        <label for="promotion_year" class="block text-sm font-semibold text-gray-700 mb-2">Année de promotion</label>
                        <input type="text" id="promotion_year" name="promotion_year"
                               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                               placeholder="1993" value="{{ auth()->user()->promotion_year ?? '1993' }}">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Profession actuelle -->
                    <div class="form-group">
                        <label for="current_profession" class="block text-sm font-semibold text-gray-700 mb-2">Profession actuelle</label>
                        <input type="text" id="current_profession" name="current_profession"
                               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                               placeholder="Votre profession" value="{{ auth()->user()->current_profession ?? '' }}">
                    </div>

                    <!-- Localisation actuelle -->
                    <div class="form-group">
                        <label for="current_location" class="block text-sm font-semibold text-gray-700 mb-2">Localisation actuelle</label>
                        <input type="text" id="current_location" name="current_location"
                               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                               placeholder="Votre ville/pays" value="{{ auth()->user()->current_location ?? '' }}">
                    </div>
                </div>

                <!-- Biographie -->
                <div class="form-group">
                    <label for="bio" class="block text-sm font-semibold text-gray-700 mb-2">Biographie</label>
                    <textarea id="bio" name="bio" rows="3"
                              class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                              placeholder="Parlez-nous de vous...">{{ auth()->user()->bio ?? '' }}</textarea>
                </div>

                <!-- Section Mot de passe -->
                <div class="border-t border-gray-200 pt-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Changer le mot de passe</h3>
                    <p class="text-sm text-gray-600 mb-4">Laissez vide si vous ne souhaitez pas changer votre mot de passe</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Mot de passe actuel -->
                        <div class="form-group">
                            <label for="current_password" class="block text-sm font-semibold text-gray-700 mb-2">Mot de passe actuel</label>
                            <input type="password" id="current_password" name="current_password"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                   placeholder="••••••••">
                        </div>

                        <!-- Nouveau mot de passe -->
                        <div class="form-group">
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Nouveau mot de passe</label>
                            <input type="password" id="password" name="password"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                   placeholder="••••••••">
                        </div>

                        <!-- Confirmation -->
                        <div class="form-group">
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">Confirmer</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                   placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end space-x-4 pt-6">
                    <button type="button" onclick="showDashboardSection()" class="px-6 py-3 border border-gray-300 text-gray-700 font-semibold rounded-xl hover:bg-gray-50 transition-all">
                        Annuler
                    </button>
                    <button type="submit" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-amber-600 text-white font-semibold rounded-xl hover:shadow-lg transition-all">
                        <i class="fas fa-save mr-2"></i>
                        Mettre à jour le profil
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@else
<div class="min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-2xl font-bold text-gray-900 mb-4">Accès non autorisé</h1>
        <p class="text-gray-600 mb-6">Vous devez être connecté pour accéder à cette page.</p>
        <a href="{{ route('login') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
            Se connecter
        </a>
    </div>
</div>
@endauth
@endsection