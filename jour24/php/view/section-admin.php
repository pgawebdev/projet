<!--CREER UN ARTICLE  -->
<section>
    <h2>Formulaire de création d'article</h2>
    <form id="create" class="admin" action="" method="POST">
        
        <label for="categorie">Catégorie :</label>
        <input type="text" name="categorie" required>

        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" required>
        
        <label for="image">Illustration :</label>
        <input type="text" name="image" id="illustration" required value="assets/images/politique1.jpg">

        <label for="titre">Heure de publication :</label>
        <input type="text" name="publication" value="<?php echo date("Y-m-d H:i:s") ?>">

        <label for="contenu">Contenu :</label>
        <textarea type="text" name="contenu" id="contenu" required cols="60" rows="10">Entrez votre texte</textarea>
        
        <input type="hidden" name="identificationFormulaire" value="create">

        <button type="submit">Publication</button>

        <div class="confirmation">
            <?php
$identificationFormulaire = $_REQUEST["identificationFormulaire"] ?? "";
if($identificationFormulaire == "create"){
    require"php/controller/form-articles.php";
}
            ?>
        </div>
    </form>
</section>
<!--CREER UN ARTICLE  -->
<!--METTRE A JOUR UN ARTICLE  -->
<section>
    <button class="closePopup">Fermer le popup</button>
    <h2>Formulaire de mise à jour d'article</h2>
    <form id="create" class="admin" action="" method="POST">
        <div class="infoUpdate">
            <label for="categorie">Catégorie :</label>
            <input type="text" name="categorie" required>

            <label for="titre">Titre :</label>
            <input type="text" name="titre" id="titre" required>
            
            <label for="image">Illustration :</label>
            <input type="text" name="image" id="illustration" required value="assets/images/politique1.jpg">

            <label for="titre">Heure de publication :</label>
            <input type="text" name="publication" value="<?php echo date("Y-m-d H:i:s") ?>">

            <label for="contenu">Contenu :</label>
            <textarea type="text" name="contenu" id="contenu" required cols="60" rows="10">Entrez votre texte</textarea>
        </div>
        <input type="hidden" name="identificationFormulaire" value="update">

        <button type="submit">Edition</button>

        <div class="confirmation">
            <?php
$identificationFormulaire = $_REQUEST["identificationFormulaire"] ?? "";
if($identificationFormulaire == "update"){
    require"php/controller/form-articles.php";
}
            ?>
        </div>
    </form>
</section>
<!--METTRE A JOUR UN ARTICLE  -->
<!--SUPPRIMER UN ARTICLE  -->
<section>

</section>
<!--SUPPRIMER UN ARTICLE  -->
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