<?php
$pdo = new PDO("mysql:host=localhost;dbname=todolist;charset=utf8", "root", "");

// SECURITE: POUR SE PROTEGER CONTRE LES INJECTIONS SQL
// POUR ENVOYER LA REQUETE
// ON SEPARE LES INFOS DE LA REQUETE SQL PREPAREE
$pdoStatement = $pdo->prepare($requetePrepareeSQL);
$pdoStatement->execute($tabAssoColonneValeur);

// ON VA FOURNIR DU JSON
echo json_encode($tabAssoReponse, JSON_PRETTY_PRINT);