<?php
require_once "Model.php";

$requeteSQL= "";

class ApiUser
{
    static $confirmation    = "";

    static function signin()
    {
     $userForm      = $_REQUEST["username"] ?? "";
     $passwordForm   = $_REQUEST["password"] ?? "";
     $passwordConf   = $_REQUEST["passwordConf"] ?? "";
 
     $tabResult = Model::read('users', "username", $userForm);

     if (empty($tabResult))
     {
         if( $passwordForm === $passwordConf)
         {
             $passwordHash = password_hash($passwordForm, PASSWORD_DEFAULT);

             $params = [
                'username'  => $userForm,
                'pwd'       => $passwordHash
             ];

             $requeteSQL = "INSERT INTO `users` (`username`,`pwd`) VALUES( :username, :pwd)";
             Model::create($requeteSQL, $params );
              
             setcookie("loged_user", $userForm); 
         }

        else{
            ApiUser::$confirmation = " Mots de passe non identique";
        }
     }
     else {
         ApiUser::$confirmation = "nom d'utilisateur déjà pris";
        }
    }


    static function login()
    {

        $userForm      = $_REQUEST["username"] ?? "";
        $passwordForm   = $_REQUEST["password"] ?? "";

        $tabResult = Model::read("users", "username", $userForm);

        foreach ($tabResult as $tabLigne) {
            extract($tabLigne);
        }

        if (!empty($tabLigne)) {
            if (password_verify($passwordForm, $pwd)) {
               
                setcookie("loged_user", $userForm); 

                ApiUser::$confirmation = "C'est ok, entre $username";
                exit();
            } else {
                ApiUser::$confirmation =  "Déso pas déso, mauvais mdp ($passwordHash) ! ";
            }
        } else {
            ApiUser::$confirmation = "Compte non trouvé ($passwordHash)";
        }
    }



}
