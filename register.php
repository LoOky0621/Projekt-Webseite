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
                    <h1>Registrierung</h1>
                    <div class="logo-container">
                        <img src="img/regi.png" alt="Totenkopf-Symbol" width="20%" algin="zenter">
                    </div>
                    <br>
                </div>
                <form id="contact-form" action="register.php" method="POST">
                    <label for="email">E-Mail:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="password">Passwort:</label><br>
                    <input type="password" id="password" name="password" required><br>
                    <label for="nickname">Nickname:</label><br>
                    <input type="text" id="nickname" name="nickname" required><br>
                    <input type="submit" value="Registrieren">
                </form>
            </section>
            <?php include("register_process.php") ?>
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