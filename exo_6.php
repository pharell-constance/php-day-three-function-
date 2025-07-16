<?php 

function mult($number){
    for ($i = 1; $i <= 10; $i++){
        echo "<br>".$number. " x " . $i . " = " .$number * $i;
    }
};

mult(10);