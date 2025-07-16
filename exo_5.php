<?php 
 
 function pairImpair($number1, $number2) {

    $nombre = ($number1 % 2 == 0) ? 'pair' : 'impair';
    for ($i = $number1; $i <= $number2; $i++) {
        if ($nombre == 'pair' && $i % 2 == 0) {
            echo $i . " ";
        } elseif ($nombre == 'impair' && $i % 2 != 0) {
            echo $i . " ";
        }
    }
    echo "<br>";
 }

pairImpair(8, 99); 


pairImpair(59, 169); 