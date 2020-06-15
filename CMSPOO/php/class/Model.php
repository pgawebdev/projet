<?php

class Model
{
    static function read ($nomTable, $nomColonne, $valeurColonne)
    {
        $requeteSQL =
<<<CODESQL
SELECT * FROM $nomTable
WHERE $nomColonne = :$nomColonne;
CODESQL;

        
        $pdo =new PDO("mysql:host=localhost;dbname=site_estelle;charset=utf8","root","");
        $pdostatement = $pdo->prepare($requeteSQL);
        $pdostatement->execute(["$nomColonne"=> $valeurColonne]);

        $tabResult = $pdostatement->fetchAll(PDO::FETCH_ASSOC);
        return $tabResult;
    }

    static function envoyerRequeteSQL($requeteSQL,$tabAssoColonneValeur)
    {
        $pdo =new PDO("mysql:host=localhost;dbname=site_estelle;charset=utf8","root","");
        $pdostatement = $pdo->prepare($requeteSQL);
        $pdostatement->execute($tabAssoColonneValeur);
        return $pdostatement;
    }
}
