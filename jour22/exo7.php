<?php
//Compter le nombre de nombres pairs dans un tableau

function compterPair($tabNombres) //On déclare la fonction et on donne comme paramètre un tableau
{
    $resultat = 0; //On déclare la variable de résultat et on donne une valeur par défaut de 0

    foreach($tabNombres as $nombre) //On crée une boucle qui
    {
        if (($nombre % 2) == 0){
            // $resultat ++;
            $resultat += 1;
        }
    }
    return $resultat;
}

$resultat = compterPair([0,1,9,8,6,12]);
echo "Le tableau contient $resultat nombres pairs";
