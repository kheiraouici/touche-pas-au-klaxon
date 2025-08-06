<?php
require ('../navbar1.php')
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des trajets</title>
</head>
<body>
    <h1>Trajets disponibles</h1>
    <ul>
        <?php foreach ($trajets as $trajet): ?>
            <li>
                <?= htmlspecialchars($trajet['agence_depart']) ?> → <?= htmlspecialchars($trajet['agence_arrivee']) ?> 
                (<?= $trajet['places_dispo'] ?> places disponibles)
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

<?php
require ('../footer.php')
?>