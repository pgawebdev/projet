<?php

// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
/*

(header)
(SECTION1)
(SECTION2)
(SECTION3)
(footer)

*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...

class Page
{
    public $header = "<body><header>(header)</header>";
    public $section;
    public $footer = "<footer>(footer)</footer></body>";

    public function ajouterContenu($contenu)
    {
         $this->section .= "<section>(".$contenu.")</section>";
    }

    public function afficherListe()
    {  
        echo $this->header.$this->section.$this->footer;
    }
}
// CODE NON MODIFIABLE
$objetPage = new Page;                     
$objetPage->ajouterContenu("SECTION1");
$objetPage->ajouterContenu("SECTION2");
$objetPage->ajouterContenu("SECTION3");
$objetPage->afficherListe();