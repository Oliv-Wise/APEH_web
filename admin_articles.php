<?php
session_start();
require_once __DIR__ . '/db/includes/db_config.php';

// Vérifie si l’admin est connecté
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login_admin.php');
    exit();
}

// Gestion de la publication d’un article
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titre'], $_POST['contenu'])) {
    $titre = trim($_POST['titre']);
    $contenu = trim($_POST['contenu']);

    if (!empty($titre) && !empty($contenu)) {
        $stmt = $pdo->prepare("INSERT INTO articles (titre, contenu, date_publication) VALUES (:titre, :contenu, NOW())");
        $stmt->execute([
            ':titre' => $titre,
            ':contenu' => $contenu
        ]);
        $message = "Article publié avec succès.";
    } else {
        $error = "Veuillez remplir tous les champs.";
    }
}

// Suppression d’un article
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM articles WHERE id = :id");
    $stmt->execute([':id' => $id]);
    header("Location: admin_articles.php");
    exit();
}

// Récupération des articles
$stmt = $pdo->query("SELECT id, titre, date_publication FROM articles ORDER BY date_publication DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Gestion des articles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Interface administrateur - Articles</h1>
    <p><a href="logout_admin.php">Se déconnecter</a></p>

    <?php if (isset($message)): ?>
        <p style="color: green;"><?= htmlspecialchars($message) ?></p>
    <?php elseif (isset($error)): ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <h2>Publier un nouvel article</h2>
    <form method="post">
        <label for="titre">Titre :</label><br>
        <input type="text" id="titre" name="titre" required><br><br>

        <label for="contenu">Contenu :</label><br>
        <textarea id="contenu" name="contenu" rows="10" cols="70" required></textarea><br><br>

        <button type="submit">Publier</button>
    </form>

    <hr>

    <h2>Articles publiés</h2>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <strong><?= htmlspecialchars($article['titre']) ?></strong>
                (<?= date('d/m/Y', strtotime($article['date_publication'])) ?>)
                - <a href="admin_articles.php?delete=<?= (int)$article['id'] ?>" onclick="return confirm('Supprimer cet article ?');">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
