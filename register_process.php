<?php
// Verbindung zur Datenbank herstellen (angenommen, die Datenbankverbindung befindet sich in einer separaten Datei)
include 'db_connection.php';

// Überprüfen, ob das Formular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten aus dem Formular abrufen
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nickname = $_POST['nickname'];

    // SQL-Befehl zum Einfügen eines neuen Benutzers
    $sql = "INSERT INTO login (email, password, nickname, credits) VALUES ('$email', '$password', '$nickname', 0)";

    // Versuchen, den Benutzer in die Datenbank einzufügen
    if ($conn->query($sql) === TRUE) {
        echo "Registrierung erfolgreich!";
        header("refresh:2;url=login.php");
    } else {
        echo "Fehler beim Registrieren: " . $conn->error;
        header("refresh:2;url=register.php");
    }

    // Datenbankverbindung schließen
    $conn->close();
}