<?php
function distribuerBillet($tabBillet, $montant){

    $distrib    = "";
    $soutotal = 0;
    $total = $montant;

    foreach($tabBillet as $billet => $qt)
    {   
        $dispo = $billet*$qt;
        
        if ($dispo < $montant){
            echo 'Montant indisponible';
            return;
        }

        else 
        {   
            while($dispo !== $total)
            {
                $x = intval($total/$produit);
                $distrib = $distrib . $billet . "x" . $qt;
                return $distrib;                
            }
            
            // else
            // {
                
            //     if($x > 0);
            //     {                        $distrib = $distrib . $billet . "x" . $qt;
                
            //     }
            // }
        }

        // $produit = $qt*$billet;
        // $x = intval($total/$produit);
        // $billetDispo = 

        // if ($produit < $montant)
        // {
        
        //     $distrib = $distrib . $x . "x" . $qt .", ";
        // 
        
        // 
        // else{
        //     echo 'Montant indispponible, veuillez choisir un autre montant.';
        // }

    }
    return $distrib;
}

    $billetsDispo = ["200" => 1, "100" => 2, "50"=> 3, "20"=> 5, "10"=> 5, "5" => 10];
    $montantDemande = 200;

$billetsDonne = distribuerBillet($billetsDispo, $montantDemande);

echo $billetsDonne;
?>