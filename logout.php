<?php
// Starte die Session
session_start();

// Lösche alle Session-Variablen
$_SESSION = array();

// Lösche die Session-Cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Zerstöre die Session
session_destroy();

// Weiterleitung zur Login-Seite
header("Location: login.php");
exit();