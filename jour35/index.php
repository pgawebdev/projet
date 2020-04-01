<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h3>Exemple Ajax</h3>
        <button id="bouton1">Clickez</button>
        <button id="bouton2">Clickez</button>



        <section>
        <h2>CODE EN HTML</h2>
        <div class="listeArticle">
            <article>
                <h3>titre article1</h3>
            </article>
            <article>
                <h3>titre article2</h3>
            </article>
            <article>
                <h3>titre article3</h3>
            </article>
        </div>
        <h2>JSON</h2>
        <div class="listeArticle listeJSON">
            <!-- ON VA UTILISER JS POUR OBTENIR LA MEME CHOSE-->
        </div>
        </section>


        <script>

        bouton1.addEventListener("click", changerTexte);
        
        function changerTexte(){
            document.getElementById("bouton2").innerHTML = "Hello World";
        };
        var objet = {}; // UN OBJET VIDE
        var objetProprieteValeur = 
            // DEBUT JSON
            {
                'propriete1' : 'valeur1',
                'propriete2' : 'valeur2',  
                'propriete3' : 'valeur3'    // ATTENTION: PAS DE VIRGULE SUR LE DERNIER ELEMENT
            };
                    
         var listeJSON = document.querySelector(".listeJSON");
         listeJSON.innerHTML += "<article><h3>titre article</h3></article>";
    



        </script>
    </section>
    
</body>
</html>