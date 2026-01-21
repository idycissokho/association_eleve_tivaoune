// Fonction pour voir les détails d'un membre
function viewMember(memberId) {
    console.log('viewMember called with ID:', memberId);
    
    fetch(`/admin/members/${memberId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur réseau');
            }
            return response.json();
        })
        .then(user => {
            console.log('User data received:', user);
            
            // Remplir les informations du modal
            document.getElementById('viewAvatar').textContent = user.name.substring(0, 2).toUpperCase();
            document.getElementById('viewName').textContent = user.name;
            document.getElementById('viewEmail').textContent = user.email;
            document.getElementById('viewMemberSince').textContent = `Membre depuis ${new Date(user.created_at).toLocaleDateString('fr-FR', { month: 'long', year: 'numeric' })}`;
            document.getElementById('viewPhone').textContent = user.phone || 'Non renseigné';
            document.getElementById('viewPromotion').textContent = user.promotion_year || '1993-1997';
            document.getElementById('viewProfession').textContent = user.current_profession || 'Non renseigné';
            document.getElementById('viewLocation').textContent = user.current_location || 'Non renseigné';
            document.getElementById('viewBio').textContent = user.bio || 'Aucune biographie renseignée';
            
            // Statut
            const statusHtml = user.is_active 
                ? '<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800"><div class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></div>Actif</span>'
                : '<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800"><div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>Inactif</span>';
            document.getElementById('viewStatus').innerHTML = statusHtml;
            
            // Rôle
            const roleHtml = user.is_admin 
                ? '<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800"><i class="fas fa-crown mr-1 text-xs"></i>Admin</span>'
                : '<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800"><i class="fas fa-user mr-1 text-xs"></i>Membre</span>';
            document.getElementById('viewRole').innerHTML = roleHtml;
            
            // Afficher le modal
            document.getElementById('viewMemberModal').classList.remove('hidden');
        })
        .catch(error => {
            console.error('Erreur:', error);
            Swal.fire('Erreur', 'Impossible de charger les données du membre', 'error');
        });
}

function closeViewModal() {
    document.getElementById('viewMemberModal').classList.add('hidden');
}