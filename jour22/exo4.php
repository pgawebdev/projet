<?php
//CREER UNE FONCTION QUI RENVOIE LE PRIX TTC A PARTIR DU PRIX HT ET DU TAUX TVA

function prixTTC($prix, $taxe=1.2 ){

    $total = $prix*$taxe;
    return $total;

}

$prixTotal = prixTTC(100);
echo "Le prix TTC est $prixTotal";