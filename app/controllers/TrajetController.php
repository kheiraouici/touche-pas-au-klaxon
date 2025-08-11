<?php
namespace App\Controllers;

use App\Models\Trajet;

/**
 * Contrôleur pour la gestion des trajets
 */
class TrajetController
{
    /**
     * Affiche la liste des trajets disponibles (page d'accueil)
     */
    public function index()
    {
        $trajets = Trajet::getTrajetsDisponibles();
        require_once '../app/Views/trajets/index.php';
    }

    /**
     * Affiche le formulaire de création de trajet
     */
    public function create()
    {
        $agences = Agence::getAll();
    $user = $_SESSION['user'];
        require_once '../app/Views/trajets/create.php';
    }

    /**
     * Enregistre un nouveau trajet en base de données
     */
    public function store()
    {
        // Exemple de récupération des données POST
        $data = [
            'agence_depart'     => $_POST['agence_depart'],
            'agence_arrivee'    => $_POST['agence_arrivee'],
            'date_depart'       => $_POST['date_depart'],
            'date_arrivee'      => $_POST['date_arrivee'],
            'places_total'      => $_POST['places_total'],
            'places_dispo'      => $_POST['places_dispo'],
            'contact_nom'       => $_POST['contact_nom'],
            'contact_email'     => $_POST['contact_email'],
            'contact_tel'       => $_POST['contact_tel'],
        ];

        Trajet::create($data);
        header("Location: /"); // Redirection vers l'accueil
        exit;
    }
}
