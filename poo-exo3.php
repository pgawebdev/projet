<?php
// AJOUTER LE CODE MANQUANT EN POO
// POUR AFFICHER
// (header)
// (LE CONTENU DE MA PAGE)
// (footer)

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...
class Page
{
    public $header = "<body><header>(header)</header>";
    public $txt;
    public $footer = "<footer>(footer)</footer></body>";

    public function setContenu($contenu)
    {
         $this->txt = $contenu;
    }

    public function afficher()
    {  
        echo $this->header."(".$this->txt.")".$this->footer;
    }
}
// CODE NON MODIFIABLE
$objetPage = new Page;                              
$objetPage->setContenu("LE CONTENU DE MA PAGE");    
$objetPage->afficher();      