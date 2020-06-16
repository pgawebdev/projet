<?php

// CREER UNE FONCTION QUI RENVOIE LA SOMME DES NOMBRES DANS UN TABLEAU EN PARAMETRE

// function sommeTab($tab){
//     $somme= 0;
//     foreach($tab as $nombre){

//         $somme += $nombre;
//     }
//     return $somme;
// }

// $total= sommeTab([87,19,28]);
// echo "Le total est de $total.";

function sommeTab($tab){
    $somme=0;

    for($i=0; $i < count($tab); $i++){
        $somme += $tab[$i];
    }
    return $somme;
}

$total= sommeTab([86,19,28]);
 echo "Le total est de $total.";

 function sommeTab($tab)[]