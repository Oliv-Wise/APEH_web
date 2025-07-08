<?php
// Configuration sécurisée des cookies de session
$secure = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';  // true si HTTPS actif
$httponly = true;  // Empêche JavaScript d’accéder au cookie
$samesite = 'Strict';  // ou 'Lax' si tu veux autoriser un peu plus de flexibilité

session_set_cookie_params([
    'lifetime' => 0, // expire à la fermeture du navigateur
    'path' => '/',
    'domain' => '', // domaine par défaut
    'secure' => $secure,
    'httponly' => $httponly,
    'samesite' => $samesite
]);

session_start();
require_once __DIR__ . '/db/includes/db_config.php';

$images = [
    'images/champs-elysees-paris.jpg',
    'images/citadelle_Laferrière.jpg',
    'images/monument_historique.jpg',
    'images/Sans-Souci_Palace_front.jpg',
    'images/Tour2004.jpg',
    'images/Tour_eiffel.jpg'
];


if (isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_dashboard.php');
    exit();
}

// Si la méthode de requête est POST, on traite la connexion
// On utilise trim() pour éviter les espaces superflus
// et password_verify() pour vérifier le mot de passe haché
// On utilise PDO pour éviter les injections SQL
// On utilise htmlspecialchars() pour éviter les attaques XSS
// On utilise session_regenerate_id() pour éviter les attaques de fixation de session
// On utilise header() pour rediriger l'utilisateur après la connexion réussie
// On utilise exit() pour arrêter l'exécution du script après la redirection    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = :username");
        $stmt->execute([':username' => $username]);
        $admin = $stmt->fetch();

        if ($admin && password_verify($password, $admin['password_hash'])) {
            session_regenerate_id(true);
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin['username'];
            header('Location: admin_dashboard.php');
            exit();
        } else {
            $error = "Identifiants incorrects.";
        }
    } else {
        $error = "Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin - APEH-France</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Connexion administrateur</h1>

    <?php if (isset($error)): ?>
        <p style="color:red"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="username">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
