<?php
//Comparer les entrées d'un tableau et sortir le nombre le + petit

// function trouverPetit($tabNb){ //Boucle for each

//     $plusPetit = $tabNb[0];

//     foreach($tabNb as $nombre){
//         if($nombre < $plusPetit ){
//             $plusPetit = $nombre;
//         }
//     }
//     return $plusPetit;
// }

// $plusPetit = trouverPetit([73, 309, 3, 338]);
// echo "Le plus petit nombre est $plusPetit";


// function trouverPetit($tabNb){ //Boucle for

//     $plusPetit = $tabNb[0];

//     for ($i=0; $i < count($tabNb);$i++){

//         if($plusPetit > $tabNb[$i]){
//             $plusPetit = $tabNb[$i];
//         }

//     } 
//     return $plusPetit;
// }
// $plusPetit = trouverPetit([73, 309, 3, 338]);
// echo "Le plus petit nombre est $plusPetit";

function trouverPetit($tabNb){ //Boucle while
    $i = 0;
    $plusPetit = $tabNb[0];

    while($i < count($tabNb)){
        if($plusPetit > $tabNb[$i]){
            $plusPetit = $tabNb[$i];
        }
        $i++;
    }
    return $plusPetit;
}

$plusPetit = trouverPetit([73, 309, 32, 338]);
echo "Le plus petit nombre est $plusPetit";