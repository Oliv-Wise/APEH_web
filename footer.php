<footer>
          <div class="footer-logo" style="text-align: center; margin: 20px 0;">
              <img src="images/logo_apeh.png" alt="Logo APEH-France" style="width: 50px; height: auto; border-radius: 5px; cursor: pointer;" onclick="zoomImage(this)">
          </div>
        <div id="image-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); z-index: 1000; justify-content: center; align-items: center;">
            <span style="position: absolute; top: 10px; right: 20px; font-size: 30px; color: white; cursor: pointer;" onclick="closeModal()">×</span>
            <img id="modal-image" src="" alt="Zoomed Logo" style="max-width: 90%; max-height: 90%; border-radius: 2px;">
        </div>
  <div class="footer-links" style="margin-bottom: 100px;">
    <button onclick="window.location.href = 'index.php'" >Accueil</button>
    <button onclick="window.location.href='about.php'">Qui sommes-nous ? </button>
    <button onclick="window.location.href='register.php'">Devenir membre</button>
    <button onclick="window.location.href='poles.php'">Poles et Contact</button>
    <button onclick="window.location.href='donate.php'">Faire un don</button>
    <button onclick="window.location.href='implantation.php'">Implantation</button>
    <div style="text-align: center; margin: 10px auto;">
      <button onclick="window.location.href='https://www.facebook.com/apehfrance509/'" style="margin-right: 10px;">
        <img src="images/logo_facebook.png" alt="Logo Facebook" style="width: 50px; height: auto;">
      </button>
      <button onclick="window.location.href='https://www.instagram.com/apeh.france/?hl=am-et'">
        <img src="images/logo_insta.png" alt="Logo Instagram" style="width: 50px; height: auto;">
      </button> 
      <button onclick="window.location.href ='https://www.linkedin.com/company/association-des-%C3%A9tudiants-et-professionnels-haitiens-de-fance/'" style="margin-left: 10px;">
        <img src="images/logo_linkedin.webp" alt="Logo Linkedin" style="width: 50px; height: auto;">
      </button>

    </div>
  </div>
</div>
<div style="text-align: center;font-family: 'Luminari', 'Segoe UI';">

  <p>&copy; <?= date('Y') ?> APEH-France. Tous droits réservés.</p>
</div>
<script>
  function zoomImage(img) {
    const modal = document.getElementById('image-modal');
    const modalImage = document.getElementById('modal-image');
    modalImage.src = img.src;
    modal.style.display = 'flex';
  }

  function closeModal() {
    const modal = document.getElementById('image-modal');
    modal.style.display = 'none';
  }
</script>
</footer>
