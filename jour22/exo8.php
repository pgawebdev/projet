<?php
 //Créer une fonction de concaténation du texte

// function concatenerTexte($tabLettres){ //On pass en fonction un tableau ^^
    
//     $resultat = "";

//     foreach($tabLettres as $indice => $lettre){

//         if($indice > 0){
//             $resultat = "$resultat,"."$lettre"; 
//         }
//         else{
//             $resultat = "$resultat"."$lettre";
//         }
//     };

//     return $resultat;

// }



// $concatenation = concatenerTexte([ 'a', 'b', 'c', 'd' ]);

// echo "$concatenation"; 


///////////////////////////////

function concatenerTexte($tabLettres)
{

    $lettres = $tabLettres[0];
    for($i=0; $i < count($tabLettres); $i++)
    {
    if($i > 0)
        {
            $lettres = "$lettres, "."$tabLettres[$i]";
        }
    };

    return $lettres;
}

$concatenation = concatenerTexte([ 'a', 'b', 'c', 'd' ]);
echo "$concatenation";