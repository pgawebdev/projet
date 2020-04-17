<?php

require_once 'php/datas.php';

$jsonConvert = json_decode($posts);
$sql=
<<<SQLCODE
    INSERT INTO jour47 (
        userID,
        title,
        body)
    VALUES  
SQLCODE;

for ($i =0; $i < count($jsonConvert); $i++){


$userID = $jsonConvert[$i]->userId;
$title =$jsonConvert[$i]->title;
$body =$jsonConvert[$i]->body;


$sql = $sql.
<<<SQLCODE
    (
        $userID,
        $title,
        $body
    )
SQLCODE;
};

$sql = $sql.';';

require 'php/dbCo.php';