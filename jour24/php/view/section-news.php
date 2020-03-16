<section id=articleList>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8;", "root", ""); //On se connect à la basse de donnée
$requeteSQL = //On récupère les lignes du tableau "articles" sous forme d'un tableau indexé, soit une ligne par article et on les ordonne par date de publication + récente
<<<CODESQL

SELECT * FROM `articles`
ORDER BY publication DESC

CODESQL;

require_once 'php/model/envoyer-sql.php';

// ETAPE3: JE RECUPERE MON TABLEAU DE RESULTATS
// https://www.php.net/manual/fr/pdostatement.fetchall.php
$tabLigne = $pdoStatement->fetchAll();

foreach($tabLigne as $tabAsso)
{
    // $id         = $tabAsso["id"];
    // $titre      = $tabAsso["titre"];
    // $contenu    = $tabAsso["contenu"];
    // $image      = $tabAsso["image"];
    // $categorie  = $tabAsso["categorie"];
    // $publication= $tabAsso["publication"];

    // SIMPLIFICATION
    // extract CREE DES VARIABLES A PARTIR DES CLES DU TABLEAU ASSOCIATIF
    extract($tabAsso); 

    echo
<<<CODEHTML
<article class="$categorie">
<p class="art$categorie">$categorie</p>
<h2>$titre</h2>
<p>$publication</p>
<img src=$image alt="">
<p class="chapeau">$contenu</p>
</article>
CODEHTML;
}
?>
</section>