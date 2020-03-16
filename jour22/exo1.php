<?php
//comparer 2 chiffres et sortir le + petit

function comparer($chiffre1,$chiffre2){
    if($chiffre1 < $chiffre2){
        $resultat = $chiffre1;
    }

    else{
        $resultat = $chiffre2;
    }
    return $resultat;
}

$resultat = comparer(40,23);
echo $resultat;

$resultat = comparer(20,33);
echo $resultat;