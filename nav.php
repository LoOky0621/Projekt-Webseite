<nav id="navigation">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="über_uns.php">Über uns</a></li>
        <li><a href="primärwaffen.php">Primärwaffen</a></li>
        <li><a href="sekundärwaffen.php">Sekundärwaffen</a></li>
        <li><a href="nachschub.php">Nachschub</a></li>
        <li><a href="gegner.php">Gegner</a></li>
        <?php
        session_start();
        if (isset($_SESSION['user_id'])) {
            include 'db_connection.php';
            $user_id = $_SESSION['user_id'];
            $sql = "SELECT credits FROM login WHERE id = $user_id";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo '<li><a href="#">Credits: ' . $row['credits'] . '</a></li>';
            }
            echo '<li><a href="logout.php">Logout</a></li>';
        } else {
            echo '<li><a href="register.php">Registrieren</a></li>';
            echo '<li><a href="login.php">Login</a></li>';
        }
        ?>
        <li><a href="kontakt.php">Kontakt</a></li>
    </ul>
</nav>