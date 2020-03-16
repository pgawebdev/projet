<?php
 //Créer une fonction de concaténation du texte

function concatenerTexte($tabLettres){

    // $lettres= $tabLettres[0];
    // for($i=0; $i < count($tabLettres); $i++){

    //     if($i = 0){
    //         $lettres = "$tabLettres[$i]";
    //     }

    //     else if($i > 0){
    //         $lettres = ", $tabLettres[$i]";
    //     }
    // }

    // return $lettres;
    $resultat = "";
    foreach($tabLettres as $lettre);
    $resultat = $resultat.$lettre;
}



$concatenation = concatenerTexte([ 'a', 'b', 'c', 'd' ]);

echo "$concatenation";

 // RESULTAT UN TEXTE "a,b,c,d"