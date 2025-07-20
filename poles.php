<?php
$images = [
    'images/champs-elysees-paris.jpg',
    'images/citadelle_Laferrière.jpg',
    'images/monument_historique.jpg',
    'images/Sans-Souci_Palace_front.jpg',
    'images/Tour2004.jpg',
    'images/Tour_eiffel.jpg'
];
$poles = [
    ["name" => "Pôle d’intégration", "responsable" => "Marcy Leon"],
    ["name" => "Pôle de soutien et solidarité", "responsable" => "Ifodenet Francois"],
    ["name" => "Pôle de suivis d’étude et d’orientation professionnelle", "responsable" => "Camille Anderson" ],
    ["name" => "Pôle événementiel", "responsable" => "Steeve MICHEL" ],
    ["name" => "Pôle culinaire", "responsable" => "Nathalie Edouard" ],
    ["name" => "Pôle logistique", "responsable" => "Jean Bertrand"],
    ["name" => "Pôle multimédia et de communication", "responsable" => "Ricardine Celestin"],
    ["name" => "Pôle culturel", "responsable" => "Florie Dorestin"]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Association des professionnels et étudiants haïtiens en France (APEH-France).">
    <meta name="keywords" content="APEH, étudiants haïtiens, diaspora, solidarité, France, association">
    <meta name="author" content="APEH-France">
    <meta name="viewport" content="width=device-width, initial-scale=0.5eve">
    <title>Nos Pôles - APEH-France</title>
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
</head>
<body>
    <header>
        <h1>Nos différents pôles et contacts</h1>
        <?php include 'header.php'; ?>
    </header>
    <main class="poles-container">
        <div class="pole-card" style="border-left: 5px solid #28a745;">
        <h3>Contact général de l’association</h3>
        <p>Pour toute question ou prise de contact, veuillez nous écrire à : 
        <a href="mailto:apeh.france509@gmail.com">apeh.france509@gmail.com</a>
        </p>
        </div>
        <?php foreach ($poles as $pole): ?>
            <div class="pole-card zoom-effect">
                <h3><?= $pole['name'] ?></h3>
                <p><strong>Responsable :</strong> <?= $pole['responsable'] ?></p>
            </div>
        <?php endforeach; ?>
        
</div>
    </main>
        <div class="networks">
            <p><strong>Nos pages / Pôle de communication :</strong></p>
            <a href="https://www.facebook.com/apehfrance509/">Facebook</a> |
            <a href="https://www.instagram.com/apeh.france/?hl=am-et">Instagram</a> |
            <a href="'https://www.linkedin.com/company/association-des-%C3%A9tudiants-et-professionnels-haitiens-de-fance/'"> LinkedIn</a> | 
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
