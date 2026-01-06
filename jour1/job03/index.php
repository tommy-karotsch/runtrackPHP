<?php
$float = 9.99;

$str = "Chaine de caractères";

$int = 42;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03</title>
</head>
<header>
    <table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </table>
</header>
<body>
    <main>
        <table>
            <tr>
                <td><?php echo $float;?></td>
                <td><?php echo $str;?></td>
                <td><?php echo $int;?></td>
            </tr>
        </table>
    </main>
</body>
</html>