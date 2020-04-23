<?php

require_once 'php/datas.php';

$jsonConvert = json_decode($posts);


$sql=
<<<SQLCODE
    INSERT INTO posts (
        userId,
        title,
        body)
    VALUES

SQLCODE;

for ($i =0; $i < count($jsonConvert); $i++){


$userId = $jsonConvert[$i]->userId;
$title =$jsonConvert[$i]->title;
$body =$jsonConvert[$i]->body;


$sql = $sql.
<<<SQLCODE
    (
        [$userId],
        [$title],
        [$body]
    ),
SQLCODE;
};

$sql = $sql.';';

echo $sql;


require 'php/dbCo.php';