<?php

function primeNumber($num){
    if ($num <= 1){
        return false;
    }
    
    for ($i = 2; $i <= sqrt($num); $i++){
        if ($num % $i == 0){
            return false;
        }
    }
    
    return true;
}

echo "Nombres premiers jusqu'à 1000 :<br><br>";

$count = 0;
for ($number = 2; $number <= 1000; $number++){
    if (primeNumber($number)){
        echo $number . "<br><br>";
        $count++;
    }
}

echo "<br>Total : $count nombres premiers";