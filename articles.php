<?php
require_once __DIR__  . '/db/includes/db_config.php';

$stmt = $pdo->query("SELECT titre, contenu, date_publication FROM articles ORDER BY date_publication DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Articles - APEH-France</title>
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="Association des professionnels et étudiants haïtiens en France (APEH-France).">
    <meta name="keywords" content="APEH, étudiants haïtiens, diaspora, solidarité, France, association">
    <meta name="author" content="APEH-France">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    
</head>
<body>
    <header>
        <h1>Articles de l'APEH-France</h1>
        <?php include 'header.php'; ?>
    </header>
    <h1>Nos derniers articles</h1>
    <div class="articles-container">
        <?php foreach ($articles as $article): ?>
            <article class="article">
                <h2><?= htmlspecialchars($article['titre']) ?></h2>
                <p><?= nl2br(htmlspecialchars($article['contenu'])) ?></p>
                <small>Publié le <?= date('d/m/Y', strtotime($article['date_publication'])) ?></small>
                <hr>
            </article>
        <?php endforeach; ?>
    </div>
<footer>
<?php include 'footer.php'; ?> 
    </footer>
</body>
</html>
