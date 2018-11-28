<?php
if (!empty($_FILES['file']['name'])) {
    $fileName = $_FILES['file']['name'];
    $type = pathinfo($fileName)['extension'];
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <h1>Bienvenue</h1>
    <h2>Voici vos informations :</h2>

    <?php

    /**
     * Récupérer la véritable adresse IP d'un visiteur
     */
    function get_ip() {
        // IP si internet partagé
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
            return $_SERVER['HTTP_USER_AGENT'];
        }
        // IP derrière un proxy
        elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        // Sinon : IP normale
        else {
            return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }
    }
    ?>
    <p><?php
    echo 'Adresse IP du visiteur : ' . get_ip();
    ?></p>

    <p><?php
        echo 'User Agent du visiteur : ' . $_SERVER['HTTP_USER_AGENT'];
    ?></p>
    <p><?php
        echo 'Nom du serveur du visiteur : ' . $_SERVER['SERVER_NAME'];
    ?></p>
</html>
