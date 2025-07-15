<header>
  <div class="banner">
    <img src="images/champs-elysees-paris.jpg" alt="Vue des Champs-Élysées à Paris" class="banner-img" />
    <div class="overlay-content">
      <img src="images/logo_apeh.png" alt="Logo APEH" class="logo-apeh" />
      <h1 class="site-title">APEH-FRANCE</h1>
    </div>
  </div>

  <nav class="main-nav">
    <div class="dropdown">
      <button class="dropbtn" id="menuToggle">APEH-FRANCE ▼</button>
      <div class="dropdown-content" id="dropdownContent">
        <button onclick="window.location.href='index.php'" aria-label="Retourner à la page d'accueil"> ACCUEIL</button>
        <button onclick="window.location.href='about.php'" aria-label="En savoir plus sur nous">QUI SOMMES-NOUS?</button>
        <button onclick="window.location.href='slogan.php'" aria-label="Découvrir notre refrain ou slogan">NOTRE SLOGAN/NOS VALEURS</button>
        <button onclick="window.location.href='join.php'" aria-label="Pourquoi rejoindre l'APEH">POURQUOI NOUS REJOINDRE ?</button>
      </div>
    </div>

    <button onclick="window.location.href='events.php'" aria-label="Voir les événements de l'APEH">ÉVÉNEMENTS</button>
    <button onclick="window.location.href='poles.php'" aria-label="Voir les pôles et contacts de l'APEH">PÔLES ET CONTACT</button>
    <button onclick="window.location.href='register.php'" aria-label="Devenir membre de l'APEH">DEVENIR MEMBRE</button>
    <button onclick="window.location.href='donate.php'" aria-label="Faire un don à l'APEH">FAIRE UN DON</button>
    <button onclick="window.location.href='implantation.php'" aria-label="Voir l'implantation de l'APEH">IMPLANTATION</button>
    <button onclick="window.location.href='articles.php'" aria-label="Lire les articles de l'APEH">ARTICLES</button>
    <button onclick="window.location.href='status.php'" aria-label="Lire le statut de l'APEH">STATUT</button>
  </nav>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const toggleBtn = document.getElementById('menuToggle');
      const dropdown = document.getElementById('dropdownContent');

      toggleBtn.addEventListener('click', (e) => {
        e.preventDefault();
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
      });

      window.addEventListener('click', function (e) {
        if (!toggleBtn.contains(e.target) && !dropdown.contains(e.target)) {
          dropdown.style.display = 'none';
        }
      });
    });
  </script>
</header>
