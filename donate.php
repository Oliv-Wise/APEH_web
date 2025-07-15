<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <meta name="description" content="Association des professionnels et étudiants haïtiens en France (APEH-France).">
    <meta name="keywords" content="APEH, étudiants haïtiens, diaspora, solidarité, France, association">
    <meta name="author" content="APEH-France">
    <title>Faire un don - APEH-France</title>
    <link rel="stylesheet" href="style.css">

    <style>
        
        h2 {
            color: #444;
            text-align: center;
            font-family: 'Georgia', serif;
        }

        .donation-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: #ffffffee;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(186, 53, 53, 0.88);
        }

        .donation-container h2 {
            font-size: 2em;
            margin-bottom: 1rem;
            color: rgb(29, 54, 80);
        }

        .donation-container p {
            text-align: center;
            font-size: 1.1em;
            line-height: 1.6;
        }

        iframe#haWidget {
            display: block;
            margin: 2rem auto 0;
            width: 100%;
            height: 70px;
            border: none;
        }
    </style>
</head>
<body>
        <?php include 'header.php'; ?>

    <main class="donation-container">
        <h2>Contribuez à nos projets solidaires</h2>
        <p>Votre soutien nous permet de mener à bien nos actions éducatives, culturelles et solidaires.</p>
        <p><strong>Aucune donnée bancaire</strong> n’est traitée ni stockée sur notre site.<br>
        Les paiements sont <strong>100% gérés via HelloAsso</strong>.</p>
        <iframe id="haWidget" allowtransparency="true"
            src="https://www.helloasso.com/associations/association-des-professionnels-et-etudiants-haitiens-de-france/formulaires/1/widget-bouton">
        </iframe>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
