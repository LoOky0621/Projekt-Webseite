<?php
// Verbindung zur Datenbank herstellen (angenommen, die Datenbankverbindung befindet sich in einer separaten Datei)
include 'db_connection.php';

// Starte die Sitzung
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


// Überprüfen, ob das Formular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten aus dem Formular abrufen
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL-Befehl zum Abrufen des Benutzers aus der Datenbank
    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";

    // Benutzer aus der Datenbank abrufen
    $result = $conn->query($sql);

    // Überprüfen, ob der Benutzer gefunden wurde
    if ($result->num_rows > 0) {
        // Benutzer erfolgreich angemeldet
        $user = $result->fetch_assoc();

        // Benutzerdaten in der Sitzung speichern
        $_SESSION['user_id'] = $user['id'];

        // Weiterleitung zur Startseite
        header("refresh:2;url=index.php");
        exit();
    } else {
        // Benutzer nicht gefunden oder falsches Passwort
        echo "Fehler bei der Anmeldung. Überprüfen Sie Ihre E-Mail und Ihr Passwort.";
        header("refresh:2;url=login.php");
    }
}

// Datenbankverbindung schließen
$conn->close();