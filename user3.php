<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice 4 bis</title>
    </head>
    <body>
         
    <h1>Espace abonné :</h1>
    <p>
    Bonjour !<br />
    Votre login est :  <?php echo $_GET['login']; ?> <br />Votre mot de passe est :  <?php echo $_GET['password']; ?>
        <p>
            <a href="index5.php">Modifier</a><br />
        </p> 
    </body>
</html>
