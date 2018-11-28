<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['firstname'] = 'Marie';
$_SESSION['lastname'] = 'Nanou';
$_SESSION['age'] = 14;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bonjour</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p>
            Bonjour <?php echo $_SESSION['firstname']. ' ' . $_SESSION['lastname']; ?> <br />
            Vous êtes sur la page d'accueil.<br /> Vous voulez aller sur une autre page ?
        </p>
        <p>
            <a href="index2bis.php">Lien vers votre espace</a><br />
        </p>
    </body>
</html>