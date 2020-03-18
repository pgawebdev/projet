<section>
    <h2>Déclarer une sortie</h2>    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ex doloribus aliquid culpa molestiae qui consequatur earum animi eos, modi neque eum blanditiis quaerat beatae alias provident, iste reprehenderit fugiat?</p>
    <form action="" method="post">
        
        <input type="text" name="nom" required placeholder="Votre Nom">
        <input type="text" name="prenom" required placeholder="Votre prénom">
        <input type="textarea" cols="60" rows="6" name="adresse" required placeholder="Votre adresse">
        <h3>Veuillez indiquer la raison de votre déplacement</h3>
        <label>
            <input type="radio" name="raison" required value="aide aux proches">
            <span>aide aux proches</span>
        </label>
        <label>
            <input type="radio" name="raison" required value="courses alimentaires">
            <span>courses alimentaires</span>
        </label>
        <label>
            <input type="radio" name="raison" required value="necessité médical">
            <span>necessité médical</span>
        </label>
        <label>
            <input type="radio" name="raison" required value="necessité familial">
            <span>necessité familial</span>
        </label> 
        <label>
            <input type="radio" name="raison" required value="sport individuel"> 
            <span>sport individuel</span>
        </label>
        <label>
            <input type="radio" name="raison" required value="travail">
            <span>travail</span>
        <label>
        <input type="email" name="email" required placeholder="Votre email">
        <button type="submit">enregistrer ma déclaration</button>

        <!--IDENTIFIANT DE FORMULAIRE-->
        <input type="hidden" name="identifiantFormulaire" value="declaration" >
        <div class="confirmation">
<?php

function filtrer($name){ //On crée un fonction nommé filtrer avec pour argument la variable name
    $info = $_REQUEST[$name] ?? ""; // On stock dans une variable nommée $info la valeur de $name
    return $info; //On récupuère la $info
}

function insererSQL($nomTable, $tabAsso){

    $requeteSQL =//On prépare la requête SQL pour envoyer les infos en BDD et on la stock dans la variable $requeteSQL        
<<<CODESQL
                INSERT INTO 'declaration'
                (nom, prenom, adresse, raison, numero, dateDeclaration)
                VALUES
                (:nom, :prenom, :adresse, :raison, :numero, :dateDeclaration)
CODESQL;
                //On Prépare l'envoie à la BDD
                $pdo = new PDO("mysql:host=localhost;dbname=attestation;charset=utf8;", "root", ""); //Connexion à la BDD
                $pdoStatement = $pdo->prepare($requeteSQL);//On stock dans $pdoStatement, pour preparer l'envoi de $requeteSQL
                $pdoStatement->execute($tabAsso);
                $pdoStatement->debugDumpParams();
}

// CODE POUR TRAITER LE FORMULAIRE
// VERIFIER SI LE FORMULAIRE A ETE ENVOYE
$identifiantFormulaire = filtrer("identifiantFormulaire");//On utilise la fonction filtrer sur identifiantFormulaire

    if ($identifiantFormulaire == "declaration")
    {//Si la value est = a "declaration"
        $tabAssoColonneValeur = [// ALORS JE VAIS RECUPERER LES INFOS
            "nom"    => filtrer("nom"),
            "prenom"    => filtrer("prenom"),
            "adresse"    => filtrer("adresse"),
            "raison"    => filtrer("raison"),
        ];
        extract ($tabAssoColonneValeur);// VERIFIER ET VALIDER LES INFOS
        if(
            $nom        != "" //Si tout les champs sont remplis 
            && $prenom  != ""
            && $adresse != ""
            && $raison  != "")
            {
                $tabAssoColonneValeur["numero"] = uniqid(); //Crée un numéro unique pour le formulaire
                $tabAssoColonneValeur["dateDeclaration"] = date("Y-m-d H:i:s"); //Dater le formulaire

                

                insererSQL("declaration", $tabAssoColonneValeur);

                echo "Votre déclaration a bien été enregistrée, notez bien votre numéro d'attestation : {$tabAssoColonneValeur["numero"]}";
            }
    }
    else
    {
        echo "Veuillez remplir tout les champs";
    }


// ENREGISTRER LES INFOS DANS LA TABLE SQL
?>
        </div>
    </form>

</section>