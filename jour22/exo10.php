<?php

function creerDeleteSQL($table, $id){

    $deleteSQLString = 'DELETE '. "FROM " . $table . ' WHERE id=' .$id;
    return $deleteSQLString;
}

$deleteSQL = creerDeleteSQL("contact", 5);
echo $deleteSQL;

?>  