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
<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Association des professionnels et étudiants haïtiens en France (APEH-France).">
<meta name="keywords" content="APEH, étudiants haïtiens, diaspora, solidarité, France, association">
<meta name="author" content="APEH-France">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - APEH-France</title>
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
        <h1>Devenir membre de l' APEH-France</h1>
        <?php include 'header.php'; ?>
    </header>
    <main class="container">
    <h2>Formulaire d'inscription</h2>
    <p> Merci de remplir ce formulaire </p>

    <!-- PDF de la charte -->
    <div class="form-group">
        <label for="charte">Charte de l'association :</label>
        <iframe src="./docs/REGLEMENT INTERIEUR _APEH1.pdf" width="100%" height="400px" style="border: 1px solid #ccc;"></iframe>
    </div>

    <form action="register_process.php" method="post" class="styled-form" id="registration-form">
        <div class="form-group">
            <label for="lastname">Nom <span style="color: red;">*</span></label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="form-group">
            <label for="firstname">Prénom <span style="color: red;">*</span></label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="email">Email <span style="color: red;">*</span></label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone <span style="color: red;">*</span></label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="city">Adresse postale complète<span style="color: red;">*</span></label>
            <input type="text" id="adresse" name="adresse" required>
        </div>
        <div class="form-group">
            <label for="status">Statut <span style="color: red;">*</span></label>
            <select id="status" name="status" required>
                <option value="">--Choisir--</option>
                <option value="étudiant">Etudiant</option>
                <option value="professionnel">Professionnel</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <div class="form-group" id="custom-status-group" style="display: none;">
            <label for="custom_status">Veuillez préciser votre statut <span style="color: red;">*</span></label>
            <input type="text" id="custom_status" name="custom_status">
        </div>
        <div class="form-group">
            <label for="contact">Personne à contacter en Haïti (pays origine) <span style="color: red;">*</span></label>
            <input type="text" id="contact" name="contact" required>
        </div>
        <div class="form-group">
            <label for="contact_phone">Téléphone de la personne à contacter en Haïti <span style="color: red;">*</span></label>
            <input type="tel" id="contact_phone" name="contact_phone" required>
        </div>
        <div class="form-group">
            <label for="domain">Domaine d'études ou d'activités <span style="color: red;">*</span></label>
            <input type="text" id="domain" name="domain" required>
        </div>

        <!-- Acceptation de la charte -->
        <div class="form-group">
            <label><input type="checkbox" id="accept-charte"> J'accepte les termes et conditions de la charte de l'association</label>
        </div>

        <div class="form-group">
        <label>
        <input type="checkbox" id="accept-rgpd" name="accept_rgpd" required>
        J’accepte que mes données soient utilisées pour l’organisation interne de l’APEH-France conformément à la 
        <a href="politique_confidentialite.php" target="_blank">politique de confidentialité</a>.
        </label>
        </div>
        <div class="form-group">
            <button type="submit" class="submit-button" id="submit-button" disabled style="background-color: darkred;">S'inscrire</button>
        </div>
    </form>
    <script>
    const statusSelect = document.getElementById('status');
    const customStatusGroup = document.getElementById('custom-status-group');
    const customStatusInput = document.getElementById('custom_status');

    statusSelect.addEventListener('change', () => {
        if (statusSelect.value === 'autre') {
            customStatusGroup.style.display = 'block';
            customStatusInput.setAttribute('required', 'required');
        } else {
            customStatusGroup.style.display = 'none';
            customStatusInput.removeAttribute('required');
        }
    });

    const charteCheckbox = document.getElementById('accept-charte');
    const rgpdCheckbox = document.getElementById('accept-rgpd');
    const submitBtn = document.getElementById('submit-button');

    function updateSubmitState() {
        const allChecked = charteCheckbox.checked && rgpdCheckbox.checked;
        submitBtn.disabled = !allChecked;
        submitBtn.style.backgroundColor = allChecked ? 'green' : 'darkred';
    }

    charteCheckbox.addEventListener('change', updateSubmitState);
    rgpdCheckbox.addEventListener('change', updateSubmitState);
</script>

</main>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }
        h2 {
            color: #444;
            text-align: center;
            margin-top: 0;
            position: relative;
            z-index: 1;
        }
        .container {
        max-width: 960px;
        margin: 2rem auto;
        padding: 2rem;
        background-color: #ffffffee;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(186, 53, 53, 0.88);
        }
        main.container h2{
            font-family: 'Georgia', serif;
            font-size: 2em;
            color:rgb(29, 54, 80);
            margin-bottom: 1rem;
}
        p {
            text-align: center;
            line-height: 1.6;
        }

        .styled-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        input, select {
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        input:focus, select:focus {
            border-color: #007bff;
            outline: none;
        }

        .submit-button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        * {
        box-sizing: border-box;
        }

        body {
        word-wrap: break-word;
        overflow-wrap: break-word;
        }
        </style>
    <?php include 'footer.php'; ?>
</body>
</html>
