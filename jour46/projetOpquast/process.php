<?php
//print_r($_GET);

$dataSource = $_GET['querry'].'.php';

require_once 'data/'.$dataSource;

if ($dataSource == 'glossary.php'){

    echo json_encode($glossary);

}
else if( $dataSource == 'practice.php'){
    echo json_encode($practice);
}