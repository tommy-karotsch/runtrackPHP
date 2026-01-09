<?php

if(!empty($_GET)){
    $nombre = $_GET['nombre'];

    if ($nombre % 2 == 0){
        echo 'Le nombre ' . $nombre . ' est pair';
    } else {
        echo 'Le nombre ' . $nombre . ' est impair';
    }
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
    <form action="" method = "get">
        <input type="number" name="nombre">
        <input type="submit" value="Envoyez">
    </form>
</body>
</html>