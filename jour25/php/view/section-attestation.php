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
    $info = $_REQUEST[$name] ?? ""; // A partir de la variable name on crée un tableau indexé des info à l'interieur de la balise et stocké dans la variable info
    return $info; //On récupuère la $info
}
// CODE POUR TRAITER LE FORMULAIRE
// VERIFIER SI LE FORMULAIRE A ETE ENVOYE
$identifiantFormulaire = filtrer("identifiantFormulaire");

    if ($identifiantFormulaire == "declaration"){
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
            && $raison  != ""){
                $tabAssoColonneValeur["numero"] = uniqid() //Crée un numéro unique pour le formulaire
                $tabAssoColonneValeur["dateDeclaration"] = date("Y-m-d H:i:s"); //Crée un numéro unique pour le formulaire

                //On prépare la requête SQL pour envoyer les infos en BDD
            }
    }

    else{
        echo "Veuillez remplir tout les champs"
    }


// ENREGISTRER LES INFOS DANS LA TABLE SQL
?>
        </div>
    </form>

</section>