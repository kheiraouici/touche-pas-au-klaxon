-- Création de la base
CREATE DATABASE IF NOT EXISTS klaxon CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE klaxon;

-- Table des agences (villes)
CREATE TABLE agences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

-- Table des utilisateurs (employés)
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telephone VARCHAR(20),
    mot_de_passe VARCHAR(255) NOT NULL,
    role ENUM('utilisateur', 'admin') DEFAULT 'utilisateur'
);

-- Table des trajets
CREATE TABLE trajets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    agence_depart_id INT NOT NULL,
    agence_arrivee_id INT NOT NULL,
    date_depart DATETIME NOT NULL,
    date_arrivee DATETIME NOT NULL,
    places_total INT NOT NULL CHECK (places_total > 0),
    places_dispo INT NOT NULL CHECK (places_dispo >= 0),
    contact_nom VARCHAR(100) NOT NULL,
    contact_email VARCHAR(100) NOT NULL,
    contact_tel VARCHAR(20),
    utilisateur_id INT NOT NULL,

    CONSTRAINT fk_agence_depart FOREIGN KEY (agence_depart_id) REFERENCES agences(id),
    CONSTRAINT fk_agence_arrivee FOREIGN KEY (agence_arrivee_id) REFERENCES agences(id),
    CONSTRAINT fk_utilisateur_trajet FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id),
    CHECK (agence_depart_id <> agence_arrivee_id),
    CHECK (date_arrivee > date_depart)
);

