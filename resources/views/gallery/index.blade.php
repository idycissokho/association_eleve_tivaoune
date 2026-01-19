@extends('layouts.app')

@section('title', 'Galerie - AELT 93-97')

@section('content')
<section class="py-20 bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Notre <span class="text-blue-600">Galerie</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Découvrez les moments forts de notre association à travers ces images
            </p>
        </div>

        <!-- Gallery Grid - 3 colonnes -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            @forelse($images as $image)
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 cursor-pointer" onclick="openModal('{{ asset('images/' . $image) }}', '{{ $image }}')">
                    <img src="{{ asset('images/' . $image) }}" alt="Galerie AELT" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="font-semibold">AELT 93-97</p>
                            <p class="text-sm opacity-90">{{ date('d M Y', filemtime(public_path('images/' . $image))) }}</p>
                        </div>
                        <div class="absolute top-4 right-4">
                            <i class="fas fa-expand text-white text-xl"></i>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-16">
                    <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-images text-gray-400 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Aucune image disponible</h3>
                    <p class="text-gray-600">La galerie sera bientôt mise à jour avec de nouvelles photos.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($totalPages > 1)
            <div class="flex justify-center items-center space-x-2">
                <!-- Bouton Précédent -->
                @if($page > 1)
                    <a href="{{ route('gallery.index', ['page' => $page - 1]) }}" class="px-4 py-2 bg-white text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition-all">
                        <i class="fas fa-chevron-left mr-2"></i>Précédent
                    </a>
                @endif

                <!-- Numéros de page -->
                @for($i = 1; $i <= $totalPages; $i++)
                    <a href="{{ route('gallery.index', ['page' => $i]) }}" class="px-4 py-2 rounded-lg transition-all {{ $i == $page ? 'bg-blue-600 text-white' : 'bg-white text-blue-600 border border-blue-600 hover:bg-blue-600 hover:text-white' }}">
                        {{ $i }}
                    </a>
                @endfor

                <!-- Bouton Suivant -->
                @if($page < $totalPages)
                    <a href="{{ route('gallery.index', ['page' => $page + 1]) }}" class="px-4 py-2 bg-white text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition-all">
                        Suivant<i class="fas fa-chevron-right ml-2"></i>
                    </a>
                @endif
            </div>
        @endif

        <!-- Stats -->
        @if($totalImages > 0)
            <div class="mt-12 text-center">
                <div class="inline-flex items-center space-x-2 bg-white rounded-full px-6 py-3 shadow-lg">
                    <i class="fas fa-images text-blue-600"></i>
                    <span class="font-semibold text-gray-900">{{ $totalImages }} photo(s) dans notre galerie</span>
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Modal pour afficher l'image -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
    <div class="relative max-w-4xl max-h-full p-4">
        <!-- Image -->
        <img id="modalImage" src="" alt="Image" class="max-w-full max-h-full object-contain rounded-lg">
        
        <!-- Boutons -->
        <div class="absolute top-4 right-4 flex space-x-2">
            <!-- Bouton Télécharger -->
            <a id="downloadBtn" href="" download class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full transition-all shadow-lg">
                <i class="fas fa-download"></i>
            </a>
            
            <!-- Bouton Fermer -->
            <button onclick="closeModal()" class="bg-red-600 hover:bg-red-700 text-white p-3 rounded-full transition-all shadow-lg">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <!-- Info image -->
        <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-4 py-2 rounded-lg">
            <p class="font-semibold">AELT 93-97</p>
            <p class="text-sm opacity-90" id="imageDate"></p>
        </div>
    </div>
</div>

<script>
function openModal(imageSrc, filename) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const downloadBtn = document.getElementById('downloadBtn');
    
    modalImage.src = imageSrc;
    downloadBtn.href = `{{ route('gallery.download', '') }}/${filename}`;
    
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Fermer le modal en cliquant à l'extérieur
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Fermer le modal avec la touche Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
</script>
@endsection