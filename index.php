<?php
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
        
            
    <style>
        /* Style spécifique à index.php */

        main.container {
            max-width: 860px;
            border-radius: 10px;
        }

        main.container h2 {
            font-family: 'Luminari', 'Segoe UI';
            font-size: 2em;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        main.container p {
            font-family: 'Luminari', 'Segoe UI';
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