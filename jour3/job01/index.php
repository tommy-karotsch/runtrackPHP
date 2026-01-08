<?php

$numbers = [200, 204, 173, 98, 171, 404, 459];

for ($i = 0; $i < count($numbers); $i++){
    if ($numbers[$i] % 2 == 0){
        echo $numbers[$i] . " est paire <br><br>";
    }
    else{
        echo $numbers[$i] . " n'est pas paire <br><br>";
    }
}