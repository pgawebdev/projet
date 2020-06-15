<?php

// public:     ACCESSIBLE A TOUT LE MONDE (LECTURE ET ECRITURE)
// protected:  SEULEMENT ACCESSIBLE A LA CLASSE ET AUX CLASSES ENFANTS (LECTURE ET ECRITURE)
// private:    SEULEMENT ACCESSIBLE A LA CLASSE (LECTURE ET ECRITURE)

class MetierParent
{
    protected $nom      = "";

    private $pasPourLesEnfants  = "interdit aux enfants";
    private function FaireParentPrivate()
    {
        echo $this->pasPourLesEnfants;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($param)
    {
        $this->nom = $param;
    }
}

class User1
extends MetierParent //appel la class à l'interieur  d'une autre
{
    protected $adresseCabinet   = "";

    public function getAdressCabinet()
    {
        return $this->adresseCabinet;
    }

    public function setAdress($param)
    {
        $this->adresseCabinet = $param;
    }
}


class User2
extends MetierParent //appel la class à l'interieur  d'une autre
{
    protected $dateDecollage   = "";

    public function getDateDecollage()
    {
        return $this->dateDecollage;
    }

    public function setDateDecollage($param)
    {
        $this->dateDecollage = $param;
    }
}

$docteur    = new User1;
$astronaute = new User2;


// UN DONNE UN NOM A $docteur
// ON PEUT UTILISER LES METHODES DE LA CLASSE PARENTE MetierParent 
// COMME SI C'ETAIT DES METHODES DE LA CLASSE ENFANT
$docteur->setNom("francis");

$astronaute->setNom("patrick");

echo "<h3>PUBLIC ET PROTECTED</h3>";

echo $docteur->getNom();

// PAR CONTRE LE CODE EN VISIBILITE private
// N'EST PAS ACCESSIBLE AUX CLASSES ENFANTS


echo "<h3>PRIVATE</h3>";
// Notice: Undefined property: Docteur::$pasPourLesEnfants
// echo $docteur->pasPourLesEnfants;

// // Fatal error: Uncaught Error: Call to private method MetierParent::FaireParentPrivate()
// echo $docteur->FaireParentPrivate();




//LES CLASSES ABSTRAITES



abstract class MaClassAbstraite //Une méthode abstraite ne contient pas de code à exécuter.
{
    abstract public function faireTravailabstrait($param1, $param2); // Ecrire "abstract" devant class ET devant function
}

class MaClassEnfant
extends MaClassAbstraite
{
    public function faireTravailabstrait($param1, $param2)
    {
        echo "(Voici le code manquant)";
    }
}

$objet = new MaClassEnfant;

$objet->faireTravailabstrait("valeur1", "valeur2");
