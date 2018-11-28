<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Votre page</title>
    </head>
    <body>
        <p>Bienvenue sur votre page</p>
        <p>
            Vous êtes :  <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?> <br />
            Vous avez :  <?php echo $_SESSION['age']; ?>
            
        </p>
        <p>
            <a href="index2.php">Retour vers la page d'accueil</a><br />
        </p>
    </body>
</html>