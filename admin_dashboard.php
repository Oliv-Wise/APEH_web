<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login_admin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenue, <?= htmlspecialchars($_SESSION['admin_username']) ?></h1>
    <p>Que souhaitez-vous faire ?</p>

    <ul>
        <li><a href="admin_articles.php">Gérer les articles</a></li>
        <li><a href="admin_inscrits.php">Consulter les inscrits</a></li>
        <li><a href="logout_admin.php">Se déconnecter</a></li>
    </ul>
</body>
</html>
