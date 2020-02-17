<?php 

// foreach($templates as $lien);
// {
//     echo "<h4>$lien</h4>";
// }

// print_r($templates);

for ($i=0; $i < count($templates) - 2; $i++)
    {
     echo "<a href='index.php?page={$templates[$i]}'>{$templates[$i]}</a>";
    }

//foreach (glob("routeur/templates/*.php") as $lien) {
    //echo "<a href='index.php?page={$lien}'>{$lien}</a>";
//}

?>