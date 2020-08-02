<?php

class Model
{


    static function create($requeteSQL, $params)
    {
        try {

            $pdo = new PDO("mysql:host=remotemysql.com;dbname=rkWpTuWAEM;charset=utf8", "rkWpTuWAEM", "XvWhaSlsc5");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdostatement = $pdo->prepare($requeteSQL);
            $pdostatement->execute($params);
            $id = $pdo->lastInsertId();
            $pdo = null;
            return $id;
        } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
         
    }


    static function read($nomTable, $nomColonne, $valeurColonne)
    {
        $requeteSQL =
            <<<CODESQL
SELECT * FROM $nomTable
WHERE $nomColonne = :nomColonne;
CODESQL;

        $pdo = new PDO("mysql:host=remotemysql.com;dbname=rkWpTuWAEM;charset=utf8", "rkWpTuWAEM", "XvWhaSlsc5");
        $pdostatement = $pdo->prepare($requeteSQL);
        $pdostatement->execute(["nomColonne" => $valeurColonne]);

        $tabResult = $pdostatement->fetchAll(PDO::FETCH_ASSOC);
        return $tabResult;
    }

    static function envoyerRequeteSQL($requeteSQL, $params)
    {
        $pdo = new PDO("mysql:host=remotemysql.com;dbname=rkWpTuWAEM;charset=utf8", "rkWpTuWAEM", "XvWhaSlsc5");
        $pdostatement = $pdo->prepare($requeteSQL);
        $pdostatement->execute($params);
        return $pdostatement;
    }

    

    static function delete($nomTable,  $valeurColonne)
    {
        if (count($_REQUEST) > 0) {
            $tabAssoColonneValeur = [
                "id" => $_REQUEST["id"],
            ];

            $requeteSQL   =
<<<CODESQL
DELETE FROM $nomTable WHERE $valeurColonne = :id
CODESQL;

            $pdo = new PDO("mysql:host=remotemysql.com; dbname=rkWpTuWAEM; charset=utf8;", "rkWpTuWAEM", "XvWhaSlsc5");
            $pdoStatement = $pdo->prepare($requeteSQL);
            $pdoStatement->execute($tabAssoColonneValeur);
        }
    }
}
