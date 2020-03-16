<?php
//Comparer plusieur nombres et sortir le + petit

function comparer($entree1,$entree2,$entree3){
    if ($entree1 < $entree2 && $entree2 < $entree3){
        $plusPetit = $entree1;
    }
    else if($entree2 < $entree3){
        $plusPetit = $entree2 ;
    }
    else{
        $plusPetit = $entree3;
    }
    return $plusPetit;
}

$plusPetit = comparer(268,93,983);
echo "Le nombre le plus petit est $plusPetit";