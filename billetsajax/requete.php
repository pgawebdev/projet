<?php

class CRUD {

    static $tabAssoReponse = [];

    static function aiguiller()
    {
        CRUD::$tabAssoReponse["request"] = $_REQUEST;

        $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";

        if($identifiantFormulaire == "read"){
            CRUD::read();
        }
        if($identifiantFormulaire == "update"){
            CRUD::modifier();
        }

        echo json_encode(CRUD::$tabAssoReponse, JSON_PRETTY_PRINT);
    }

    static function read()
    {
        $tabAssoColonneValeur = [];

        $requetePrepareeSQL =
    <<<CODESQL
        SELECT * FROM billets
    CODESQL;

    $pdoStatement = CONNEX::envoyerSQL($requetePrepareeSQL,$tabAssoColonneValeur);
    $tabAssoLigne = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    CRUD::$tabAssoReponse["tableauArticle"] = $tabAssoLigne;

    }

    static function update()
    {
        $tabAssoColonneValeur = [
            // COLONNE SQL      HTML
            // "titre"          name="titre"
            "id"            =>  $_REQUEST["id"] ?? "",
            "valeur"         =>  $_REQUEST["valeur"] ?? "",
            "quantite"   =>  $_REQUEST["quantite"] ?? "",
        ];
    
        $requetePrepareeSQL = 
<<<CODESQL
    UPDATE billets
    SET
        valeur       = :valeur,
        quantite = :quantite,
    WHERE id    = :id
CODESQL;
    
       $pdoStatement = CONNEX::envoyerSQL($tabAssoColonneValeur, $requetePrepareeSQL);
    
        // SECURITE: POUR SE PROTEGER CONTRE LES INJECTIONS SQL
        // POUR ENVOYER LA REQUETE
        // ON SEPARE LES INFOS DE LA REQUETE SQL PREPAREE
        CRUD::read();
    } 
}

class CONNEX{
    static function envoyerSQL($requetePrepareeSQL, $tabAssoColonneValeur)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=distributeur;charset=utf8", "root", "");
        
        // SECURITE: POUR SE PROTEGER CONTRE LES INJECTIONS SQL
        // POUR ENVOYER LA REQUETE
        // ON SEPARE LES INFOS DE LA REQUETE SQL PREPAREE
        $pdoStatement = $pdo->prepare($requetePrepareeSQL);
        $pdoStatement->execute($tabAssoColonneValeur);

        return $pdoStatement;
    }
};

CRUD::aiguiller()