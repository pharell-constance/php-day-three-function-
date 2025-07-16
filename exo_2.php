<?php

function afficherEtoile($nbr){
for ($i = 1; $i <= $nbr; $i++) {
    echo "*";
}
echo "<br>";
};

for ($j = 1; $j <= 11; $j++) {
    afficherEtoile($j);
}