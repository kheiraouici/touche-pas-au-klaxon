


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des trajets</title>
</head>
<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <h1>Trajets disponibles</h1>
    <ul>
        <?php foreach ($trajets as $trajet): ?>
            <li>
                <?= htmlspecialchars($trajet['agence_depart']) ?> → <?= htmlspecialchars($trajet['agence_arrivee']) ?> 
                (<?= $trajet['places_dispo'] ?> places disponibles)
            </li>
        <?php endforeach; ?>
    </ul>
    <?php require_once __DIR__ . '/../partials/footer.php'; ?>


</body>
</html>

