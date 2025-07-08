<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription Confirmée</title>
</head>
<body>
    <h1>Votre inscription est réussie!</h1>
    <div role="alert" aria-live="assertive" class="success-message">
    Merci pour votre inscription ! Un email vous a été envoyé.
</div>
    <script>
        // Redirection après 5 secondes
        setTimeout(() => {
            window.location.href = 'index.php';
        }, 5000);
    </script>
</body>
</html>
