<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST LH</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>MA TODOLIST LH</h1>
    </header>
    <main>
        <section>
            <h2>FORMULAIRE DE CREATION</h2>
            <form class="ajax create" action="" method="POST">
                <input type="text" name="title" required placeholder="entrez le titre">
                <textarea name="description" cols="60" rows="5" required placeholder="entrez la description"></textarea>
                
                <label>
                    <input type="radio" name="statut" value="todo" required placeholder="entrez le statut">
                    <span>todo</span>
                </label>
                <label>
                    <input type="radio" name="statut" value="ongoing" required placeholder="entrez le statut">
                    <span>ongoing</span>
                </label>
                <label>
                    <input type="radio" name="statut" value="done" required placeholder="entrez le statut">
                    <span>done</span>
                </label>

                <!-- temporaire en attendant upload... -->
                <input type="hidden" name="identifiantFormulaire" value="create">
                <button type="submit">CREER UNE TACHE</button>
            </form>
        </section>
        <section>
            <h2>AFFICHAGE DES TACHES (READ)</h2>
            <form class="ajax read" action="" method="POST">
                <button type="submit">Rafraichir</button>
                <input type="hidden" name="identifiantFormulaire" value="read">
            </form>
            <div class="listTodo">
            </div>
        </section >

        <section>
            <form class="ajax update" action="" method="POST">
            <input type="text" name="title" required placeholder="entrez le titre">
                <textarea name="description" cols="60" rows="5" required placeholder="entrez la description"></textarea>
                
                <label>
                    <input type="radio" name="statut" value="todo" required placeholder="entrez le statut">
                    <span>todo</span>
                </label>
                <label>
                    <input type="radio" name="statut" value="ongoing" required placeholder="entrez le statut">
                    <span>ongoing</span>
                </label>
                <label>
                    <input type="radio" name="statut" value="done" required placeholder="entrez le statut">
                    <span>done</span>
                </label>    
            
                <button type="submit">Modifier</button>
                <input type="hidden" name="identifiantFormulaire" value="update">
            </form>
        </section>

        <section class="cache">
            <form  class="ajax delete" action="" method="POST">
                <input type="number" name="id" required placeholder="id de la ligne">
                <button type="submit">Supprimez</button>
                <input type="hidden" name="identifiantFormulaire" value="delete">
            </form>
        </section>
    </main>
    <footer>
        <p>tous droits réservés - 2020</p>
    </footer>

    <script>

var listeFormulaire = document.querySelectorAll("form.ajax");
listeFormulaire.forEach(function(formulaire){
     formulaire.addEventListener("submit", envoyerFormulaireAjax);
 });

document.querySelector("form.read button[type=submit]").click();

function envoyerFormulaireAjax (event) 
{
    // LE PARAMETRE event NOUS SERT A BLOQUER LE FORMULAIRE CLASSIQUE...
    event.preventDefault();
    console.log("FORMULAIRE AJAX EN COURS...");



    var formulaire = event.target;

    var formData = new FormData(formulaire);   //Fonction native de Javascript 

    var contenuForm = 
    {
        method: 'POST',     // NECESSAIRE POUR UPLOAD DE FICHIER
        body:   formData
    };


    // LA FONCTION fetch DE JS ENVOIE UNE REQUETE AJAX VERS api-ajax.php (le premier paramètre)
    fetch("api-ajax.php", contenuForm)
    .then(function(responseServer){
        return responseServer.json();
    })
    .then(function(objetJSON) {
        // DEBUG
        console.log(objetJSON);
        if ('tableauArticle' in objetJSON)
        {
            // ON COPIE LE TABLEAU DANS NOTRE VARIABLE tableauArticle
            tableauArticle = objetJSON.tableauArticle;

            rafraichirListeArticle();
        }
    });
};

var tableauArticle = [];

function rafraichirListeArticle()
{
    var baliseListTodo = document.querySelector(".listTodo");
    baliseListTodo.innerHTML = "";

        for(var indice=0; indice < tableauArticle.length; indice++)
        {
            var article = tableauArticle[indice];
            var codeHTML = 
            `
                        <article class="${article.statut}">
                            <h3>${article.title}</h3>
                            <p>${article.description}</p>
                            <p>${article.statut}</p>
                            <button class="modifier" data-indice=${indice}>Modifier</button>
                            <button class="delete" data-id=${article.id}>Supprimer</button>
                        </article>
            `;
            baliseListTodo.innerHTML += codeHTML;
        }

    var listeSupprBtn = document.querySelectorAll(".listTodo button.delete");
    listeSupprBtn.forEach(function(bouton){
        bouton.addEventListener("click", supprimerTache);
        
    });
    var listeModifBtn = document.querySelectorAll(".listTodo button.update");
    listeSupprBtn.forEach(function(bouton){
        bouton.addEventListener("click", modifierTache);
        
    });
}

function modifierTache(event)
{
    // DEBUG
    console.log(event.target);
    var bouton = event.target;
    // JE RECUPERE id DE LA LIGNE A SUPPRIMER
    var id = bouton.getAttribute("data-id");
    // ET JE COPIE id DANS LE FORMULAIRE
    var inputId = document.querySelector("form.update input[name=id]");
    inputId.value = id;

    // MAINTENANT ON VA DECLENCHER L'ENVOI DU FORMULAIRE DE DELETE
    // document.querySelector("form.delete").submit(); // ENVOI SANS AJAX
    document.querySelector("form.delete button[type=submit]").click();

}

function supprimerTache(event)
{
    // DEBUG
    console.log(event.target);
    var bouton = event.target;
    // JE RECUPERE id DE LA LIGNE A SUPPRIMER
    var id = bouton.getAttribute("data-id");
    // ET JE COPIE id DANS LE FORMULAIRE
    var inputId = document.querySelector("form.delete input[name=id]");
    inputId.value = id;

    // MAINTENANT ON VA DECLENCHER L'ENVOI DU FORMULAIRE DE DELETE
    // document.querySelector("form.delete").submit(); // ENVOI SANS AJAX
    document.querySelector("form.delete button[type=submit]").click();

}
    </script>
</body>
</html>