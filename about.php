<?php
$images = [
    'images/champs-elysees-paris.jpg',
    'images/citadelle_Laferrière.jpg',
    'images/monument_historique.jpg',
    'images/Sans-Souci_Palace_front.jpg',
    'images/Tour2004.jpg',

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
    <title>Qui sommes-nous ? - APEH-France</title>
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
        body {
    background-color: #f7f7f7;
}
    header {
        background-color:rgb(16, 90, 165);
        color: white;
        padding: 1rem;
        text-align: center;
        font-family: 'Arial', sans-serif;
    }

    main.container {
        max-width: 960px;
        margin: 2rem auto;
        padding: 1rem 2rem;
        background-color:#f7f7f7;
    }

    .about-section {
        background: none;
        padding: 1rem 0;
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
        <h1>Bienvenue !</h1>
        <?php include 'header.php'; ?>
    </header>
    <main class="container">
        <section class="about-section">
            <h2 style="font-family: 'Georgia', serif; font-size: 2em; color: #2c3e50;">Qui sommes-nous ?</h2>
            <p style="font-family: 'Arial', sans-serif; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Bienvenue à l'Association des professionnels et étudiants haïtiens de France (APEH-France), une communauté dynamique d'Haïtiens résidant en France, composée d'étudiants et de professionnels.
            </p>
            <p style="font-family: 'Arial', sans-serif; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Notre mission est de semer l'espoir et d'apporter du réconfort à ceux qui en ont besoin, en offrant un soutien chaleureux et une présence bienveillante.
            </p>
            <p style="font-family: 'Arial', sans-serif; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Nous croyons fermement que chaque individu mérite d'être soutenu, peu importe son parcours ou ses circonstances. À travers nos actions, nous cherchons à créer des liens solides basés sur l'amitié, la solidarité et l'entraide.
            </p>
            <p style="font-family: 'Arial', sans-serif; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Que ce soit en partageant nos expériences, en organisant des événements enrichissants, ou en fournissant des ressources utiles, nous nous engageons à inspirer et à encourager notre communauté.
            </p>
            <p style="font-family: 'Arial', sans-serif; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Rejoignez-nous dans cette aventure humaine où chaque interaction est une opportunité de grandir ensemble et de contribuer positivement à la société.
            </p>
        </section>
    </main>
    <?php include 'footer.php'; ?>

</body>

</html>
