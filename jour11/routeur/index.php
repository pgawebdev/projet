<?php

if (!empty($_REQUEST['page'])) { // Si le nom de la 'page' est rempli //
    $page = strtolower($_REQUEST['page']).'.php'; // Défini la variable $page comme le nom de la page active en minuscule et ajoute l'extension.php
    $templates = scandir('templates', 1); // Défini la variable $template comme listant usous forme de tableau indexé le répertoire pointé 'templates' et l'ordonne en croissant
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        require_once 'php/view/nav.php';

        if (in_array($page, $templates)) {
            require_once "templates/{$page}";
        } else {
            require_once 'templates/404.php';
        }
     ?>
</body>
</html>