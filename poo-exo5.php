<?php
// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
/*
(CODE DU HEADER)
(CODE DE LA SECTION1)
(CODE DE LA SECTION2)
(CODE DU FOOTER)
*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...
class PageV2
{
    public static $tab = [];

    function ajouter($tag,$contenu)
    {
        $tag= strtolower($tag);
        PageV2::$tab[$tag] = $contenu;
    }

    function afficherTab($tabCle)
    {
        foreach($tabCle as $cle){
        // echo($index/$cle);
        $valeur = PageV2::$tab[$cle];
        echo $valeur;
        }
    }

   
}
// CODE NON MODIFIABLE
$objet1 = new PageV2;
$objet1->ajouter("header", "(CODE DU HEADER)");

$objet2 = new PageV2;
$objet2->ajouter("footer", "(CODE DU FOOTER)");

$objet3 = new PageV2;
$objet3->ajouter("section1", "(CODE DE LA SECTION1)");

$objet4 = new PageV2;
$objet4->ajouter("section2", "(CODE DE LA SECTION2)");

$objet5 = new PageV2;
$objet5->afficherTab(["header", "section1", "section2", "footer"]);