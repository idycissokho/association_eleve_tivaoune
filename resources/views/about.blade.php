<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Association des Anciens Élèves du Lycée de Tivaouane</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-50 py-20">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-center text-blue-900 mb-8">À propos de notre Association</h1>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <p class="text-lg text-gray-700 mb-6">
                    L'Association des Anciens Élèves du Lycée de Tivaouane - Génération 1993-1997 
                    est une organisation qui rassemble les diplômés de cette promotion dans un esprit 
                    de solidarité et d'entraide mutuelle.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    Fondée il y a plus de 30 ans, notre association compte aujourd'hui plus de 250 
                    membres actifs répartis dans 15 pays à travers le monde.
                </p>
                <div class="text-center mt-8">
                    <a href="{{ route('home') }}" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800">
                        Retour à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>