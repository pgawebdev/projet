<?php
//CREER UNE FONCTION QUI RENVOIE LA SURFACE DES 4 MURS SI ON DONNE EN PARAMETRES: HAUTEUR, LARGEUR ET LONGUEUR

function surfaceMurale($hauteur,$longueur,$largeur){

    $metreCarre= 2*(($hauteur*$longueur)+($hauteur*$largeur));
    return $metreCarre;
}

$final= surfaceMurale(3,9,6);
echo "Votre surface murale est de {$final}m2";