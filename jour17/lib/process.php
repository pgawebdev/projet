<?php


try {
    $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    echo 'Succesfully connected to database';
} catch (PDOException $error) {
    echo 'Failed connecting to database : '.$error->getMessage();
    var_dump($error);
}