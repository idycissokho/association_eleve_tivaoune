// Fonction de confirmation de suppression
function confirmDelete(memberId, memberName) {
    Swal.fire({
        title: 'Supprimer ce membre ?',
        text: `Êtes-vous sûr de vouloir supprimer ${memberName} ? Cette action est irréversible.`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteMemberFromDB(memberId);
        }
    });
}

// Fonction de suppression en base de données
function deleteMemberFromDB(memberId) {
    Swal.fire({
        title: 'Suppression en cours...',
        text: 'Veuillez patienter',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });
    
    fetch(`/admin/members/${memberId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur réseau');
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Supprimé !',
                text: data.message,
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                window.location.reload();
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Erreur !',
                text: data.message || 'Erreur lors de la suppression',
                confirmButtonText: 'OK'
            });
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
        Swal.fire({
            icon: 'error',
            title: 'Erreur !',
            text: 'Une erreur réseau est survenue.',
            confirmButtonText: 'OK'
        });
    });
}