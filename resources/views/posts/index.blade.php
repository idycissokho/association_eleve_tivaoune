<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités - Association des Anciens Élèves du Lycée de Tivaouane</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-50 py-20">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-center text-blue-900 mb-12">Actualités</h1>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-48 bg-blue-200"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Assemblée Générale 2024</h3>
                        <p class="text-gray-600 mb-4">Notre assemblée générale annuelle aura lieu le...</p>
                        <span class="text-sm text-blue-600">15 janvier 2024</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-48 bg-yellow-200"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Nouveau Projet Éducatif</h3>
                        <p class="text-gray-600 mb-4">Lancement d'un nouveau projet pour soutenir...</p>
                        <span class="text-sm text-blue-600">10 janvier 2024</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-48 bg-green-200"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Rencontre des Membres</h3>
                        <p class="text-gray-600 mb-4">Grande rencontre annuelle des membres à Dakar...</p>
                        <span class="text-sm text-blue-600">5 janvier 2024</span>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('home') }}" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800">
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
</body>
</html>