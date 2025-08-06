<?php
$prefixUrl = '/touche-pas-au-klaxon/app/views/';

use App\Controllers\AuthController;
use App\Controllers\TrajetController;

session_start();

// ✅ Récupère l’URL demandée (ex: /trajets/create)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Enlève le slash final si nécessaire
if ($uri !== '/' && str_ends_with($uri, '/')) {
    $uri = rtrim($uri, '/');
}

// ✅ ROUTING PRINCIPAL
switch ($uri) {
    case '/':
        (new TrajetController())->index();
        break;

    case '/login':
        if ($method === 'POST') {
            (new AuthController())->login();
        } else {
            (new AuthController())->showLoginForm();
        }
        break;

    case '/logout':
        (new AuthController())->logout();
        break;

    case '/trajets/create':
        (new TrajetController())->create();
        break;

    case '/trajets/store':
        if ($method === 'POST') {
            (new TrajetController())->store();
        } else {
            header("Location: /");
        }
        break;

    // 💥 Lancer le seeder depuis le navigateur (DEV uniquement)
    case '/seed':
        require_once '../database/DatabaseSeeder.php';
        echo "<p>✅ Base de données peuplée. <a href='/'>Retour</a></p>";
        break;

    default:
        http_response_code(404);
        echo "<h1>404 - Page introuvable</h1>";
        break;
}

require ("./app/views/Navbar1.php");

?>