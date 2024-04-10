<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Helldivers II</title>
    <style>

    </style>
</head>

<body>

    <?php include("header.html") ?>

    <main>

        <?php include("nav.php") ?>

        <section id="intro">

            <section>
                <div>
                    <h1>Kontaktieren Sie uns</h1>
                    <div class="logo-container">
                        <img src="img//kontakt.png" alt="Totenkopf-Symbol" width="20%" algin="zenter">
                    </div>
                    <br>
                </div>
                <form id="contact-form">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" placeholder="Max Mustermann" required><br>
                    <label for="email">E-Mail:</label><br>
                    <input type="email" id="email" name="email" placeholder="max.mustermann@example.com" required><br>
                    <label for="message">Nachricht:</label><br>
                    <textarea id="message" name="message" rows="4" placeholder="Ihre Nachricht..."
                        required></textarea><br>
                    <button type="submit">Senden</button><br>
                </form>
            </section>
        </section>
    </main>
    <?php include("footer.html") ?>

    <script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        var inputs = this.querySelectorAll('input, textarea');
        for (var i = 0; i < inputs.length; i++) {
            if (!inputs[i].value.trim()) {
                inputs[i].classList.add('invalid');
                event.preventDefault();
            } else {
                inputs[i].classList.remove('invalid');
                inputs[i].classList.add('valid');
            }
        }
    });
    </script>
</body>

</html>