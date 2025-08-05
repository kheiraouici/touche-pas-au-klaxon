<?php

class TrajetModel {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=covoiturage", "root", "");
    }

    public function getTrajetsDisponibles() {
        $stmt = $this->pdo->prepare("
            SELECT * FROM trajets 
            WHERE places_disponibles > 0 
              AND date_depart > NOW()
            ORDER BY date_depart ASC
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
