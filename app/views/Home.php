

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php require_once __DIR__ . '/partials/navbar.php'; ?>


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
        <tr>
       <td>Paris</td>
       <td>2025-08-01 08:00:00</td>
       <td>Lyon</td>
       <td>2025-08-01 12:00:00</td>
       <td>3</td>
        </tr>
      <tr>
             <td>Paris</td>
       <td>2025-08-01 08:00:00</td>
       <td>Marseille</td>
       <td>2025-08-01 12:00:00</td>
       <td>3</td>
        </tr>
        <tr>
            <td>Paris</td>
             <td>2025-08-01 08:00:00</td>
       <td>Toulouse</td>
       <td>2025-08-01 12:00:00</td>
       <td>3</td>
        </tr>
        <tr>
             <td>Paris</td>
       <td>2025-08-01 08:00:00</td>
       <td>Montpellier</td>
       <td>2025-08-01 12:00:00</td>
       <td>3</td>
        </tr>
    </tbody>
</table>
<div>
    <span>auteur :xxxxxx</span>
    <span>téléphone: xxxxxxxxxx</span>
    <span>email : xxxxxxxxx</span>
    <span>nombres total de place : xxxxx</span>
</div>
<?php require_once __DIR__ . '/partials/footer.php'; ?>

</body>
</html>
