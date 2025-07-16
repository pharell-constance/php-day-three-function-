<?php

function calculImpot($revenu){
    if ($revenu >9999 && $revenu < 20000){
        echo ($revenu - 10000) * 0.10;
    }   else if ($revenu >20000 && $revenu < 35000){
        echo ($revenu - 20000) * 0.18;
    }   else if ($revenu >35000 && $revenu < 49999){
        echo ($revenu - 35000) * 0.25;
    }   else if ($revenu > 50000){
        echo ($revenu - 50000)* 0.35;
    }   else {
        echo "0 %";
    }
}

calculImpot(64000);