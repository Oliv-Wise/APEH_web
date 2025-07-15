<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Association des professionnels et étudiants haïtiens en France (APEH-France).">
    <meta name="keywords" content="APEH, étudiants haïtiens, diaspora, solidarité, France, association">
    <meta name="author" content="APEH-France">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <title>Événements - APEH-France</title>
    <link rel="stylesheet" href="style.css">

</head>
<!DOCTYPE html>
<html>
<body>
    <header>
    <?php include 'header.php'; ?>
    </header>
    <div style="text-align: center;">
        <h1>Galerie des Événements</h1>
        <p>Découvrez les moments forts de nos événements passés</p>
    </div>
    <div class="container">
        <div class="gallery">
            <?php
            $imageDir = "images/events/";
            $images = glob($imageDir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            foreach ($images as $index => $image) {
                echo "<img src=\"$image\" class=\"event-photo\" onclick=\"openLightbox($index)\">";
            }
            ?>
        </div>
    </div>

    <!-- Lightbox Viewer -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
        <span class="close" onclick="closeLightbox(event)">✖</span>
        <img id="lightbox-img" src="" alt="Preview">
        <div class="nav">
            <span onclick="prevImage(event)">◀</span>
            <span onclick="nextImage(event)">▶</span>
        </div>
    </div>

    <script>
        const images = <?php echo json_encode($images); ?>;
        let currentIndex = 0;

        function openLightbox(index) {
            currentIndex = index;
            const img = document.getElementById("lightbox-img");
            img.src = images[index];
            document.getElementById("lightbox").style.display = "flex";
        }

        function closeLightbox(e) {
            if (e.target.id === "lightbox" || e.target.className === "close") {
                document.getElementById("lightbox").style.display = "none";
            }
        }

        function prevImage(e) {
            e.stopPropagation();
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            document.getElementById("lightbox-img").src = images[currentIndex];
        }

        function nextImage(e) {
            e.stopPropagation();
            currentIndex = (currentIndex + 1) % images.length;
            document.getElementById("lightbox-img").src = images[currentIndex];
        }

        document.addEventListener("keydown", (e) => {
            if (document.getElementById("lightbox").style.display === "flex") {
                if (e.key === "ArrowLeft") prevImage(e);
                if (e.key === "ArrowRight") nextImage(e);
                if (e.key === "Escape") document.getElementById("lightbox").style.display = "none";
            }
        });
    </script>
</body>
</html>
    <?php include 'footer.php'; ?>
</body>
</html>
