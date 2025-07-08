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
    <title>APEH-France - Accueil</title>
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
        /* Style spécifique à index.php */

        main.container {
            max-width: 960px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #ffffffee;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        main.container h2 {
            font-family: 'Georgia', serif;
            font-size: 2em;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        main.container p {
            font-family: 'Arial', sans-serif;
            font-size: 1.2em;
            line-height: 1.6;
            color: #34495e;
        }

        /* Optionnel : animation d'apparition douce */
        main.container {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 768px) {
            main.container {
                padding: 1rem;
                font-size: 0.9em;
            }

            main.container h2 {
                font-size: 1.5em;
            }

            main.container p {
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            main.container {
                padding: 0.5rem;
            }

            main.container h2 {
                font-size: 1.2em;
            }

            main.container p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <main class="container">
        <h2>Association des professionnels et étudiants haïtiens de France</h2>
        <p>Nous œuvrons pour rassembler, soutenir et promouvoir la communauté haïtienne en France.</p>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
