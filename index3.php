<?php
function text() {
    if (empty($_POST['login']) || empty($_POST['password'])) {
            return 'veuillez remplir les champs';
    } else {
        setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
        setcookie('password', $_POST['password'], time() + 365*24*3600, null, null, false, true);
        return 'Bonjour ';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice 3</title>
    </head>
    <body>
    <h1>Espace abonné :</h1>
    <p><?= text(); ?></p>
    <form action="" method="POST">
        <p><label for=" login">Votre login : </label><input type="text" name="login"/></p>
        <p><label for="password">Votre mot de passe : </label><input type="password" name="password"/></p>
        <p><input type="submit" value="envoyer"></p>
    </form>        
    </body>
</html>
