<?php
$images = [
    'images/champs-elysees-paris.jpg',
    'images/citadelle_Laferrière.jpg',
    'images/monument_historique.jpg',
    'images/Sans-Souci_Palace_front.jpg',
    'images/Tour2004.jpg',
    'images/Tour_eiffel.jpg'
];

$achievements = [
    ['title' => 'Tournoi sportif', 'image' => 'images/tournoi_sportif.jpeg', 'description' => 'Un moment de cohésion et de compétition amicale pour renforcer les liens entre membres.'],
    ['title' => 'Formation', 'image' => 'images/formation.jpg', 'description' => 'Des sessions de renforcement de compétences pour étudiants et professionnels.'],
    ['title' => 'Orientation professionnelle', 'image' => 'images/orientation.jpeg', 'description' => 'Des rencontres et ateliers pour guider les membres dans leur parcours professionnel.'],
    ['title' => 'Célébration du bicolore haitien', 'image' => 'images/bicolores.jpeg', 'description' => 'Un moment fort de fierté culturelle et de partage autour de la culture haïtienne.'],
    ['title' => 'Welcome to France', 'image' => 'images/welcome.jpeg', 'description' => 'Un accueil chaleureux pour les nouveaux membres et étudiants.'],
    ['title' => 'Gala', 'image' => 'images/events/gala.jpg', 'description' => 'Un événement prestigieux pour célébrer les réussites de l’association.'],
    ['title' => 'Talkshow', 'image' => 'images/Talkshow.jpeg', 'description' => 'Des discussions inspirantes avec des invités spéciaux et des experts engagés.'],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Réalisations - APEH-France</title>
    <link rel="stylesheet" href="style.css">
    <script type="module">
        import { startRotation } from './js/lcg.js';

        const images = <?= json_encode($images, JSON_UNESCAPED_SLASHES) ?>;
        window.addEventListener('DOMContentLoaded', () => {
            const header = document.querySelector('header');
            const first = images[Math.floor(Math.random() * images.length)];
            header.style.backgroundImage = `url('${first}')`;
            startRotation(images, 5, (newImage) => {
                header.style.backgroundImage = `url('${newImage}')`;
            });
        });
    </script>
    <style>

        header {
            height: 300px;
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding-top: 100px;
            position: relative;
        }

        header h1 {
            font-size: 2em;
            margin: 0;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem;
        }

        .intro-message {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.2em;
            color: #333;
        }

        .grid-achievements {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .card:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 1rem;
        }

        .card-body h3 {
            color: #007BFF;
            margin: 0 0 0.5rem 0;
        }

        .card-body p {
            color: #333;
            line-height: 1.5;
        }

        .don-call {
            text-align: center;
            padding: 2rem;
            background: #007BFF;
            color: white;
            font-size: 1.3em;
            font-weight: bold;
            border-radius: 8px;
            margin-top: 3rem;
        }

        .don-call a {
            color: #fff;
            text-decoration: underline;
        }

        .cta-button {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.8rem 1.5rem;
            font-size: 1.1em;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #218838;
        }
        * {
  box-sizing: border-box;
}

body {
  word-wrap: break-word;
  overflow-wrap: break-word;
}


    </style>
</head>
<body>
    <header>
        <h1>Nos Réalisations</h1>
        <?php include 'header.php'; ?>
    </header>

    <main class="container">
        <p class="intro-message">
            Découvrez les actions concrètes menées par APEH-France pour accompagner, inspirer et rassembler
            les membres de la communauté haïtienne en France.
        </p>

        <section class="grid-achievements">
            <?php foreach ($achievements as $item): ?>
                <div class="card">
                    <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                    <div class="card-body">
                        <h3><?= htmlspecialchars($item['title']) ?></h3>
                        <p><?= htmlspecialchars($item['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <div class="don-call">
            Chaque action compte. <a href="donate.php">Soutenez-nous par un don</a><br><br>
            <a href="donate.php" class="cta-button">Faire un don maintenant</a>
        </div>
    </main>

    <script>
        window.onload = function() {
            document.querySelectorAll('.card').forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('visible');
                }, index * 200);
            });
        };
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>
