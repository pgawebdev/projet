<?php 

$nbInfo = count($_REQUEST); /*$mavariable = count($_REQUEST); */
if ($nbInfo > 0) /* Si ($mavariable est supérieur à la valeur 0*/ 

{
$nom        = $_REQUEST["nom"];
$email      = $_REQUEST["email"];
$message    = $_REQUEST["message"];

$messageStocke =
<<<texte

    nom: $nom
    email: $email
    message: $message

texte;

    // FILE_APPEND PERMET DE NE PAS ECRASER LES MESSAGES PRECEDENTS
    file_put_contents("php/model/contact.txt", $messageStocke, FILE_APPEND);
    // SUR WINDOWS:
    // PHP VA CREER LE FICHIER contact.txt
    // MAIS IL FAUT CREER LE DOSSIER php/model/ AVANT
    // SUR LINUX:
    // IL FAUT CREER LE FICHIER AVANT ET DONNER LES DROITS EN ECRITURE
    // chmod 0666 contact.txt

    
    // AFFICHER LE MESSAGE DE CONFIRMATION
    echo "merci pour votre message $nom ($email). Nous vous recontacterons.";
}
?>