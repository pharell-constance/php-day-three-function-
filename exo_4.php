<?php 



function calculMoyenne($prenom){
$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];



    
echo  ($classe[$prenom]["prenom"]) . " à " . ($classe[$prenom]["maths"] + $classe[$prenom]["francais"] + $classe[$prenom]["histoire"])/3 . " de moyenne";
};

calculMoyenne(1);