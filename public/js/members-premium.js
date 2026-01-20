// Variables globales
let currentEditId = null;
let currentDeleteId = null;

// Filtrage en temps réel
function filterMembers() {
    const searchTerm = document.getElementById('memberSearch').value.toLowerCase();
    const roleFilter = document.getElementById('roleFilter').value;
    const statusFilter = document.getElementById('statusFilter').value;
    const rows = document.querySelectorAll('.member-row');
    
    rows.forEach(row => {
        const name = row.dataset.name;
        const email = row.dataset.email;
        const profession = row.dataset.profession;
        const role = row.dataset.role;
        const status = row.dataset.status;
        
        const matchesSearch = name.includes(searchTerm) || 
                            email.includes(searchTerm) || 
                            profession.includes(searchTerm);
        const matchesRole = !roleFilter || role === roleFilter;
        const matchesStatus = !statusFilter || status === statusFilter;
        
        if (matchesSearch && matchesRole && matchesStatus) {
            row.style.display = '';
            row.style.animation = 'fadeIn 0.3s ease-in';
        } else {
            row.style.display = 'none';
        }
    });
}

// Voir le profil d'un membre
function viewMember(id) {
    // Animation de feedback
    event.target.style.transform = 'scale(0.95)';
    setTimeout(() => {
        event.target.style.transform = 'scale(1)';
    }, 150);
    
    // Ici vous pouvez ajouter la logique pour afficher le profil
    console.log('Voir membre ID:', id);
}

// Modifier un membre
function editMember(id) {
    currentEditId = id;
    
    // Simuler le chargement des données (remplacer par un appel AJAX)
    const row = document.querySelector(`tr[data-member-id="${id}"]`);
    
    // Pré-remplir le formulaire (données simulées)
    document.getElementById('editName').value = 'Nom du membre';
    document.getElementById('editEmail').value = 'email@example.com';
    document.getElementById('editPhone').value = '+221 77 123 45 67';
    document.getElementById('editProfession').value = 'Profession';
    
    // Afficher le modal avec animation
    const modal = document.getElementById('editMemberModal');
    modal.classList.remove('hidden');
    modal.style.animation = 'fadeIn 0.3s ease-out';
}

// Fermer le modal d'édition
function closeEditModal() {
    const modal = document.getElementById('editMemberModal');
    modal.style.animation = 'fadeOut 0.3s ease-out';
    setTimeout(() => {
        modal.classList.add('hidden');
        currentEditId = null;
    }, 300);
}

// Confirmer la suppression
function confirmDelete(id, name) {
    currentDeleteId = id;
    document.getElementById('deleteMemberName').textContent = name;
    
    const modal = document.getElementById('deleteModal');
    modal.classList.remove('hidden');
    modal.style.animation = 'fadeIn 0.3s ease-out';
}

// Fermer le modal de suppression
function closeDeleteModal() {
    const modal = document.getElementById('deleteModal');
    modal.style.animation = 'fadeOut 0.3s ease-out';
    setTimeout(() => {
        modal.classList.add('hidden');
        currentDeleteId = null;
    }, 300);
}

// Supprimer le membre
function deleteMember() {
    if (!currentDeleteId) return;
    
    // Animation de chargement
    const deleteBtn = event.target;
    const originalText = deleteBtn.textContent;
    deleteBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Suppression...';
    deleteBtn.disabled = true;
    
    // Simuler la suppression (remplacer par un appel AJAX)
    setTimeout(() => {
        // Supprimer la ligne du tableau avec animation
        const row = document.querySelector(`tr[data-member-id="${currentDeleteId}"]`);
        if (row) {
            row.style.animation = 'slideOut 0.5s ease-out';
            setTimeout(() => {
                row.remove();
            }, 500);
        }
        
        closeDeleteModal();
        
        // Notification de succès
        showNotification('Membre supprimé avec succès', 'success');
    }, 1500);
}

// Gestion du formulaire d'édition
document.getElementById('editMemberForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sauvegarde...';
    submitBtn.disabled = true;
    
    // Simuler la sauvegarde
    setTimeout(() => {
        closeEditModal();
        showNotification('Membre modifié avec succès', 'success');
        
        // Réinitialiser le bouton
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }, 1500);
});

// Notification système
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-2xl shadow-2xl transform translate-x-full transition-all duration-500 ${
        type === 'success' ? 'bg-green-500 text-white' : 
        type === 'error' ? 'bg-red-500 text-white' : 
        'bg-blue-500 text-white'
    }`;
    
    notification.innerHTML = `
        <div class="flex items-center space-x-3">
            <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle'}"></i>
            <span class="font-medium">${message}</span>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Animation d'entrée
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Animation de sortie
    setTimeout(() => {
        notification.style.transform = 'translateX(full)';
        setTimeout(() => {
            notification.remove();
        }, 500);
    }, 3000);
}

// Fermer les modals en cliquant à l'extérieur
document.addEventListener('click', function(e) {
    if (e.target.id === 'editMemberModal') {
        closeEditModal();
    }
    if (e.target.id === 'deleteModal') {
        closeDeleteModal();
    }
});

// Animations CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
    
    @keyframes fadeOut {
        from { opacity: 1; transform: scale(1); }
        to { opacity: 0; transform: scale(0.95); }
    }
    
    @keyframes slideOut {
        from { opacity: 1; transform: translateX(0); }
        to { opacity: 0; transform: translateX(-100%); }
    }
    
    .member-row:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
`;
document.head.appendChild(style);