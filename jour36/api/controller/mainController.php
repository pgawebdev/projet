<?php
require_once 'todoController.php';
require_once '../Model.php';

$model = new Model();

$controller = new TodoController($model);

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $controller->getAll();
}

?>