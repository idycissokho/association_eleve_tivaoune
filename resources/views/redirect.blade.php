<!DOCTYPE html>
<html>
<head>
    <title>Redirection...</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Connexion réussie !',
            text: '{{ $message }}',
            timer: 1500,
            showConfirmButton: false
        }).then(() => {
            window.location.href = '{{ $url }}';
        });
    </script>
</body>
</html>