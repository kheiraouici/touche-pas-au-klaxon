<?php

require_once '../config/database.php';

use Config\Database;

try {
    $pdo = Database::getInstance();

    echo "🔁 Début du seed de la base de données...\n";

    // === Agences ===
    $agences = ['Paris', 'Lyon', 'Marseille', 'Bordeaux', 'Nantes' , 'Toulouse' , 'Nice' , 'Montpellier' , 'Lille' , 'Reims' , 'Strasbourg'];
    foreach ($agences as $nom) {
        $stmt = $pdo->prepare("INSERT INTO agences (nom) VALUES (:nom)");
        $stmt->execute(['nom' => $nom]);
    }
    echo "✅ Agences insérées.\n";

    // === Utilisateurs ===
    $utilisateurs = [
        [
            'prenom' => 'Alice',
            'nom' => 'Martin',
            'email' => 'alice@entreprise.fr',
            'telephone' => '0601020304',
            'mot_de_passe' => password_hash('admin123', PASSWORD_DEFAULT),
            'role' => 'admin'
        ],
        [
            'prenom' => 'Jean',
            'nom' => 'Dupont',
            'email' => 'jean@entreprise.fr',
            'telephone' => '0602030405',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Alexandre',
            'nom' => 'Martin',
            'email' => 'alexandre.martin@email.fr',
            'telephone' => '0612345678',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => '',
            'nom' => '',
            'email' => '',
            'telephone' => '',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Sophie',
            'nom' => 'Dubois',
            'email' => 'sophie.dubois@email.fr',
            'telephone' => '0698765432',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Chloé',
            'nom' => 'Roux',
            'email' => 'chloe.roux@email.fr',
            'telephone' => '0633221199',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Julien',
            'nom' => 'Bernard',
            'email' => 'julien.bernard@email.fr',
            'telephone' => '0622446688',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Camille',
            'nom' => 'Moreau',
            'email' => 'camille.moreau@email.fr',
            'telephone' => '0611223344',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Lucie',
            'nom' => 'Lefèvre',
            'email' => 'lucie.lefevre@email.fr',
            'telephone' => '0777889900',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Thomas',
            'nom' => 'Leroy',
            'email' => 'thomas.leroy@email.fr',
            'telephone' => '0655443322',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => '',
            'nom' => '',
            'email' => '',
            'telephone' => '',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Maxime',
            'nom' => 'Petit',
            'email' => 'maxime.petit@email.fr',
            'telephone' => '0766778899',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Laura',
            'nom' => 'Garnier',
            'email' => 'laura.garnier@email.fr',
            'telephone' => '0688776655',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utlisateur'
        ],
        [
            'prenom' => 'Antoine',
            'nom' => 'Dupuis',
            'email' => 'antoine.dupuis@email.fr',
            'telephone' => '0744556677',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
         [
            'prenom' => 'Emma',
            'nom' => 'Lefebvre',
            'email' => 'emma.lefebvre@email.fr',
            'telephone' => '0699887766',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Louis',
            'nom' => 'Fontaine',
            'email' => 'louis.fontaine@email.fr',
            'telephone' => '0655667788',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Clara',
            'nom' => 'Chevalier',
            'email' => 'clara.chevalier@email.fr',
            'telephone' => '0788990011',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
       
        [
            'prenom' => 'Nicolas',
            'nom' => 'Robin',
            'email' => 'nicolas.robin@email.fr',
            'telephone' => '0644332211',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Pierre',
            'nom' => 'Fournier',
            'email' => 'pierre.fournier@email.fr',
            'telephone' => '0722334455',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Marine',
            'nom' => 'Gauthier',
            'email' => 'marine.gauthier@email.fr',
            'telephone' => '0677889922',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Sarah',
            'nom' => 'Girard',
            'email' => 'sarah.girard@email.fr',
            'telephone' => '0688665544',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Hugo',
            'nom' => 'Lambert',
            'email' => 'hugo.lambert@email.fr',
            'telephone' => '0611223366',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Julie',
            'nom' => 'Masson',
            'email' => 'julie.masson@email.fr',
            'telephone' => '0733445566',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utilisateur'
        ],
        [
            'prenom' => 'Arthur',
            'nom' => 'Henry',
            'email' => 'arthur.henry@email.fr',
            'telephone' => '0666554433',
            'mot_de_passe' => password_hash('user123', PASSWORD_DEFAULT),
            'role' => 'utlisateur'
        ]
       
    ];

    foreach ($utilisateurs as $user) {
        $stmt = $pdo->prepare("
            INSERT INTO utilisateurs (prenom, nom, email, telephone, mot_de_passe, role)
            VALUES (:prenom, :nom, :email, :telephone, :mot_de_passe, :role)
        ");
        $stmt->execute($user);
    }
    echo "✅ Utilisateurs insérés.\n";

    // === Trajet exemple (Jean Dupont, id = 2) ===
    $stmt = $pdo->prepare("
        INSERT INTO trajets (
            agence_depart_id, agence_arrivee_id,
            date_depart, date_arrivee,
            places_total, places_dispo,
            contact_nom, contact_email, contact_tel,
            utilisateur_id
        ) VALUES (
            :depart_id, :arrivee_id, :date_depart, :date_arrivee,
            :places_total, :places_dispo,
            :contact_nom, :contact_email, :contact_tel,
            :utilisateur_id
        )
    ");

    $stmt->execute([
        'depart_id' => 1,  // Paris
        'arrivee_id' => 2, // Lyon
        'date_depart' => '2025-08-01 08:00:00',
        'date_arrivee' => '2025-08-01 12:00:00',
        'places_total' => 4,
        'places_dispo' => 3,
        'contact_nom' => 'Martin alexandre',
        'contact_email' => 'alexandre.martin@email.fr',
        'contact_tel' => '0612345678',
        'utilisateur_id' => 2
    ]);
    $stmt->execute([
        'depart_id' => 1,  // Paris
        'arrivee_id' => 2, // Marseille
        'date_depart' => '2025-08-01 08:00:00',
        'date_arrivee' => '2025-08-01 12:00:00',
        'places_total' => 4,
        'places_dispo' => 3,
        'contact_nom' => 'Dubois Sophie',
        'contact_email' => 'sophie.dubois@email.fr',
        'contact_tel' => '0698765432',
        'utilisateur_id' => 2
    ]);$stmt->execute([
        'depart_id' => 1,  // Paris
        'arrivee_id' => 2, // Toulouse
        'date_depart' => '2025-08-01 08:00:00',
        'date_arrivee' => '2025-08-01 12:00:00',
        'places_total' => 4,
        'places_dispo' => 3,
        'contact_nom' => 'Bernard Julien',
        'contact_email' => 'julien.bernard@email.fr',
        'contact_tel' => '0622446688',
        'utilisateur_id' => 2
    ]);
        $stmt->execute([
        'depart_id' => 1,  // Paris
        'arrivee_id' => 2, // Montpellier
        'date_depart' => '2025-08-01 08:00:00',
        'date_arrivee' => '2025-08-01 12:00:00',
        'places_total' => 4,
        'places_dispo' => 3,
        'contact_nom' => 'Lefèvre Lucie',
        'contact_email' => 'lucie.lefevre@email.fr',
        'contact_tel' => '0777889900',
        'utilisateur_id' => 2
    ]);


    echo "✅ Trajet inséré.\n";
    echo "🎉 Seed terminé avec succès.\n";

} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}
