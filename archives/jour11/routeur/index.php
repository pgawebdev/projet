<?php
$templates = scandir('templates', 1); // Défini la variable $template comme listant sous forme de tableau indexé le répertoire pointé 'templates' et l'ordonne en croissant.

if (!empty($_REQUEST['page'])) { // Si le nom de la 'page' est rempli //
    $page = strtolower($_REQUEST['page']).'.php'; // Défini la variable $page comme le nom de la page active en minuscule et ajoute l'extension.php
    $check = 0;
} else if (empty($_REQUEST['page'])){ // Si le paramètre 'page' est vide//
    $check = 1;//On crée la variable $check avec pour valeur 1
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

        if ($check > 0){ //Si $check est supérieur à 0
            require_once "templates/home.php"; //On appel le fichier home.php
        }
         else if (in_array($page, $templates)) { //Sinon,  si $page est = à $templates
            require_once "templates/{$page}"; // On charge le fichier corresprondant à $page
            } else { // Sinon
            require_once 'templates/404.php'; // On charge la page d'erreur 404
            }
     ?>
</body>
</html>