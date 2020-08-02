<?php
require_once "Model.php";

$requeteSQL = "";

class ApiTeam
{
    static function create()
    {
        $teamForm      = $_REQUEST["team_name"] ?? "";
        $tabResult = Model::read('teams', "team_name", $teamForm);

        if (empty($tabResult)) 
        {
            $params = [
                'team_name' => $teamForm[0]
            ];

            $requeteSQL =   "INSERT INTO `teams` (`team_name`) VALUES( :team_name)";
            $id = Model::create( $requeteSQL, $params );
            $team_id = $id;
            // Rechercher l'id de l'user 
            $username = $_COOKIE['loged_user'];
            $result = Model::read('users','username', $username);
            $id = $result[0]['user_id']; 
            $params = [
                'user_id' => $id,
                'team_id' => $team_id
            ];
            //Inserer l'id de l'user et de la team dans team_user; 
            $requeteSQL =   "INSERT INTO `team_user` (`user_id`,`team_id`) VALUES( :user_id, :team_id)";
             Model::create( $requeteSQL, $params );
            
        } else {
            ApiUser::$confirmation = "nom d'équipe déjà pris";
        }
    }

    static function read()
    {
    //    $requeteSQL = "SELECT * FROM `teams` INNER JOIN `team_user` ON teams.user_id" ;
    }
}
