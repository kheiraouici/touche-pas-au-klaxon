<?php
 require_once __DIR__ . '/../partials/navbar.php';
// Démarrer la session
session_start();

// Détruire toutes les variables de session
$_SESSION = array();

// Si tu veux détruire le cookie de session aussi
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion ou d'accueil
header("Location: login.php");
exit();

require_once __DIR__ . '/../partials/footer.php';
?>
