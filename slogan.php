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

            startRotation(images, 5, (newImage) => {
                header.style.backgroundImage = `url('${newImage}')`;
            });
        }
    });
    </script>
    <style>

        main.container {
            max-width: 960px;
            margin: 2rem auto;
            margin: 1rem auto;
            padding: 1rem;
            box-sizing: border-box;
        }
        main.container {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .slogan-s p {
            font-family: 'Luminari', 'Segoe UI';
            font-size: 1.15em;
            line-height: 1.7;
            color: #333;
            margin-bottom: 1.2rem;
        }

        .slogan-s h2 {
            font-family: 'Luminari', 'Segoe UI';
            font-size: 1.8em;
            color: #2c3e50;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .section-item {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    padding: 1rem;
    background-color: #f9f9f9;
    margin-bottom: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    opacity: 0;
    transform: translateY(30px);
}

.section-item.visible {
    opacity: 1;
    transform: translateY(0);
}

.section-item img {
    width: 100%;
    max-width: 300px;
    height: auto;
    border-radius: 10px;
}

.section-description {
    flex: 1 1 300px;
    text-align: left;
}

    </style>
</head>
<body>
    <header>
        <h1>Notre slogan</h1>
        <?php include 'header.php'; ?>
    </header>
    <main class="container">
    <p style="font-size: 1.8em; text-align: center; font-style: italic; font-weight: bold; color: #007BFF;">
            « Tu n’es pas seul, on est ensemble »
    </p>
    <section class="slogan-s">
        <p>
            Ce slogan incarne notre engagement à soutenir et à accompagner chaque membre de notre communauté. 
            Il reflète notre volonté de créer des liens solides, de partager des expériences et de bâtir un avenir meilleur ensemble.
        </p>
        <p>
            Nous croyons fermement que l'union fait la force et que, ensemble, nous pouvons surmonter les défis et célébrer les réussites.
        </p>
        <article>
            <h2>Les fondements de notre vision à travers ce slogan :</h2>
            <div class="sections-container">
                <?php
                $sections = [
                    [
                        'title' => 'Solidarité et soutien',
                        'image' => 'images/solidarité.jpeg',
                        'description' => 'Le slogan met l\'accent sur l\'idée que personne n\'est seul face aux défis de la vie. Il souligne l\'importance de la solidarité et du soutien mutuel entre les individus. Il crée un sentiment de camaraderie et d\'appartenance en rappelant que nous sommes tous dans le même bateau et que nous pouvons nous aider les uns les autres.'
                    ],
                    [
                        'title' => 'Collaboration et coopération',
                        'image' => 'images/collaboration.jpeg',
                        'description' => 'Le slogan encourage la collaboration et la coopération entre les personnes. Il met en évidence l\'idée que lorsque nous travaillons ensemble, nous sommes plus forts, comme nous dit la devise du peuple haïtien : « L\'union fait la force ». Il incite à surmonter les obstacles en s\'appuyant sur les compétences et les ressources collectives, créant ainsi une dynamique de groupe favorable à l\'accomplissement des objectifs communs.'
                    ],
                    [
                        'title' => 'Entraide et partage',
                        'image' => 'images/Entraide.jpeg',
                        'description' => 'Le slogan souligne l\'importance de l\'entraide et du partage des connaissances, des expériences et des ressources. Il encourage les individus à se soutenir mutuellement en offrant leur aide et en partageant leurs compétences et leurs conseils. Il met en valeur la notion « il y a plus de bonheur à donner qu’à recevoir », créant ainsi une atmosphère de confiance, de joie et de collaboration.'
                    ],
                    [
                        'title' => 'Cohésion sociale',
                        'image' => 'images/cohésion_sociale.jpeg',
                        'description' => 'Le slogan favorise la cohésion sociale en renforçant les liens entre les individus. Il crée un sentiment d\'appartenance à une communauté plus large et encourage les interactions positives. Il permet de construire des relations solides basées sur l\'entraide, la confiance et le respect mutuel.'
                    ],
                    [
                        'title' => 'Encouragement et motivation',
                        'image' => 'images/events/motivation.jpeg',
                        'description' => 'Le slogan a également une connotation encourageante et motivante. Il vise à inspirer les individus à persévérer dans leurs efforts en leur rappelant qu\'ils ont le soutien d\'une communauté unie. Il renforce la confiance en soi et la détermination en montrant que l\'on peut compter sur les autres pour atteindre les objectifs fixés.'
                    ]
                ];
                ?>

                <?php foreach ($sections as $section): ?>
                    <div class="section-item">
                        <img src="<?= $section['image'] ?>" alt="<?= $section['title'] ?>">
                        <div class="section-description">
                            <h3 style="color: #333;"><?= $section['title'] ?></h3>
                            <p style="line-height: 1.6; color: #555;">
                                <?= preg_replace('/"(.*?)"/', '<strong>"$1"</strong>', $section['description']) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>

                <script>
                    const sections = document.querySelectorAll('.section-item');

                    const observer = new IntersectionObserver(entries => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('visible');
                            } else {
                                entry.target.classList.remove('visible');
                            }

                        });
                    }, {
                        threshold: 0.1
                    });

                    sections.forEach(section => observer.observe(section));
                </script>
            </div>
        </article>
        <p>
            En résumé, le fondement de cette vision est l'amour.Nous croyons que l'amour est la plus grande force qui dirige ce monde. 
            Il crée une atmosphère positive et encourageante, tout en renforçant les liens entre les individus et en favorisant le sentiment d'appartenance à une communauté solidaire.
        </p>
    </section>
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
