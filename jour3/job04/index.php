<?php

$str = "Dans l'espace, personne ne vous entend crier.";

$count = 0;

for ($i = 0; isset($str[$i]); $i++){

    echo $str[$i];
    $count++;
}
    echo "<br><br>" . $count . " caractères au total.";