<?php

require_once 'config.php'; //On appel le fichier config.php

function getConnection(){ //Création de la fonction de connection à la DB

    $options = [
        PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try{
        $db = new PDO(DSN, USERNAME,MDP, $options);
        // echo 'Vous vous êtes bien connecté à la BDD';
    }  catch(PDOExecption $error){
        echo 'Erreur lors de la connection à la BDD : {$error->getMessage()} ';
    }

    return $db;
}

function normalize($chain){

    $pattern = '/\s/'; // Sélectionne les espaces
    // on utilise preg_replace pour les remplacer
    $normalizedChain = preg_replace($pattern, '-', $chain);

    return uniqid().'-'.$normalizedChain;
}



function extensionCheck($mimeType, $array) //Vérification de l'extension d'un fichier
{ 

    $mimeType= explode('/' , $mimeType);

    $extension = strtolower($mimeType[1]);

    if(in_array($extension,$array))
    {

        return true;
    }
    else
    {
        return false;
    }
}

function sizeCheck($fileSize,$maxSize) //Vérification de l'extension d'un fichier
{ 

    if($fileSize > $maxSize);
    {

        return false;
    }
    return true;
}


function handleForm($info) //Fonction de gestion du formulaire d'upload d'image
{ 
    if(isset($info['fileUpload'])) //On crée une variable pour récuépérer les information du formulaire
    {
        extract($info['fileUpload']);
    
        if(UPLOAD_ERR_OK === $error)
        {   
            
            $authorizedExtention = [
                'jpg',
                'jpeg',
                'png',
                'svg',
                'pdf',
            ];

            $check = extensionCheck($type, $authorizedExtention);
            if ( $check === false){
                echo"Ce type de fichier n'est pas autorisé, veuillez utiliser un fichier de type .jpg, jpeg, .png ou .svg .";
                return;
            }
            // $mimeType= explode('/' , $type);

            // $extentension = strtolower($mimeType[1]);

            // if(in_array(!$extension,$authorizedExtention)){
            //     echo "Ce type de fichier n'est pas authorisé, veuillez utiliser un fichier de type .jpg, jpeg, .png ou .svg .";
            //     return;
            // }

            $sizeCheck = sizeCheck($size, '100000');
            if($sizeCheck === false){
            }
            else
            {    
                echo 'Votre fichier pourrait être plus lourd de'. $maxSize-$fileSize . 'octets';
            }


            $fileName = normalize($name);
            // // on utilise une expression régulière pour trouver les espaces dans une chaîne de caractères
            // $pattern = '/\s/';
            // // on utilise preg_replace pour les remplacer
            // $name = preg_replace($pattern, '-', $name);

            // $fileName = uniqid().'-'.$name;

            // // on spécifie à quel endroit on va sauvegarder nos images sur le serveur
            $uploadsDir = 'uploads/';

            // sauvegarder l'image
            // on va utiliser une fonction php : move_uploaded_file()
            // cette fonction renvoie true si tout s'est bien passé, sinon false

            // 1er paramètre : chemin vers le stockage temporaire de l'image
            // 2ème paramètre : chemin complet vers le lieu de stockage sur le serveur
            if (move_uploaded_file($tmp_name, $uploadsDir.$fileName)) {
                echo "Le fichier{$fileName} a bien été sauvé";
            }
            else{
                echo 'Erreur';

                return;
            }
        }
        
    }
}
