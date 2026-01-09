<?php

if(!empty($_GET)){
    echo count($_GET);
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
    <form action="" method="get">
        <input type="email" name="email" placeholder="Adresse mail">
        <input type="password" name="mdp" placeholder="Mot de passe">
        <input type="submit" value="Envoyez">
    </form>
</body>
</html>