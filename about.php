<?php
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
    <meta name="description" content="Association des professionnels et étudiants haïtiens en France (APEH-France).">
<meta name="keywords" content="APEH, étudiants haïtiens, diaspora, solidarité, France, association">
<meta name="author" content="APEH-France">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <title>Qui sommes-nous ? - APEH-France</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Bienvenue !</h1>
        <?php include 'header.php'; ?>
    </header>
    <main class="container">
        <section class="about-section">
            <h2 style=" ; font-size: 2em; color: #2c3e50; font-family: 'Luminari', 'Segoe UI'";>Qui sommes-nous ?</h2>
            <p style="font-family: 'Luminari', 'Segoe UI'; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Bienvenue sur le site de l'Association des professionnels et étudiants haïtiens de France (APEH-France), une communauté dynamique d'Haïtiens résidant en France, composée d'étudiants et de professionnels.
            </p>
            <p style="font-family: 'Luminari', 'Segoe UI'; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Notre mission est de semer l'espoir et d'apporter du réconfort à ceux qui en ont besoin, en offrant un soutien chaleureux et une présence bienveillante.
            </p>
            <p style="font-family: 'Luminari', 'Segoe UI'; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Nous croyons fermement que chaque individu mérite d'être soutenu, peu importe son parcours ou ses circonstances. À travers nos actions, nous cherchons à créer des liens solides basés sur l'amitié, la solidarité et l'entraide.
            </p>
            <p style="font-family: 'Luminari', 'Segoe UI'; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Que ce soit en partageant nos expériences, en organisant des événements enrichissants, ou en fournissant des ressources utiles, nous nous engageons à inspirer et à encourager notre communauté.
            </p>
            <p style="font-family: 'Luminari', 'Segoe UI'; font-size: 1.2em; line-height: 1.6; color: #34495e;">
            Rejoignez-nous dans cette aventure humaine où chaque interaction est une opportunité de grandir ensemble et de contribuer positivement à la société.
            </p>
        </section>
</main>
<main class = "container">
        <h2 style="font-family: 'Luminari', 'Segoe UI'; font-size: 1.8em; color: #2c3e50; margin-top:2rem;">Nos réalisations</h2>
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
        <h2 style="font-family: 'Luminari', 'Segoe UI'; font-size: 1.8em; color: #2c3e50; margin-top:2rem;">Nos champs d'activités</h2>
    <section class="intro-text">
    <p>À travers une diversité d’activités sociales, éducatives et culturelles, l’APEH-France agit concrètement pour favoriser l’unité, l’épanouissement et l’intégration de la communauté haïtienne et de ses amis en France.</p>    
    </section>
    </main>
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
            ['img' => 'images/sensibilisation.png', 'title' => 'Journée de sensibilisation']
            
        ];
        foreach ($activities as $activity): ?>
            <div class="activity-item">
                <img src="<?= $activity['img'] ?>" alt="<?= $activity['title'] ?>">
                <h3><?= $activity['title'] ?></h3>
            </div>
        <?php endforeach; ?>
        <script>
        window.onload = function() {
            document.querySelectorAll('.card').forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('visible');
                }, index * 200);
            });
        };
    </script>
    </main>

    <?php include 'footer.php'?>
    
</body>

</html>
