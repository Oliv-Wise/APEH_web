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
    main.container {
        max-width: 960px;
        margin: 2rem auto;
        padding: 2rem;
        background-color: #ffffffee;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(182, 28, 28, 0.88);
    }

    .values-section {
        font-family: 'Arial', sans-serif;
        color: #333;
        line-height: 1.7;
    }

    .values-section h2 {
        font-family: 'Georgia', serif;
        font-size: 2em;
        color:rgb(29, 54, 80);
        margin-bottom: 1rem;
    }

    .values-section p {
        font-size: 1.2em;
        margin-bottom: 1.5rem;
        color: #555;
    }

    .values-section ul {
        list-style-type: none;
        padding: 0;
    }

    .values-section ul li {
        background-color: #f9f9f9;
        padding: 1rem;
        margin-bottom: 1rem;
        border-left: 6px solid #007BFF;
        border-radius: 6px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        transition: transform 0.2s ease-in-out;
    }

    .values-section ul li:hover {
        transform: scale(1.01);
    }

    .values-section ul li strong {
        color: #007BFF;
        display: inline-block;
        min-width: 100px;
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
        <h1>Nos Valeurs</h1>
        <?php include 'header.php'; ?>
    </header>
    <main class="container">
    <section class ="values-section">
        <h2>Nos valeurs fondamentales</h2>
        <p>
    Nos actions sont guidées par cinq valeurs fondamentales, réunies dans l'acronyme <strong>AIDER</strong>.  
    Elles incarnent notre engagement à bâtir une communauté bienveillante, inspirée et solidaire.
    </p>

        <ul>
            <li><strong>Amour :</strong> Un sentiment profond d'affection et de bienveillance envers autrui, source de joie et d'épanouissement.</li>
            <li><strong>Intégrité :</strong> L'honnêteté et l'éthique, essentielles pour bâtir la confiance et maintenir des relations harmonieuses.</li>
            <li><strong>Dynamique :</strong> Le mouvement et l'évolution, impliquant notre capacité d'adaptation et de flexibilité.</li>
            <li><strong>Excellence :</strong> L'aspiration à la perfection et l'engagement envers la qualité dans nos actions.</li>
            <li><strong>Respect :</strong> La reconnaissance de la dignité et des droits des autres, avec une attitude de tolérance et d'acceptation.</li>
        </ul>
    </section>
</main>
    <?php include 'footer.php'; ?>
</body>
</html>
