<?php

for ($i = 0; $i <= 100; $i++){
    if ($i <= 20){
        echo "<em>".$i."</em><br><br>";
        continue;
    }
    elseif ($i == 42){
        echo "La Plateforme_ <br><br>";
        continue;
    }
    elseif ($i > 24 && $i <= 50){
        echo "<u>".$i."</u><br><br>";
        continue;
    }
    echo $i."<br><br>";
}
