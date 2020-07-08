<?php

// AJOUTER LE CODE POO POUR AFFICHER
/*
(header)
(section)
(footer)
*/

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...
class Header
{
    function __construct()
    {
        return "<body><header>(header)</header>";
    }
}
class Section
{
    function __construct()
    {
        echo "<main>(section)</main>";
    }
}
class Footer
{
    function __construct()
    {
        echo "<footer>(footer)</footer></body>";
    }
}

// CODE NON MODIFIABLE 
// (LAISSER CE CODE TEL QUEL SINON TU PAIES UNE AMENDE...)
// CODE NON MODIFIABLE
$objetHeader    = new Header();
var_dump($objetHeader);
$objetSection   = new Section();
$objetFooter    = new Footer();