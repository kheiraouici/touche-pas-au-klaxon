<?php
  require ('../navbar2.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un trajet - Touche pas au Klaxon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Créer un nouveau trajet</h2>
    <form action="/trajets/store" method="POST">
        <!-- Infos utilisateur affichées mais non modifiables -->
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($user['nom']) ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($user['prenom']) ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Téléphone</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($user['telephone']) ?>" disabled>
        </div>

        <!-- Champs trajet -->
        <div class="mb-3">
            <label for="agence_depart" class="form-label">Agence de départ</label>
            <select name="agence_depart" class="form-select" required>
                <?php foreach ($agences as $agence): ?>
                    <option value="<?= $agence['id'] ?>"><?= htmlspecialchars($agence['nom']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="agence_arrivee" class="form-label">Agence d’arrivée</label>
            <select name="agence_arrivee" class="form-select" required>
                <?php foreach ($agences as $agence): ?>
                    <option value="<?= $agence['id'] ?>"><?= htmlspecialchars($agence['nom']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Date de départ</label>
            <input type="datetime-local" class="form-control" name="date_depart" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Date d’arrivée</label>
            <input type="datetime-local" class="form-control" name="date_arrivee" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre total de places</label>
            <input type="number" class="form-control" name="places_total" min="1" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre de places disponibles</label>
            <input type="number" class="form-control" name="places_dispo" min="0" required>
        </div>

        <!-- Champs cachés pour contact -->
        <input type="hidden" name="contact_nom" value="<?= htmlspecialchars($user['nom'] . ' ' . $user['prenom']) ?>">
        <input type="hidden" name="contact_email" value="<?= htmlspecialchars($user['email']) ?>">
        <input type="hidden" name="contact_tel" value="<?= htmlspecialchars($user['telephone']) ?>">

        <a href="../connexion.php"><button type="submit" class="btn btn-success w-100">Créer le trajet</button></a>
    </form>
</div>

</body>
</html>
<?php
require ('../footer.php')
?>
