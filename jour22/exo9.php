<?php

function calculerPrixTotal($tabQuantite, $tabPrixUnitaire)
{   
    $total = 0;

    for($i=0; $i < count($tabPrixUnitaire); $i++)
    {


           $qt =$tabQuantite[$i];

           $px = $tabPrixUnitaire[$i];

           $sousTotal = $qt * $px ;

           $total = $sousTotal + $total;
       
    }
     return $total;
}


$panier = [ 1,  2,  3,  4 ];
$prix   = [ 10, 20, 30, 40 ];

$prixPanier = calculerPrixTotal($panier, $prix);

echo 'Le prix du panier est de ' . $prixPanier ;

?>