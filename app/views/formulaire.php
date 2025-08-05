<?php 
require ('./Navbar1.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="./auth/login.php" method="get">
            <fieldset>
                <legend>
                    saisissez votre mot de passe
                </legend>
                <br><label for="name">nom</label><br>
                <input type="text" name="name" id="name"><br>

                <label for="password">mot de passe</label><br>
                <input type="password" name="password" id="password"><br><br>
                <input type="submit" value="soumettre">
            </fieldset>
        </form>
    </main>
</body>
</html>