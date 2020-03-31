<?php
$pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8;", "root", ""); //Connexion a la BDD

$pdoStatement = $pdo->prepare($requeteSQL);

$pdoStatement->execute($tabAsso);
