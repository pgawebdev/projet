<?php


// ICI ON VA RECEVOIR LES INFOS DU NAVIGATEUR
// ENVOYEES PAR AJAX

// EN PHP
// ON DES TABLEAUX ASSOCIATIFS (CLE/VALEUR)
// EN JS
// ON A DES OBJETS (PROPRIETE/VALEUR)
// https://www.php.net/manual/fr/function.json-encode.php
class CRUD
{   
    static $tabAssoReponse = [];
    static function aiguiller()
    {
    // DEBUG
    // ON VA RENVOYER CE QU'ON RECOIT...
        CRUD::$tabAssoReponse["request"] = $_REQUEST;

        $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";

        if($identifiantFormulaire == "create"){
            CRUD::creer();
        }
        if($identifiantFormulaire == "read"){
            CRUD::lire();
        }
        if($identifiantFormulaire == "update"){
            CRUD::modifier();
        }
        if($identifiantFormulaire == "delete"){
            CRUD::supprimer();
        }
        echo json_encode(CRUD::$tabAssoReponse, JSON_PRETTY_PRINT);
    }

    static function creer()
    {
        $tabAssoColonneValeur = [
            // COLONNE SQL      HTML
            // "titre"          name="titre"
            "title"         =>  $_REQUEST["title"],
            "description"   =>  $_REQUEST["description"],
            "statut"        =>  $_REQUEST["statut"],
    
        ];
    
        $requetePrepareeSQL = 
<<<CODESQL
    
    INSERT INTO todos
    ( title, description, statut)
    VALUES
    ( :title, :description, :statut)
    
CODESQL;
    
       $pdoStatement = Model::envoyerSQL($tabAssoColonneValeur, $requetePrepareeSQL);
    
        // SECURITE: POUR SE PROTEGER CONTRE LES INJECTIONS SQL
        // POUR ENVOYER LA REQUETE
        // ON SEPARE LES INFOS DE LA REQUETE SQL PREPAREE
    
        CRUD::lire();
    }
        // ON VA FOURNIR DU JSON
        
    

    static function lire()
    {
        $tabAssoColonneValeur = [];

        $requetePrepareeSQL = 
<<<CODESQL
    
        SELECT * FROM todos
    
CODESQL;
        $pdoStatement = Model::envoyerSQL($requetePrepareeSQL, $tabAssoColonneValeur);

        
        $tabAssoLigne = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    
        CRUD::$tabAssoReponse["tableauArticle"] = $tabAssoLigne;
    }

    static function modifier()
    {
        $tabAssoColonneValeur = [
            // COLONNE SQL      HTML
            // "titre"          name="titre"
            "id"            =>  $_REQUEST["id"] ?? "",
            "title"         =>  $_REQUEST["title"] ?? "",
            "description"   =>  $_REQUEST["description"] ?? "",
            "statut"        =>  $_REQUEST["statut"] ?? "",
    
        ];
    
        $requetePrepareeSQL = 
<<<CODESQL
    
    UPDATE todos
    SET
        title       = :title,
        description = :description,
        statut      = :statut,
    WHERE id    = :id
CODESQL;
    
       $pdoStatement = Model::envoyerSQL($tabAssoColonneValeur, $requetePrepareeSQL);
    
        // SECURITE: POUR SE PROTEGER CONTRE LES INJECTIONS SQL
        // POUR ENVOYER LA REQUETE
        // ON SEPARE LES INFOS DE LA REQUETE SQL PREPAREE
        CRUD::lire();
    }

    static function supprimer()
    {

        $tabAssoColonneValeur = [
            "id"  => $_REQUEST["id"]?? "",
        ];

        $requetePrepareeSQL=
<<<CODESQL
        DELETE FROM todos
        WHERE id = :id
CODESQL;
        $pdoStatement = Model::envoyerSQL($requetePrepareeSQL, $tabAssoColonneValeur);
        CRUD::lire();
    }
}

class Model
{

    static  function envoyerSQL($requetePrepareeSQL, $tabAssoColonneValeur)
    {
    $pdo = new PDO("mysql:host=localhost;dbname=todolist;charset=utf8", "root", "");
    
    // SECURITE: POUR SE PROTEGER CONTRE LES INJECTIONS SQL
    // POUR ENVOYER LA REQUETE
    // ON SEPARE LES INFOS DE LA REQUETE SQL PREPAREE
    $pdoStatement = $pdo->prepare($requetePrepareeSQL);
    $pdoStatement->execute($tabAssoColonneValeur);

    return $pdoStatement;
    }
}


CRUD::aiguiller();