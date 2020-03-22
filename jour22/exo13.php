<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>Damier</h1>
<div class ="table">
    <table>
<?php
    function cases($cadrillage){
        for($i= 0; $i < $cadrillage; $i++)
        {
            if($i%2 == 1)
            {
                echo "<tr>";
                for($j= 0; $j < $cadrillage; $j++)
                {
                    if($j%2 == 1)
                    {
                        echo'<td class="blanc">' . '</td>';
                    }
                    else
                    {
                        echo '<td class="noir"></td>';
                    }
                }
                echo "</tr><br>";
            }
            else
            {
                echo "<tr>";
                for($j= 0; $j < $cadrillage; $j++)
                {
                    if($j%2 == 1)
                    {
                        echo'<td class="noir"></td>';
                    }
                    else
                    {
                        echo '<td class="blanc"></td>';
                    }
                }
                echo "</tr><br>";
            }
        }  
    }
$damier = cases(20);
echo $damier;
?>
    </table>  
</div>
</body>
</html>
