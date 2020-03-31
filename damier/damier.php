<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div>
    <table>
    <?php
            function dessinerDamier ($nombredecase)
                {
                    for ($tr=0;$tr<$nombredecase;$tr++){
                        echo "<tr>";
                        for ($td=0;$td<$nombredecase;$td++){
                            if (($tr+$td)%2==0)
                                echo'<td class="blanc" id='.$tr.$td.'">' . '</td>';
                            else
                                echo'<td class="noire" id='.$tr.$td.'">' . '</td>';
                        }
                    echo "</tr>";

                    }
                }

            dessinerDamier(10);
    ?>
    </table>
    
    <div class='mesPions'></div>
    <div class = "pion" id ="a0"></div>
</div>
    <script src="js/app.js"></script>
</body>


</html>