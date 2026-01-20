<?php $__env->startSection('title', 'Actualités - Association des Anciens Élèves du Lycée de Tivaouane'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .fade-in-up { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.8s ease-out forwards; }
    @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
    .hover-scale { transition: all 0.3s ease; }
    .hover-scale:hover { transform: scale(1.02); }
    .article-card { 
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        background: linear-gradient(145deg, #ffffff, #f8fafc);
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
    }
    .article-card:hover { 
        transform: translateY(-15px) scale(1.02); 
        box-shadow: 0 40px 80px rgba(59, 130, 246, 0.15), 0 20px 40px rgba(0,0,0,0.1);
        border-color: rgba(59, 130, 246, 0.2);
    }
    .btn-read-more { 
        background: linear-gradient(135deg, #3b82f6, #1d4ed8, #f59e0b); 
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }
    .btn-read-more:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }
    .btn-read-more:hover:before { left: 100%; }
    .btn-read-more:hover { 
        background: linear-gradient(135deg, #1d4ed8, #3b82f6, #d97706); 
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 30px rgba(59, 130, 246, 0.4);
    }
    .hero-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .category-badge {
        background: linear-gradient(135deg, #667eea, #764ba2);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.2);
    }
    .glass-effect {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
</style>


<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden hero-gradient">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-purple-900/70 to-indigo-900/80"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.05\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"2\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center px-8 py-4 rounded-full glass-effect mb-8 fade-in-up">
            <div class="w-3 h-3 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full mr-3 animate-pulse"></div>
            <span class="text-gray-700 font-semibold">✨ Actualités en Direct</span>
        </div>
        
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-8 leading-tight fade-in-up" style="animation-delay: 0.2s;">
            Nos 
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-orange-400 to-red-400">
                Actualités
            </span>
            <div class="text-4xl md:text-5xl lg:text-6xl mt-4 text-blue-200 font-light">
                Exclusives
            </div>
        </h1>
        
        <p class="text-xl md:text-2xl text-blue-100 mb-12 max-w-4xl mx-auto leading-relaxed fade-in-up" style="animation-delay: 0.4s;">
            Découvrez les dernières nouvelles, événements et réalisations de notre prestigieuse communauté
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in-up" style="animation-delay: 0.6s;">
            <button class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-2xl hover:shadow-2xl transition-all transform hover:scale-105">
                📰 Toutes les Actualités
            </button>
            <button class="px-8 py-4 glass-effect text-gray-700 font-bold rounded-2xl hover:shadow-xl transition-all">
                🔔 S'abonner aux Notifications
            </button>
        </div>
    </div>
</section>


<section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-50 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"%23f3f4f6\" fill-opacity=\"0.3\"%3E%3Cpolygon points=\"50 0 60 40 100 50 60 60 50 100 40 60 0 50 40 40\"/%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full bg-gradient-to-r from-blue-100 to-purple-100 border border-blue-200 mb-6">
                <span class="text-blue-700 font-semibold">📈 <?php echo e(\App\Models\Post::where('is_published', true)->count()); ?> Articles Publiés</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-8">
                Dernières <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600">Nouvelles</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Restez informés des derniers développements et initiatives de notre association
            </p>
        </div>
        
        <?php if(\App\Models\Post::where('is_published', true)->count() > 0): ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php $__currentLoopData = \App\Models\Post::where('is_published', true)->latest()->take(6)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="article-card rounded-3xl overflow-hidden shadow-xl fade-in-up" style="animation-delay: <?php echo e($index * 0.1); ?>s;">
                <div class="h-72 overflow-hidden relative">
                    <?php
                        $imagePath = public_path('images/actualite' . ($index + 1) . '.jpg');
                        $imageUrl = file_exists($imagePath) ? asset('images/actualite' . ($index + 1) . '.jpg') : 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48bGluZWFyR3JhZGllbnQgaWQ9ImciIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiM2NjdlZWEiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3NjRiYTIiLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2cpIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIyNCIgZmlsbD0iI2ZmZmZmZiIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkFjdHVhbGl0w6k8L3RleHQ+PC9zdmc+';
                    ?>
                    <img src="<?php echo e($imageUrl); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-full object-cover hover-scale">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="category-badge text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                            📰 ACTUALITÉ
                        </span>
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="glass-effect px-3 py-1 rounded-full">
                            <span class="text-gray-700 text-sm font-semibold"><?php echo e($post->created_at->format('d M Y')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-gray-900 mb-4 hover:text-blue-600 transition-colors leading-tight">
                        <?php echo e($post->title); ?>

                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        <?php echo e($post->excerpt ?? Str::limit(strip_tags($post->content), 120)); ?>

                    </p>
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-sm"><?php echo e(strtoupper(substr($post->author->name ?? 'Admin', 0, 1))); ?></span>
                            </div>
                            <div>
                                <p class="text-gray-900 font-semibold text-sm"><?php echo e($post->author->name ?? 'Administration'); ?></p>
                                <p class="text-gray-500 text-xs"><?php echo e($post->created_at->diffForHumans()); ?></p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <i class="fas fa-eye text-sm"></i>
                            <span class="text-sm"><?php echo e(rand(50, 500)); ?></span>
                        </div>
                    </div>
                    <button class="btn-read-more text-white px-8 py-4 rounded-2xl font-bold shadow-xl w-full">
                        Lire l'Article Complet →
                    </button>
                </div>
            </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        
        <div class="text-center mt-16">
            <button class="px-12 py-4 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 text-white font-bold rounded-2xl hover:shadow-2xl transition-all transform hover:scale-105">
                📚 Charger Plus d'Articles
            </button>
        </div>
        <?php else: ?>
        
        <div class="text-center py-20">
            <div class="w-32 h-32 mx-auto bg-gradient-to-br from-blue-100 to-purple-100 rounded-full flex items-center justify-center mb-8">
                <i class="fas fa-newspaper text-blue-500 text-5xl"></i>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-4">Aucune Actualité Disponible</h3>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Nous préparons du contenu exceptionnel pour vous. Revenez bientôt pour découvrir nos dernières actualités !
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-2xl hover:shadow-xl transition-all">
                    🔔 M'alerter des Nouveautés
                </button>
                <a href="<?php echo e(route('home')); ?>" class="px-8 py-4 glass-effect text-gray-700 font-bold rounded-2xl hover:shadow-xl transition-all">
                    🏠 Retour à l'Accueil
                </a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>


<section class="py-20 bg-gradient-to-r from-blue-900 via-purple-900 to-indigo-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"1\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
            Restez <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-orange-400">Connectés</span>
        </h2>
        <p class="text-xl text-blue-100 mb-10 leading-relaxed">
            Recevez nos dernières actualités directement dans votre boîte mail
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
            <input type="email" placeholder="Votre adresse email" class="flex-1 px-6 py-4 rounded-2xl border-0 focus:ring-4 focus:ring-blue-300 text-gray-900 font-semibold">
            <button class="px-8 py-4 bg-gradient-to-r from-amber-500 to-orange-500 text-white font-bold rounded-2xl hover:shadow-2xl transition-all transform hover:scale-105">
                S'abonner 📧
            </button>
        </div>
        
        <p class="text-blue-200 text-sm mt-4">
            ✨ Plus de 500 membres déjà abonnés
        </p>
    </div>
</section>

<script>
// Animation au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animationPlayState = 'running';
        }
    });
}, observerOptions);

document.querySelectorAll('.fade-in-up').forEach(el => {
    el.style.animationPlayState = 'paused';
    observer.observe(el);
});

// Hover effects premium
document.querySelectorAll('.article-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-15px) scale(1.02)';
    });
    
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\association-tivaouane\resources\views/posts/index.blade.php ENDPATH**/ ?>