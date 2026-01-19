@extends('layouts.admin')

@section('title', 'Admin Dashboard - AELT 93-97')

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
            <button class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all hover-lift group">
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
            
            <button class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:from-blue-100 hover:to-blue-200 transition-all hover-lift group">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-800 to-blue-900 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <i class="fas fa-edit text-white"></i>
                </div>
                <span class="text-blue-900 font-semibold">Créer article</span>
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

// Load page
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

function showGallerySection() {
    document.getElementById('dashboard-content').style.display = 'none';
    document.getElementById('gallery-content').style.display = 'block';
}

function showDashboardSection() {
    document.getElementById('gallery-content').style.display = 'none';
    document.getElementById('dashboard-content').style.display = 'block';
}
</script>

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