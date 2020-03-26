<?php
function creerUpdateSQL($tableName, $tabAsso)
{   
    $set    = "";
    $id     = "";
    $i      = 0;    
    $check  = 0;

    foreach($tabAsso as $cle => $valeur)
    {
        if($i == 0)
        {   if($cle == "id") 
            {
                $id= $id. $cle . " = " . ":" . $cle;
                $check = 1;
            }
            else 
            {
             $set= $set . $cle . " = " . ":" . $cle;
            }
        }
        else if($check == 0)
        {
            if($cle == "id") 
            {
                $id= $id. $cle . " = " . ":" . $cle;
            }
            else 
            {
                $set= $set . ', ' . $cle . " = " . ":" . $cle;
            }
        }

        else
        {
            $set= $set . $cle . " = " . ":" . $cle ;
            $check = 0;
        }
                
        $i++;
    }
    

$insererSQL = "UPDATE " . $tableName . " SET " . $set  . " WHERE " . $id  ;

return $insererSQL;
}

$sql = creerUpdateSQL("newsletter", [ "id" => "5", "nom" => "julie", "email" => "julie@nomail.me"]);
echo "<pre>$sql</pre>";
?>