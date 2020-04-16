        <section>
            <h2>Titre Section</h2>
        </section>
        <section>
            <h2>FORMULAIRE DE CONTACT</h2>
            <form class="ajax" method="POST" action="">
                <input type="text" name="nom" required placeholder="entrez votre nom">
                <input type="text" name="email" required placeholder="entrez votre email">
                <textarea name="message" cols="60" rows="6" required placeholder="entrez votre message"></textarea>
                <button type="submit">envoyer le message</button>
            </form>
        </section>

        <script>
            //Selection des divers blises html
            var baliseAjax      = document.querySelector(".ajax");
            // var baliseNom       = document.querySelector("input[name=nom]");
            // var baliseEmail     = document.querySelector("input[name=email]");
            // var baliseMessage   = document.querySelector("input[name=message]");

            baliseAjax.addEventListener('submit', function(event){

                event.preventDefault(); //Bloque l'envoie html du formulaire 

                //ON stock les entrée du formulaire dans des variable
                // var saisieNom       = baliseNom.value;
                // var saisieEmail     = baliseEmail.value;
                // var saisieMessage   = baliseMessage.value;

                //On crée un objet FormData, qui est une fonction de js
                var formData = new FormData(baliseAjax);
                // formData.append("nom",saisieNom);
                // formData.append("email",saisieEmail);
                // formData.append("message",saisieMessage);

                                // ON PEUT ENVOYER CES INFOS PAR AJAX AVEC fetch
                                fetch('api-ajax.php', {
                    method: 'POST',
                    body: formData,
                })
                .then(function(reponseServeur){
                    return reponseServeur.json();
                })
                .then(function(objetJSON) {
                    console.log(objetJSON);
                });
            });

        </script>