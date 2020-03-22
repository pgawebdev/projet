<?php
function creerInsererSQL($tableName, $tabAsso)
{
    
    $ligne1 = "";
    $ligne2 = "";
    $i = 0;

    foreach($tabAsso as $cle => $valeur)
    {
        if($i == 0)
        {
            $ligne1 = $ligne1 . $cle;
            $ligne2 = $ligne2 . ':' . $cle;
        }
        else 
        {
            $ligne1 = $ligne1 . ', ' . $cle;
            $ligne2 = $ligne2 . ', :' . $cle;
        }

        $i++;
    }

$insererSQL = "INSERT " . "INTO ". $tableName . "( ". $ligne1 . " )" . "VALUES" . "( " . $ligne2 . " )";



return $insererSQL;
}

$sql = creerInsererSQL("newsletter", [ "nom" => "julie", "email" => "julie@nomail.me" ]);
echo "<pre>$sql</pre>";
?>