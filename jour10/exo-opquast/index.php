<?php

require_once 'php/model/glossaire.php';

    // print_r($glossaire);

    function displayRandomTerm($array)
    {
        $length = count($array);
        // Utilisation de la fonction PHP mt_rand() pour générer un nombre aléatoire
        // https://www.php.net/manual/fr/function.mt-rand.php
        $index = mt_rand(0, $length-1);
         //var_dump($index);
        // echo '<pre>';
        // print_r($array[$index]['title']); 
        // echo '</br>'
        // print_r($array[$index]['description']);
        // echo '</pre>';

        $title = $array[$index]['title'];
        $description = $array[$index]['description'];

        $html =

    <<<OUTPUT
        <div>
        <h1>$title</h1>
        <p>$description</p>
        </div>
       
    OUTPUT;

    echo $html;
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glossaire des termes OPQUAST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
<button><a href='index.php'> Une nouvelle définition</a></button>
<?php displayRandomTerm($glossaire); ?>
</body>
</html>