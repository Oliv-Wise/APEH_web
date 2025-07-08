<?php
$images = [
    'images/champs-elysees-paris.jpg',
    'images/citadelle_Laferrière.jpg',
    'images/monument_historique.jpg',
    'images/Sans-Souci_Palace_front.jpg',
    'images/Tour2004.jpg',
    'images/Tour_eiffel.jpg'
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Association des professionnels et étudiants haïtiens en France (APEH-France).">
<meta name="keywords" content="APEH, étudiants haïtiens, diaspora, solidarité, France, association">
<meta name="author" content="APEH-France">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Champs d'activités - APEH-France</title>
    <link rel="stylesheet" href="style.css">
    <script type="module">
        import { startRotation } from './js/lcg.js';

        const images = <?= json_encode($images, JSON_UNESCAPED_SLASHES) ?>;
        window.addEventListener('DOMContentLoaded', () => {
            const header = document.querySelector('header');
            if (header && images.length > 0) {
                const first = images[Math.floor(Math.random() * images.length)];
                header.style.backgroundImage = `url('${first}')`;
                header.style.backgroundSize = 'cover';
                header.style.backgroundPosition = 'center';
                header.style.backgroundRepeat = 'no-repeat';
                header.style.height = '70vh';
                startRotation(images, 5, (newImage) => {
                    header.style.backgroundImage = `url('${newImage}')`;
                });
            }
        });
    </script>
    <style>
        header {
        height: 60vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        header h1 {
            font-size: 2em;
            margin-bottom: 0.10em;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.6);
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .intro-text {
            text-align: center;
            padding: 2em;
            font-size: 1.2em;
            color: #444;
            max-width: 800px;
            margin: auto;
        }

        .activity-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2em;
            padding: 2em;
        }

        .activity-item {
            flex: 0 1 calc(30% - 2em);
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 1em;
            transform: translateY(0);
            transition: transform 0.4s ease-in-out;
            overflow: hidden;
        }

        .activity-item:hover {
            transform: scale(1.03);
        }

        .activity-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1em;
            transition: transform 6s ease-in-out;
        }

        .activity-item:hover img {
            transform: scale(1.1);
        }

        .activity-item h3 {
            font-size: 1.2em;
            color: #333;
            text-align: center;
        }
        @media screen and (max-width: 768px) {
            .activity-list {
                flex-direction: column;
                align-items: center;
            }

            .activity-item {
                flex: 1 1 90%;
                width: 90%;
                max-width: 500px;
            }
        }

        
    </style>
</head>
<body>
    <header>
        <h1>Nos champs d'activités </h1>
        <?php include 'header.php'; ?>
    </header>
    <section class="intro-text">
        <p>À travers une diversité d’activités sociales, éducatives et culturelles, l’APEH-France agit concrètement pour favoriser l’unité, l’épanouissement et l’intégration de la communauté haïtienne et de ses amis en France.</p>
    </section>
    <main class="activity-list">
        <?php
        $activities = [
            ['img' => 'images/formation.jpg', 'title' => 'Formation'],
            ['img' => 'images/orientation_professionnelle.png', 'title' => 'Orientation professionnelle'],
            ['img' => 'images/events/sortie_explorative.png', 'title' => 'Sortie explorative'],
            ['img' => 'images/events/img1.jpeg', 'title' => 'Célébration du bicolore haïtien'],
            ['img' => 'images/welcome.jpeg', 'title' => 'Welcome to France'],
            ['img' => 'images/events/gala.jpg', 'title' => 'Gala'],
            ['img' => 'images/Talkshow.jpeg', 'title' => 'Talkshow'],
            ['img' => 'images/distrib.png', 'title' => 'Distribution de kits alimentaires et scolaires'],
            ['img' => 'images/sensibilisation.png', 'title' => 'Journée de sensibilisation'],
            ['img' => 'images/tournoi_sportif.jpeg', 'title' => 'Tournoi sportif'],
            ['img' => 'images/events/Jivé.jpeg', 'title' => 'Jivé']
        ];
        foreach ($activities as $activity): ?>
            <div class="activity-item">
                <img src="<?= $activity['img'] ?>" alt="<?= $activity['title'] ?>">
                <h3><?= $activity['title'] ?></h3>
            </div>
        <?php endforeach; ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
