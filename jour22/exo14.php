<?php
function distribuerBillet($tabBillet, $montant){

    $distrib    = "";
    $sousTotal  = $montant;
    $totalDispo = 0;
    $check      = 0;
    $dispo      = $billet*$qt;

    if ($totalDispo < $montant)
    {
        $distrib = 'Montant indisponible';
    }
    else
    {
        foreach($tabBillet as $billet => $qt)
        {   
        
        
        $totalDispo = $totalDispo + $dispo;

        $x = intval($sousTotal/$dispo);
        $sousTotal = $sousTotal - $dispo;
        }   

        
        else
        {
            //  $check=1;
            //  $i=0;
            //  if($i < count($tabBillet)){

             
            //  $vosBillets = $vosBillets . $dispo . "+";
            // }
            // $i++;
        }
    }

    // if( $check = 1)
    // {
    //     $y=0;
    //     foreach($tabBillet as $billet => $qt)
    //     {   
            
    //         $x = intval($sousTotal/$dispo);
    //         $y = $y . $x . ', ';
    //         $sousTotal = $dispo - $montant;
            
            // if($dispo < $sousTotal)
            //         {
            //                 if($x>0)
            //                 {
                            
            //                     $distrib = $distrib . $billet . "x" . $x . ", ";
            //                     $sousTotal = $dispo - $montant;
            //                 }
            //         }

            // else if($dispo == $sousTotal)
            // {
            //     $distrib = $distrib . $billet . "x" . $qt;
            //     $sousTotal = $dispo - $montant; 
            // }

            // else if($sousTotal < $dispo)
            // {
            //     $distrib = $distrib;
            // }
           
        
    
    echo $montant;
    echo $distrib;
    echo 'Vos billets :' . $vosBillets . '</br>';
    echo $totalDispo .'€ Disponibles';
    return;
}

    $billetsDispo = ["200" => 1, "100" => 2, "50"=> 3, "20"=> 5, "10"=> 5, "5" => 10];
    $montantDemande = 500;

$billetsDonne = distribuerBillet($billetsDispo, $montantDemande);

echo $billetsDonne;

?>