<?php $__env->startSection('title', 'Galerie - AELT 93-97'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .modal { display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.9); }
    .modal-content { position: relative; margin: auto; padding: 0; width: 90%; max-width: 1200px; }
    .modal img { width: 100%; height: auto; display: block; }
    .close { position: absolute; top: 15px; right: 35px; color: #ef4444; font-size: 40px; font-weight: bold; cursor: pointer; background: rgba(255,255,255,0.9); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
    .close:hover { color: #dc2626; background: rgba(255,255,255,1); }
    .download-btn { position: absolute; top: 15px; right: 95px; background: #22c55e; color: white; padding: 12px; border: none; border-radius: 50%; cursor: pointer; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; }
    .download-btn:hover { background: #16a34a; }
</style>

<section class="relative bg-gradient-to-r from-blue-900 to-blue-800 text-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Galerie Photos</h1>
        <p class="text-xl text-blue-200">Revivez nos meilleurs moments en images</p>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-4 mb-12 justify-center">
            <button class="px-6 py-3 bg-blue-600 text-white rounded-full font-semibold">Toutes</button>
            <button class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold hover:bg-gray-100">Evenements</button>
            <button class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold hover:bg-gray-100">Projets</button>
            <button class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold hover:bg-gray-100">Reunions</button>
            <button class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold hover:bg-gray-100">Celebrations</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer h-80" onclick="openModal('<?php echo e(asset('images/officiel.jpeg')); ?>', 'Assemblee Generale 2023')">
                <img src="<?php echo e(asset('images/officiel.jpeg')); ?>" alt="Photo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Assemblee Generale 2023</h3>
                        <p class="text-sm">25 Fevrier 2023</p>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer h-80" onclick="openModal('<?php echo e(asset('images/slogan.jpeg')); ?>', 'Remise de Fournitures')">
                <img src="<?php echo e(asset('images/slogan.jpeg')); ?>" alt="Photo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Remise de Fournitures</h3>
                        <p class="text-sm">15 Janvier 2023</p>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer h-80" onclick="openModal('<?php echo e(asset('images/membre.jpeg')); ?>', 'Gala de Bienfaisance')">
                <img src="<?php echo e(asset('images/membre.jpeg')); ?>" alt="Photo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Gala de Bienfaisance</h3>
                        <p class="text-sm">10 Decembre 2023</p>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer h-80" onclick="openModal('<?php echo e(asset('images/membre2.jpeg')); ?>', 'Conference Entrepreneuriat')">
                <img src="<?php echo e(asset('images/membre2.jpeg')); ?>" alt="Photo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Conference Entrepreneuriat</h3>
                        <p class="text-sm">5 Novembre 2023</p>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer h-80" onclick="openModal('<?php echo e(asset('images/directeur.jpeg')); ?>', 'Celebration Nouvel An')">
                <img src="<?php echo e(asset('images/directeur.jpeg')); ?>" alt="Photo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Celebration Nouvel An</h3>
                        <p class="text-sm">31 Decembre 2023</p>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer h-80" onclick="openModal('<?php echo e(asset('images/enfant.jpeg')); ?>', 'Renovation Bibliotheque')">
                <img src="<?php echo e(asset('images/enfant.jpeg')); ?>" alt="Photo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Renovation Bibliotheque</h3>
                        <p class="text-sm">20 Octobre 2023</p>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer h-80" onclick="openModal('<?php echo e(asset('images/direct.jpeg')); ?>', 'Action Humanitaire')">
                <img src="<?php echo e(asset('images/direct.jpeg')); ?>" alt="Photo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Action Humanitaire</h3>
                        <p class="text-sm">15 Septembre 2023</p>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer h-80" onclick="openModal('<?php echo e(asset('images/monument.jpeg')); ?>', 'Reunion Bureau')">
                <img src="<?php echo e(asset('images/monument.jpeg')); ?>" alt="Photo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Reunion Bureau</h3>
                        <p class="text-sm">10 Aout 2023</p>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer h-80" onclick="openModal('<?php echo e(asset('images/vrai.jpeg')); ?>', 'Journee Portes Ouvertes')">
                <img src="<?php echo e(asset('images/vrai.jpeg')); ?>" alt="Photo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">Journee Portes Ouvertes</h3>
                        <p class="text-sm">5 Juillet 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <button class="btn-primary">
                <i class="fas fa-plus mr-2"></i>Charger plus de photos
            </button>
        </div>
    </div>
</section>


<div id="imageModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <img id="modalImage" src="" alt="">
        <button class="download-btn" onclick="downloadImage()">
            <i class="fas fa-download"></i>
        </button>
    </div>
</div>

<script>
let currentImageSrc = '';
let currentImageName = '';

function openModal(imageSrc, imageName) {
    currentImageSrc = imageSrc;
    currentImageName = imageName;
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('imageModal').style.display = 'flex';
    document.getElementById('imageModal').style.alignItems = 'center';
}

function closeModal() {
    document.getElementById('imageModal').style.display = 'none';
}

function downloadImage() {
    const link = document.createElement('a');
    link.href = currentImageSrc;
    link.download = currentImageName + '.jpg';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

// Fermer la modal en cliquant à l'extérieur
window.onclick = function(event) {
    const modal = document.getElementById('imageModal');
    if (event.target === modal) {
        closeModal();
    }
}

// Fermer avec la touche Escape
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\association-tivaouane\resources\views/gallery/index.blade.php ENDPATH**/ ?>