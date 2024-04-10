<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Helldivers II</title>
</head>

<body>

    <?php include("header.html") ?>

    <main>

        <?php include("nav.php") ?>

        <section id="intro">
            <div class="logo-container">
                <img src="img/totenkopf.jpg" alt="Totenkopf-Symbol">
            </div>
            <div class="slider-container">
                <div class="slider">
                    <div class="slide">
                        <img src="img/jäger.png" alt="Jäger">
                        <div class="slider-text">Jäger - Beschreibungstext hier einfügen.</div>
                    </div>
                    <div class="slide">
                        <img src="img/säurespeier.png" alt="Säurespeier">
                        <div class="slider-text">Säurespeier - Beschreibungstext hier einfügen.</div>
                    </div>
                    <div class="slide">
                        <img src="img/pirscher.png" alt="Pirscher">
                        <div class="slider-text">Pirscher - Beschreibungstext hier einfügen.</div>
                    </div>
                    <div class="slide">
                        <img src="img/titan.png" alt="Titan">
                        <div class="slider-text">Titan - Beschreibungstext hier einfügen.</div>
                    </div>
                    <div class="slide">
                        <img src="img/stürmer.png" alt="Stürmer">
                        <div class="slider-text">Stürmer - Beschreibungstext hier einfügen.</div>
                    </div>
                    <div class="slide">
                        <img src="img/brut.png" alt="Brut">
                        <div class="slider-text">Brut - Beschreibungstext hier einfügen.</div>
                    </div>
                    <div class="slide">
                        <img src="img/plünderer.png" alt="Plünderer">
                        <div class="slider-text">Plünderer - Beschreibungstext hier einfügen.</div>
                    </div>
                    <div class="slide">
                        <img src="img/krieger.png" alt="Krieger">
                        <div class="slider-text">Krieger - Beschreibungstext hier einfügen.</div>
                    </div>
                </div>
                <div class="arrow prev" onclick="prevSlide()">&#10094;</div>
                <div class="arrow next" onclick="nextSlide()">&#10095;</div>
            </div>
        </section>

        <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            slideIndex = index;
            if (slideIndex < 0) {
                slideIndex = totalSlides - 1;
            } else if (slideIndex >= totalSlides) {
                slideIndex = 0;
            }
            slides.forEach((slide, i) => {
                if (i === slideIndex) {
                    slide.style.display = 'block';
                } else {
                    slide.style.display = 'none';
                }
            });
        }

        function prevSlide() {
            showSlide(slideIndex - 1);
        }

        function nextSlide() {
            showSlide(slideIndex + 1);
        }

        showSlide(slideIndex);
        </script>
    </main>

    <?php include("footer.html") ?>

</body>

</html>