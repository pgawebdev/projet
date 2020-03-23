<?php
function creerUpdateSQL($tableName, $tabAsso)
{   
    $set = "";
    $id  = "";
    $i=0;

        for($i < count($tabAsso);i++):
            if($tabAsso[$i] = "id") :
                $id = $id . $cle ." = ".":".$cle;
            endif;
            else if($i == 0):
                $set= $set . $cle . " = " . ":" . $cle;
            else endif;
            else if:
                $set= $set . ',' . $cle . " = " . ":" . $cle;
            else endif;
        endfor;
        // if($cle != 'id' && $tabAsso[0] )
        // {
            
          
        //     $set = $set . $cle . " = " . ":" . $cle;
        // }  
        // else if ($cle = "id")
        // {
           
        //     $id = $id . $cle ." = ".":".$cle;
        // }
        // else
        // {
        //     $set= $set . ',' . $cle . " = " . ":" . $cle;
        // }
        // return $set && $id;
    }

$insererSQL = "UPDATE " . $tableName . " SET " . $set . ", " . "WHERE" . $id  ;



return $insererSQL;
}

$sql = creerUpdateSQL("newsletter", [ "nom" => "julie", "email" => "julie@nomail.me", "id" => "5"]);
echo "<pre>$sql</pre>";
?>