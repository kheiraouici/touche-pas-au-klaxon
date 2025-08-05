-- ✅ Insertion des agences
INSERT INTO agences (nom) VALUES 
('Paris'), 
('Lyon'), 
('Marseille'), 
('Bordeaux'), 
('Nantes'),
('Toulouse'), 
('Nice'), 
('Montpellier'), 
('Lille'), 
('Reims'),
('Strasbourg'), 


-- ✅ Insertion des utilisateurs
-- Les mots de passe sont hashés avec password_hash en PHP (bcrypt)

-- Admin : mot de passe = admin123
INSERT INTO utilisateurs (nom, prenom, email, telephone, mot_de_passe, role) VALUES
('Alice', 'Martin', 'alice@entreprise.fr', '0601020304', 
'$2y$10$7Y6wIXZqD9sUVp.jDuhVIeXzo97xHrjA7TJ0dvBDzIcr3nClOEFAe', 'admin');

-- Utilisateur : mot de passe = user123
INSERT INTO utilisateurs (nom, prenom, email, telephone, mot_de_passe, role) VALUES
('Jean', 'Dupont', 'jean@entreprise.fr', '0602030405', 
'$2y$10$LqzR8uFVzq1WdOj/qTSkqu.GVfijL12rZfZqkXK2WyTACMGb3MGiK', 'utilisateur'),
('Martin', 'Alexandre', 'alexandre.martin@email.fr', '0612345678', '', 'utilisateur'),
('Dubois', 'Sophie', 'sophie.dubois@email.fr', '0698765432', '', 'utilisateur'),
('Bernard', 'Julien', 'julien.bernard@email.fr', '0622446688', '', 'utilisateur'),
('Moreau', 'Camille', 'camille.moreau@email.fr', '0611223344', '', 'utilisateur'),
('Lefèvre', 'Lucie', 'lucie.lefevre@email.fr', '0777889900', '', 'utilisateur'),
('Leroy', 'Thomas', 'thomas.leroy@email.fr', '0655443322', '', 'utilisateur'),
('Roux', 'Chloé', 'chloe.roux@email.fr', '0633221199', '', 'utilisateur'),
('Petit', 'Maxime', 'maxime.petit@email.fr', '0766778899', '', 'utilisateur'),
('Garnier', 'Laura', 'laura.garnier@email.fr', '0688776655', '', 'utilisateur'),
('Dupuis', 'Antoine', 'antoine.dupuis@email.fr', '0744556677', '', 'utilisateur'),
('Lefebvre', 'Emma', 'emma.lefebvre@email.fr', '0699887766', '', 'utilisateur'),
('Fontaine', 'Louis', 'louis.fontaine@email.fr', '0655667788', '', 'utilisateur'),
('Chevalier', 'Clara', 'clara.chevalier@email.fr', '0788990011', '', 'utilisateur'),
('Robin', 'Nicolas', 'nicolas.robin@email.fr', '0644332211', '', 'utilisateur'),
('Gauthier', 'Marine', 'marine.gauthier@email.fr', '0677889922', '', 'utilisateur'),
('Fournier', 'Pierre', 'pierre.fournier@email.fr', '0722334455', '', 'utilisateur'),
('Girard', 'Sarah', 'sarah.girard@email.fr', '0688665544', '', 'utilisateur'),
('Lambert', 'Hugo', 'hugo.lambert@email.fr', '0611223366', '', 'utilisateur'),
('Masson', 'Julie', 'julie.masson@email.fr', '0733445566', '', 'utilisateur'),
('Henry', 'Arthur', 'arthur.henry@email.fr', '0666554433', '', 'utilisateur');

-- ✅ Insertion d’un trajet d’exemple proposé par  Martin alexandre
-- Paris → Lyon, 4 places, 3 dispo, dans le futur

INSERT INTO trajets (
    agence_depart_id, agence_arrivee_id,
    date_depart, date_arrivee,
    places_total, places_dispo,
    contact_nom, contact_email, contact_tel,
    utilisateur_id
) VALUES 
(
    1, 2,                                -- Paris → Lyon
    '2025-08-01 08:00:00', '2025-08-01 12:00:00',
    4, 3,
    'Martin alexandre', 'alexandre.martin@email.fr', '0612345678',
    2                                   -- utilisateur_id (martin)
);
(
    1, 2,                                -- Paris → marseille
    '2025-08-01 09:00:00', '2025-08-01 13:00:00',
    4, 3,
    'Dubois Sophie', 'sophie.dubois@email.fr', '0698765432',
    2                                   -- utilisateur_id (dubois)
);
(
    1, 2,                                -- Lyon → paris
    '2025-08-04 08:00:00', '2025-08-04 12:00:00',
    4, 3,
    'Bernard Julien', 'julien.bernard@email.fr', '0622446688',
    2                                   -- utilisateur_id (bernard)
);
(
    1, 2,                                -- Paris → Lyon
    '2025-08-06 08:00:00', '2025-08-06 12:00:00',
    4, 3,
    'Moreau Camille', 'camille.moreau@email.fr', '0611223344',
    2                                   -- utilisateur_id (moreau)
);