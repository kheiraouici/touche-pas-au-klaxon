<?php
namespace App\Models;

use PDO;
use PDOException;
use Config\Database;

/**
 * Modèle pour gérer les trajets
 */
class Trajet
{
    /**
     * Retourne la liste des trajets disponibles (places > 0, date future)
     *
     * @return array
     */
    public static function getTrajetsDisponibles()
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare("SELECT * FROM trajets WHERE places_dispo > 0 AND date_depart >= NOW() ORDER BY date_depart ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Insère un nouveau trajet dans la base
     *
     * @param array $data
     * @return bool
     */
    public static function create(array $data)
    {
        $pdo = Database::getInstance();
        $sql = "INSERT INTO trajets (agence_depart, agence_arrivee, date_depart, date_arrivee, places_total, places_dispo, contact_nom, contact_email, contact_tel)
                VALUES (:agence_depart, :agence_arrivee, :date_depart, :date_arrivee, :places_total, :places_dispo, :contact_nom, :contact_email, :contact_tel)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute($data);
    }
}