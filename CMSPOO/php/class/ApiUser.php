<?php

class ApiUser
{

    static $confirmation    ="";
    static $cleApi          ="";

    static function login()
    {
        $emailForm      = $_REQUEST["email"] ?? "";
        $passwordForm   = $_REQUEST["password"] ?? "";

        $tabResult = Model::read("user", "email", $emailForm);

        $passwordHash = password_hash($passwordForm, PASSWORD_DEFAULT);

        foreach ($tabResult as $tabLigne) {
            extract($tabLigne);
        }

        if (!empty($tabLigne)) {
            if (password_verify($passwordForm, $password)) 
            {
                ApiUser::$confirmation = " Bienvenue $login, vous avez le niveau $level.";

                if($level >= 100)
                {
                    ApiUser::$cleApi = "Texte-secret-fourni-par-le-login";
                }
            } 
            
            else 
            {
                ApiUser::$confirmation =  "Déso pas déso, mauvais mdp ($passwordHash) ! ";
            }
        } 
        
        else 
        {
            ApiUser::$confirmation = "Email non trouvé ($passwordHash)";
        }
    }
}
