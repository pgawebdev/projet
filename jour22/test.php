<!DOCTYPE html>
    <html>
        <head>
            <title>Cours PHP & MySQL</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="cours.css">
        </head>
        
        <body>
            <h1>Titre principal</h1>
            <?php
                /*Tableau multidimensionnel numéroté stockant
                 *des tableaux numérotés*/
                $suite = [
                    [1, 2, 4, 8, 16],
                    [1, 3, 9, 27, 81]
                ];
                
                /*Tableau multidimensionnel numéroté stockant
                 *des tableaux associatifs et une valeur simple*/
                $utilisateurs = [
                    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
                    ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
                    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
                    'Florian'
                ];
                
                /*Tableau multidimensionnel associatif stockant
                 *des tableaux associatifs*/
                $produits = [
                    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
                    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
                ];
                
                //$sous_suite = [1, 2, 4, 8, 16]
                $sous_suite = $suite[0];
                echo $sous_suite[0]. '<br>'.$sous_suite[2]. '<br>';
                
                //$sous_util = ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr']
                $sous_util = $utilisateurs[2];
                echo $sous_util['nom']. '<br>';
                
                //$sous_produits = ['poids' => 200, 'quantite' => 10, 'prix' => 15]
                $sous_produits = $produits['Livre'];
                echo $sous_produits['prix'];
            ?>
            <p>Un paragraphe</p>
        </body>
    </html>