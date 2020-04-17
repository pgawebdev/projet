<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour47;charset=utf8;", "root", "");

//on envoie la requete préparée, pdoStatement est un container qui englobe les résultats de la requête SQL 
$pdoStatement = $pdo->prepare($sql);

//on fournit les données extérieurs à part 
$pdoStatement->execute($jsConvert);