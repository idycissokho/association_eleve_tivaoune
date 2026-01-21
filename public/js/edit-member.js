// Fonction pour éditer un membre
function editMember(memberId) {
    console.log('editMember called with ID:', memberId);
    
    fetch(`/admin/members/${memberId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur réseau');
            }
            return response.json();
        })
        .then(user => {
            console.log('User data for edit:', user);
            
            // Préremplir les champs du formulaire
            document.getElementById('editName').value = user.name || '';
            document.getElementById('editEmail').value = user.email || '';
            document.getElementById('editPhone').value = user.phone || '';
            document.getElementById('editProfession').value = user.current_profession || '';
            
            // Stocker l'ID du membre dans le formulaire
            document.getElementById('editMemberForm').dataset.memberId = memberId;
            
            // Afficher le modal
            document.getElementById('editMemberModal').classList.remove('hidden');
        })
        .catch(error => {
            console.error('Erreur:', error);
            Swal.fire('Erreur', 'Impossible de charger les données du membre', 'error');
        });
}

function closeEditModal() {
    document.getElementById('editMemberModal').classList.add('hidden');
}

// Gestionnaire de soumission du formulaire d'édition
document.addEventListener('DOMContentLoaded', function() {
    const editForm = document.getElementById('editMemberForm');
    if (editForm) {
        editForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const saveButton = document.getElementById('saveButton');
            const saveButtonText = document.getElementById('saveButtonText');
            const saveButtonLoading = document.getElementById('saveButtonLoading');
            
            // Afficher le chargement
            saveButton.disabled = true;
            saveButtonText.classList.add('hidden');
            saveButtonLoading.classList.remove('hidden');
            
            const memberId = this.dataset.memberId;
            const formData = {
                name: document.getElementById('editName').value,
                email: document.getElementById('editEmail').value,
                phone: document.getElementById('editPhone').value,
                current_profession: document.getElementById('editProfession').value,
                _method: 'PUT'
            };
            
            fetch(`/admin/members/${memberId}/edit`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                // Restaurer le bouton
                saveButton.disabled = false;
                saveButtonText.classList.remove('hidden');
                saveButtonLoading.classList.add('hidden');
                
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Modifié !',
                        text: data.message,
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        closeEditModal();
                        location.reload();
                    });
                } else {
                    Swal.fire('Erreur', data.message, 'error');
                }
            })
            .catch(error => {
                // Restaurer le bouton en cas d'erreur
                saveButton.disabled = false;
                saveButtonText.classList.remove('hidden');
                saveButtonLoading.classList.add('hidden');
                
                console.error('Erreur:', error);
                Swal.fire('Erreur', 'Impossible de modifier le membre', 'error');
            });
        });
    }
});