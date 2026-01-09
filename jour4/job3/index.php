<?php

if(!empty($_POST)){
    echo count($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Adresse mail">
        <input type="password" name="mdp" placeholder="Mot de passe">
        <input type="submit" value="Envoyez">
    </form>
</body>
</html>