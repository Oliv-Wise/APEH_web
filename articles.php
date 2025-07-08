<?php
require_once __DIR__  . '/db/includes/db_config.php';
$images = [
    'images/champs-elysees-paris.jpg',
    'images/citadelle_Laferrière.jpg',
    'images/monument_historique.jpg',
    'images/Sans-Souci_Palace_front.jpg',
    'images/Tour2004.jpg',
    'images/Tour_eiffel.jpg'
];

$stmt = $pdo->query("SELECT titre, contenu, date_publication FROM articles ORDER BY date_publication DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Articles - APEH-France</title>
    <link rel="stylesheet" href="style.css">
    <script type="module">
        import { startRotation } from './js/lcg.js';

        const images = <?= json_encode($images, JSON_UNESCAPED_SLASHES) ?>;
        const header = document.querySelector('header');

        if (header) {
            const first = images[Math.floor(Math.random() * images.length)];
            header.style.backgroundImage = `url('${first}')`;

            startRotation(images, 5, (newImage) => {
                header.style.backgroundImage = `url('${newImage}')`;
            });
        }
    </script>
    <style>
    .article h2 {
    color: black !important;
    font-size: 1.5em !important;
    display: block !important;
    visibility: visible !important;
    }
    </style>

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
