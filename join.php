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
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
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
        * {
        box-sizing: border-box;
    }

    body {
    word-wrap: break-word;
    overflow-wrap: break-word;
    }

    img, video, iframe {
    max-width: 100%;
    height: auto;
    display: block;
    }

    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur APEH-France</h1>
        <?php include 'header.php'; ?>
    </header>
    <main class="container">
        <h2>Pourquoi nous rejoindre ?</h2>
        <section>
            <article>
                <h3>🌟 Engagement et développement personnel</h3>
                <p>En tant que membre d'APEH-France, vous avez l'opportunité de vous engager activement dans des projets qui vous tiennent à cœur. Développez vos compétences en leadership, organisation, prise de décision et travail d'équipe.</p>
            </article>
            <article>
                <h3>🤝 Réseautage</h3>
                <p>Rencontrez des étudiants, professionnels et passionnés partageant vos intérêts. Élargissez votre réseau social et professionnel en connectant avec des experts et des pairs.</p>
            </article>
            <article>
                <h3>📚 Opportunités d'apprentissage</h3>
                <p>Participez à des conférences, ateliers, formations et séminaires pour enrichir vos connaissances et rester à jour dans votre domaine d'intérêt.</p>
            </article>
            <article>
                <h3>💼 Développement de compétences</h3>
                <p>Améliorez vos compétences transférables comme la communication, la gestion du temps, la planification d'événements et bien plus encore.</p>
            </article>
            <article>
                <h3>📝 Valorisation du CV</h3>
                <p>Votre implication dans APEH-France est un atout pour votre CV, démontrant votre motivation et votre capacité à gérer des responsabilités.</p>
            </article>
            <article>
                <h3>🎉 Activités sociales et divertissement</h3>
                <p>Participez à des événements sociaux, sorties et activités de loisirs pour vous détendre et rencontrer de nouvelles personnes.</p>
            </article>
            <article>
                <h3>📢 Voix et représentation</h3>
                <p>Faites entendre votre voix et influencez les décisions et politiques de l'établissement en représentant les intérêts des étudiants.</p>
            </article>
            <article>
                <h3>📖 Accès à des ressources et services</h3>
                <p>Bénéficiez d'un accès privilégié à des installations spécifiques et des ressources académiques.</p>
            </article>
            <article>
                <h3>🤲 Opportunités de bénévolat</h3>
                <p>Contribuez positivement à la société en participant à des projets communautaires et activités de bénévolat.</p>
            </article>
        </section>
        <p class="join-link">
            <a href="register.php" class="btn-join">Rejoignez-nous dès aujourd'hui !</a>
        </p>
    </main>
    <footer>
        <div class="footer-logo" style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
            <img src="images/logo_apeh.png" alt="Logo APEH-France" style="width: 50px; height: auto; border-radius: 5px; cursor: pointer;" onclick="window.location.href='index.php'">
        </div>
        <p>&copy; <?= date('Y') ?> APEH-France. Tous droits réservés.</p>
        <nav>
            <a href="about.php">À propos</a> | 
            <a href="poles.php">Contact</a> | 
            <div class="networks">
            <p><strong>Nos pages / Pôle de communication :</strong></p>
            <a href="https://www.facebook.com/apehfrance509/">Facebook</a> |
            <a href="https://www.instagram.com/apeh.france/?hl=am-et">Instagram</a>
        </div>
        </nav>
    </footer>