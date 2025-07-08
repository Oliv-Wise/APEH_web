<header>
    <nav>
        <style>
            button {
            background-color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            }

            button:hover {
            background-color: red;
            color: white;
            }

            .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            }

            @media (min-width: 769px) {
            .dropdown:hover .dropdown-content {
              display: block;
              }
            }


            .dropdown-content button {
            display: block;
            width: 100%;
            text-align: left;
            }

      @media (max-width: 768px) {
      .nav-buttons {
        display: none;
        flex-direction: column;
        width: 100%;
        background-color: white;
        margin-top: 10px;
      }

      .nav-buttons.active {
        display: flex;
      }

      .burger {
        display: flex;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

        }

        .accessibility-tools {
    position: fixed;
    top: 10px;
    right: 10px;
    z-index: 9999;
    background: #fff;
    padding: 8px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.accessibility-tools button {
    font-size: 1em;
    margin: 0 4px;
    padding: 6px 10px;
    border: none;
    background-color: #007BFF;
    color: white;
    border-radius: 4px;
    cursor: pointer;
}

.accessibility-tools button:hover {
    background-color: #0056b3;
}
</style>
<script>
    let currentFontSize = 100;

    function increaseFontSize() {
        if (currentFontSize < 150) {
            currentFontSize += 10;
            document.body.style.fontSize = currentFontSize + '%';
        }
    }
    function decreaseFontSize() {
        if (currentFontSize > 70) {
            currentFontSize -= 10;
            document.body.style.fontSize = currentFontSize + '%';
        }
    }
    function resetFontSize() {
        currentFontSize = 100;
        document.body.style.fontSize = '100%';
    }
</script>

    

    <div class="accessibility-tools">
    <button onclick="increaseFontSize()">A+</button>
    <button onclick="decreaseFontSize()">A-</button>
    <button onclick="resetFontSize()">A</button>
    </div>

  <div class="dropdown">
    <button class="dropbtn" id="menuToggle">APEH-FRANCE ▼</button>
    <div class="dropdown-content" id="dropdownContent">
        <button onclick="window.location.href='about.php'" aria-label="En savoir plus sur nous">QUI SOMMES-NOUS ?</button>
        <button onclick="window.location.href='slogan.php'" aria-label="Découvrir notre refrain ou slogan">NOTRE REFRAIN / SLOGAN</button>
        <button onclick="window.location.href='values.php'" aria-label="Découvrir nos valeurs">NOS VALEURS</button>
        <button onclick="window.location.href='join.php'" aria-label="Pourquoi rejoindre l'APEH">POURQUOI NOUS REJOINDRE ?</button>
        <button onclick="window.location.href='index.php'" aria-label="Retourner à la page d'accueil">RETOUR A L'ACCUEIL</button>
    </div>
  </div>

        </div>
        <button onclick="window.location.href='events.php'" aria-label="Voir les événements de l'APEH">EVENEMENTS</button>
        <button onclick="window.location.href='achievements.php'" aria-label="Voir les réalisations de l'APEH">REALISATIONS</button>
        <button onclick="window.location.href='fields.php'" aria-label="Voir les champs d'activités de l'APEH">CHAMPS D'ACTIVITES</button>
        <button onclick="window.location.href='poles.php'" aria-label="Voir les pôles et contacts de l'APEH">POLES ET CONTACT</button>
        <button onclick="window.location.href='register.php'" aria-label="Devenir membre de l'APEH">DEVENIR MEMBRE</button>
        <button onclick="window.location.href='donate.php'" aria-label="Faire un don à l'APEH">FAIRE UN DON</button>
        <button onclick="window.location.href='implantation.php'" aria-label="Voir l'implantation de l'APEH">IMPLANTATION</button>
        <button onclick="window.location.href='articles.php'" aria-label="Lire les articles de l'APEH">ARTICLES</button>
    </nav>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('menuToggle');
    const dropdown = document.getElementById('dropdownContent');

    toggleBtn.addEventListener('click', (e) => {
      e.preventDefault(); // Empêche la redirection
      dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Pour fermer si on clique ailleurs
    window.addEventListener('click', function(e) {
          if (!toggleBtn.contains(e.target) && !dropdown.contains(e.target)) {
              dropdown.style.display = 'none';
          }
        });
    });
    </script>
</header>
