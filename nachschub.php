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
            <img src="img/nachschub.png" alt="Totenkopf-Symbol" width="100%">
            <div class="logo-container">
                <img src="img/totenkopf.jpg" alt="Totenkopf-Symbol">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Waffe</th>
                        <th>Art</th>
                        <th>Freischaltung</th>
                        <?php
                        // Überprüfen, ob der Benutzer eingeloggt ist
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }

                        if (isset($_SESSION['user_id'])) {
                            echo "<th>Kosten</th>";
                            echo "<th>Im Besitz</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Verbindung zur Datenbank herstellen
                    include 'db_connection.php';

                    // SQL-Befehl zum Abrufen der Nachschubwaffen aus der Datenbank
                    $sql = "SELECT waffe, art, freischaltung, kosten";
                    if (isset($_SESSION['user_id'])) {
                        // Wenn der Benutzer eingeloggt ist, füge die Spalte Kosten hinzu
                        $sql .= ", ln.besitz";
                    }
                    $sql .= " FROM nachschub";

                    // Wenn der Benutzer eingeloggt ist, füge die Kreuztabelle hinzu
                    if (isset($_SESSION['user_id'])) {
                        $sql .= " LEFT JOIN login_nachschub ln ON nachschub.id = ln.id AND ln.login_id = " . $_SESSION['user_id'];
                    }

                    // Abfrage ausführen
                    $result = $conn->query($sql);

                    // Überprüfen, ob Daten vorhanden sind
                    if ($result->num_rows > 0) {
                        // Daten ausgeben
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['waffe'] . "</td>";
                            echo "<td>" . $row['art'] . "</td>";
                            echo "<td>" . $row['freischaltung'] . "</td>";
                            // Wenn der Benutzer eingeloggt ist, füge die Kosten hinzu
                            if (isset($_SESSION['user_id'])) {
                                echo "<td>" . $row['kosten'] . "</td>";
                                echo "<td>" . ($row['besitz'] ?? 'Nein') . "</td>";
                            }
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>Keine Daten gefunden</td></tr>";
                    }

                    // Datenbankverbindung schließen
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <?php include("footer.html") ?>

</body>

</html>