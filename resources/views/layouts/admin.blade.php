<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard - AELT 93-97')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/members-delete.js') }}"></script>
    <style>
        * { font-family: 'Inter', sans-serif; }
        .glass-effect { backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.1); }
        .card-premium { 
            background: linear-gradient(145deg, #ffffff, #f8fafc);
            box-shadow: 20px 20px 60px #d1d5db, -20px -20px 60px #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .sidebar-gradient { background: linear-gradient(180deg, #1e3a8a 0%, #1e40af 100%); }
        .hover-lift { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .gold-accent { color: #d97706; }
        .gold-bg { background: linear-gradient(135deg, #f59e0b, #d97706); }
        .line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .line-clamp-3 { display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
        .form-group input:focus + label, .form-group textarea:focus + label { transform: translateY(-0.5rem) scale(0.875); }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fadeInUp { animation: fadeInUp 0.5s ease-out; }
    </style>
</head>
<body class="bg-gray-50 overflow-x-hidden">
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Succès !',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erreur !',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 sidebar-gradient shadow-2xl">
            <div class="p-6">
                <!-- Logo -->
                <div class="flex items-center space-x-3 mb-8">
                    <div class="w-12 h-12 gold-bg rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-xl">LT</span>
                    </div>
                    <div>
                        <h1 class="text-white font-bold text-lg">AELT 93-97</h1>
                        <p class="text-blue-200 text-xs">Admin Panel</p>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" onclick="showDashboardSection()" class="flex items-center space-x-3 text-white bg-white/10 rounded-lg px-4 py-3 hover:bg-white/20 transition-all">
                        <i class="fas fa-tachometer-alt w-5"></i>
                        <span class="font-medium">Dashboard</span>
                    </a>
                    
                    <a href="#members" onclick="showMembersSection()" class="flex items-center space-x-3 text-blue-200 hover:text-white hover:bg-white/10 rounded-lg px-4 py-3 transition-all">
                        <i class="fas fa-users w-5"></i>
                        <span class="font-medium">Membres</span>
                    </a>
                    
                    <a href="#actualites" onclick="showActualitesSection()" class="flex items-center space-x-3 text-blue-200 hover:text-white hover:bg-white/10 rounded-lg px-4 py-3 transition-all">
                        <i class="fas fa-newspaper w-5"></i>
                        <span class="font-medium">Actualités</span>
                    </a>
                    
                    <a href="#gallery" onclick="showGallerySection()" class="flex items-center space-x-3 text-blue-200 hover:text-white hover:bg-white/10 rounded-lg px-4 py-3 transition-all">
                        <i class="fas fa-images w-5"></i>
                        <span class="font-medium">Galerie</span>
                    </a>
                    
                    <a href="#profile" onclick="showProfileSection()" class="flex items-center space-x-3 text-blue-200 hover:text-white hover:bg-white/10 rounded-lg px-4 py-3 transition-all">
                        <i class="fas fa-user-cog w-5"></i>
                        <span class="font-medium">Profil</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Navbar -->
            <nav class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
                <div class="flex items-center justify-between">
                    <!-- User Info -->
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 gold-bg rounded-full flex items-center justify-center">
                            <span class="text-white font-semibold text-sm">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</span>
                        </div>
                        <div>
                            <p class="text-gray-900 font-semibold">{{ auth()->user()->name }}</p>
                            <p class="text-sm text-gray-600">Promotion {{ auth()->user()->promotion_year ?? '1993' }} • {{ auth()->user()->is_admin ? 'Administrateur' : 'Membre' }}</p>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="flex items-center space-x-4">
                        <!-- Date/Time -->
                        <div class="text-right hidden md:block">
                            <p class="text-sm text-gray-500">{{ now()->format('d M Y') }}</p>
                            <p class="text-lg font-semibold gold-accent">{{ now()->format('H:i') }}</p>
                        </div>

                        <!-- Logout Button -->
                        <button onclick="confirmLogout()" class="flex items-center space-x-2 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-all">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="hidden md:inline">Déconnexion</span>
                        </button>
                        
                        <!-- Hidden logout form -->
                        <form id="logoutForm" method="POST" action="{{ route('logout') }}" class="hidden">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="flex-1 overflow-auto">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        // Fonction de confirmation de déconnexion
        function confirmLogout() {
            Swal.fire({
                title: 'Se déconnecter ?',
                text: 'Voulez-vous vraiment vous déconnecter ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Oui, se déconnecter',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Soumettre le formulaire de déconnexion
                    document.getElementById('logoutForm').submit();
                }
            });
        }
        
        // Navigation functions
        function hideAllSections() {
            const sections = ['dashboard-content', 'gallery-content', 'members-content', 'actualites-content', 'profile-content'];
            sections.forEach(sectionId => {
                const section = document.getElementById(sectionId);
                if (section) section.style.display = 'none';
            });
        }

        function showDashboardSection() {
            hideAllSections();
            const dashboardSection = document.getElementById('dashboard-content');
            if (dashboardSection) dashboardSection.style.display = 'block';
        }

        function showGallerySection() {
            hideAllSections();
            const gallerySection = document.getElementById('gallery-content');
            if (gallerySection) gallerySection.style.display = 'block';
        }

        function showMembersSection() {
            hideAllSections();
            const membersSection = document.getElementById('members-content');
            if (membersSection) membersSection.style.display = 'block';
        }

        function showActualitesSection() {
            hideAllSections();
            const actualitesSection = document.getElementById('actualites-content');
            if (actualitesSection) actualitesSection.style.display = 'block';
        }

        function showProfileSection() {
            hideAllSections();
            const profileSection = document.getElementById('profile-content');
            if (profileSection) profileSection.style.display = 'block';
        }
    </script>
</body>
</html>