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

            <section>
                <div>
                    <h1>Login</h1>
                    <div class="logo-container">
                        <img src="img/login.png" alt="Totenkopf-Symbol" width="20%" algin="zenter">
                    </div>
                    <br>
                </div>
                <form id="contact-form" action="login.php" method="POST">
                    <label for="email">E-Mail:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="password">Passwort:</label><br>
                    <input type="password" id="password" name="password" required><br>
                    <input type="submit" value="Anmelden">
                </form>
                <?php include("login_process.php") ?>
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