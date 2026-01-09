<?php

$str = "On n'est pas le meilleur quand on le croit, mais quand on le sait.";

$dic = [
    "consonnes" => 0,

    "voyelles" => 0,

];

$consonnes = "bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ";
$voyelles = "aeiouyAEIOUY";

$count = 0;

for ($i = 0; isset($str[$i]); $i++){

    echo $str[$i];
    $count++;
}

for ($i = 0; isset($str[$i]); $i++){

    $char = $str[$i];

        for ($v = 0; isset($voyelles[$v]); $v++){
        if ($char == $voyelles[$v]){
            $dic['voyelles']++;
        }
    }
    for ($c = 0; isset($consonnes[$c]); $c++){
        if ($char == $consonnes[$c]){
            $dic['consonnes']++;
        }
    }
}
echo "<br><br>" . $count . " caractères au total.<br>". $dic['voyelles'] . " voyelles et " . $dic['consonnes'] . " consonnes.<br><br>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consonnes & Voyelles</title>
</head>
<body>
    <main>
        <table cellspacing ="20">
            <thead>
                <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $dic['voyelles']; ?></td>
                    <td><?php echo $dic['consonnes']; ?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>