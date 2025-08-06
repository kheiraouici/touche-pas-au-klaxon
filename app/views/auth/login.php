<?php
require ("../navbar1.php") ;

if(isset($_GET["name"]) && !empty($_GET["name"])){
    $name = $_GET["name"];
}
if (isset($_GET["keypass"]) && !empty($_Get["keypass"])){
    $keypass = $_GET["keypass"];
}
echo ("bonjour $name , nous avons bien reçu votrr mot de passe $keypass");

?>
<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>Agence de départ</th>
            <th>Date de départ</th>
            <th>Agence d'arrivée</th>
            <th>Date d'arrivée</th>
            <th>Places disponibles</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($trajets as $trajet): ?>
            <tr>
                <td><?= htmlspecialchars($trajet['ville_depart']) ?></td>
                <td><?= date("d/m/Y H:i", strtotime($trajet['date_depart'])) ?></td>
                <td><?= htmlspecialchars($trajet['ville_arrivee']) ?></td>
                <td><?= date("d/m/Y H:i", strtotime($trajet['date_arrivee'])) ?></td>
                <td><?= intval($trajet['places_disponibles']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
require ('../footer.php')
?>