<?php
/**
 * Classe Database pour connexion via PDO (MVC)
 */
class Database {
    private $host = "localhost";
    private $db_name = "nom_de_ta_base";
    private $username = "root";
    private $password = "";
    private $charset = "utf8mb4";
    private $conn;

    /**
     * Retourne la connexion PDO
     */
    public function getConnection() {
        $this->conn = null;

        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Gestion des erreurs
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Mode de fetch par défaut
                PDO::ATTR_EMULATE_PREPARES   => false,                  // Désactiver l'émulation
            ];
            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }

        return $this->conn;
    }
}
