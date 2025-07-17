<?php

function calculImposable($revenu, $trancheMin, $trancheMax)
{
    // var_dump("execution fonction");
    return ($revenu > $trancheMax) ? ($trancheMax - $trancheMin) : ($revenu - $trancheMin);
}

function calculImpots($revenu)
{
    $montant = 0;

    if ($revenu > 10000) {
        // 10%
        $imposable = calculImposable($revenu, 10000, 19999);
        $montant = $imposable * 0.1;
        // var_dump($montant);
    }

    if ($revenu > 20000) {
        // 18%
        $imposable = calculImposable($revenu, 20000, 34999);
        $montant += $imposable * 0.18;
        // var_dump($montant);


    }

    if ($revenu > 35000) {
        // 25%
        $imposable = calculImposable($revenu, 35000, 49999);
        $montant += $imposable * 0.25;
        // var_dump($montant);


    }

    if ($revenu > 50000) {
        // 35%
        $imposable = calculImposable($revenu, 50000, 9999999999999999999);
        $montant += $imposable * 0.35;
        // var_dump($montant);

    }

    return $montant;


}

// Calcul l’impôt si le revenu est de 16 000€

// Calcul l’impôt si le revenu est de 38 000€

// Calcul l’impôt si le revenu est de 64 000€
echo "l’impôt si le revenu est de 16 000€ et de "." ".calculImpots(16000)."euro <br>";
echo "l’impôt si le revenu est de 38 000€ et de"." ". calculImpots(38000)."euro <br>";
echo "l’impôt si le revenu est de 64 000€ et de"." ". calculImpots(64000)."euro <br>";
echo "l’impôt si le revenu est de 70 000€ et de"." ". calculImpots(70000)."euro <br>";
echo "l’impôt si le revenu est de 20 000€ et de "." ".calculImpots(20000)."euro <br>";
echo "l’impôt si le revenu est de 24 000€ et de "." ".calculImpots(24000)."euro <br>";