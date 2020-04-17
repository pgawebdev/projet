<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <p>clickez pour envoyer les messages en base de donnée</p>
    <input type="hidden" name="identifiantFormulaire" value="insert">
    <button type="submit">Click me</button>

    <?php 
                //Affectation de la valeur "create" à la requête
                $identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
                if ($identifiantFormulaire == "insert") {
                //Envoie du formulaire à la bdd
                require 'php/convert.php';  
                }                      
            ?>
</form>
</body>
</html>