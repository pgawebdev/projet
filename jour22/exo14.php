<?php
function totalBillet($tabBillets, $montantDemande){

    $etat       = "";
    $vosBillets    = "";
    $totalDispo = 0;
    $html=
<<<HTML
    <p>Vous avez demandé {$montantDemande}€.</p>
HTML;
echo $html;

    foreach($tabBillets as $billet => $qt) 
    {   
    $dispo      = $billet*$qt;
    $totalDispo = $totalDispo + $dispo;
    }

    if ($totalDispo < $montantDemande)//On check si on a suffisement de billets pour répondre à la demande
    {
        $etat = 
<<<HTML
    <p>Montant indisponible.</p>
HTML;
        echo $etat;
    }

    else
    {
        $etat =
<<<HTML
    <p>Montant disponible.</p>
HTML;
        echo $etat;

        foreach($tabBillets as $billet => $qt){

            $quotient = intval($montantDemande/$billet);//Pour chaque billet calcul du nombre à distribuer

            if($montantDemande == 0)//Si le montant est atteint on met fin à la boucle.
            { 
                    return;
            }

            else if($quotient <= 0)
            {
                $vosBillets = $vosBillets;
                $montantDemande = $montantDemande;
            }

            else if($qt > $quotient )
            {
                $vosBillets = "{$billet}x{$quotient} ";
                $montantDemande = $montantDemande - ($billet*$quotient);
                echo $vosBillets;   
            }
             
            else 
            {
                $vosBillets = "{$billet}x{$qt} ";
                $montantDemande = $montantDemande - ($billet*$qt);
                echo $vosBillets;
            }                                                                   
        }
    }        
};

$tabBillets = ["200" => 2, "100" => 4, "50"=> 8, "20"=> 20, "10"=> 40, "5" => 80];
$montantDemande = 95;

$billetsDonne = totalBillet($tabBillets, $montantDemande);

echo $billetsDonne;

?>