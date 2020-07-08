### EXO1

<!-- CREER UN FICHIER poo-exo1.php
POUR COMPLETER LE CODE...
(ATTENTION: VOUS NE DEVEZ PAS MODIFIER LE CODE APRES LA LIGNE "CODE NON MODIFIABLE")

``` php  -->
<?php
// AJOUTER LE CODE POUR AFFICHER coucou

// ... AJOUTER VOTRE CODE DIRECTEMENT ICI ...

class Exo1
{
    function salut(){
        echo " coucou";
    }
}
// CODE NON MODIFIABLE 
// (LAISSER CE CODE TEL QUEL SINON TU PAIES UNE AMENDE...)

$objet = new Exo1;
$objet->salut();



class Bonjour{

    static function salut(){
    echo ' coucou';
    }
}

Bonjour::salut();




class Exo1bis
{
    public function __construct()
    {
        echo " coucou";
    }
}
$objet2 = new Exo1bis;




class Bonjour2
{
    public $msg;

    public function __construct($msg = " coucou")
    {
        echo $msg;    
    }

}
$objet3 = new Bonjour2;
?>