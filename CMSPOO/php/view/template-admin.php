<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Page d'administration</title>
</head>

<body>
    <div id="app">
        <header>
            <nav>
                <ul class="menu">
                    <li><a href='index.php'>ACCUEIL / </a></li>
                    <li><a href='pratique.php'>MA PRATIQUE / </a></li>
                    <li><a href='enfants.php'>ENFANTS / </a></li>
                    <li><a href='adolescents.php'>ADOLESCENTS / </a></li>
                    <li><a href='adultes.php'>ADULTES / </a></li>
                    <li><a href='contact.php'>CONTACT</a></li>
                    <li><a href='admin.php'>admin</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Page admin</h1>

            <section>
                <h2>Form de Create</h2>
                <form action="">
                    <input type="text" name="filename" required placeholder="filename">
                    <input type="text" name="titre" required placeholder="titre">
                    <textarea name="contenu" required placeholder="filename">
                        <input type="text" name="image" required placeholder="image">
                    <button type="submit">Creer une nouvelle page</button>
                </form>
            </section>
        </main>
        <footer>
            <p>Tous droits </p>
            <p>{{message}}</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>
        var app = new Vue({
            el:"app",

            mounted:function(){
                this.cleApi=sessionStorage.getItem('cleApi');
            },

            methods:{
                envoyerFormAjax: function(event){

                    console.log(event.target);

                    var formulaire  = event.target;
                    var FormData    = new FormData(formulaire);

                    fetch('api.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(function(responServeur){
                        return  responServeur.json();
                    })
                    .then(function(json){
                        console.log(json);
                    });
                }
            }
            data: {
                cleApi: "",
                message: "Hello Vue!"
            }
        })
    </script>

</body>

</html>