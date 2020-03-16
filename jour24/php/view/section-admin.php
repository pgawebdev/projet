<form action="" method="POST" class="formPublication">

    <label for="categorie">Catégorie :</label>
    <input type="text" name="categorie" required>

    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre" required>
    
    <label for="image">Illustration :</label>
    <input type="text" name="illustration" id="illustration" required value="assets/images/politique1.jpg">

    <label for="titre">Heure de publication :</label>
    <input type="text" name="publication" value="<?php echo date("Y-m-d H:i:s") ?>">

    <label for="contenu">Contenu :</label>
    <textarea type="text" name="contenu" id="contenu" required cols="60" rows="10">Entrez votre texte</textarea>
    

    
    <button type="submit">Publication</button>

</form>

<?php 

if (count($_REQUEST) > 0) {

    // CONSEIL: UTILISER LES MEMES NOMS PARTOUT
    // "nom de la colonne SQL" => $_REQUEST["attribut name HTML"]
    
    $tabAsso = [
        "titre"         => $_REQUEST["titre"],
        "contenu"       => $_REQUEST["contenu"],
        "image"         => $_REQUEST["image"],
        "publication"   => $_REQUEST["publication"],
        "categorie"     => $_REQUEST["categorie"],
    ];

$requeteSQL =   // On envoie les informations dans les champs correspondant à l'interieur de la BDD
<<<CODESQL

INSERT INTO articles (titre, contenu, image, publication, categorie)
VALUES (:titre, :contenu, :image, :publication, :categorie)

CODESQL;



require_once 'php/model/envoyer-sql.php';
}
?>