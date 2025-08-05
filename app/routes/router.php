<?php
// router.php

// On récupère l'URL demandée
$request = $_SERVER['REQUEST_URI'];

// Supprimer les paramètres de requête (ex: ?id=3)
$request = parse_url($request, PHP_URL_PATH);

// Router basique
switch ($request) {
    case '/':
    case '/home':
        require __DIR__ . '/controllers/home.php';
        break;

    case '/formulaire':
        require __DIR__ . '/controllers/formulaire.php';
        break;

    case '/connexion':
        require __DIR__ . '/controllers/connexion.php';
        break;

       
    default:
        http_response_code(404);
        require __DIR__ . '/controllers/page404.php';
        break;
}
