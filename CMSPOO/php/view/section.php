                <section>
                        <div class="banner-container" role="banner">
                                <img class="banner-adultes" src="<?php echo $image ?? "" ?>">
                                <h2><?php echo $title ?? "" ?></h2>
                                <?php echo $contenu ?? "" ?>
                        </div>
                </section>

                <section>
                        <h3>Connexion</h3>
                        <form action="ajax">
                                <input type="email" name="email" id="" required placeholder="Entrez votre email">
                                <input type="password" name="password" required placeholder="Entrez votre mot de passe">
                                <button>Se connecter</button>
                                <div class="confirmation"></div>
                                <input type="hidden" name="methodeApi" value="login">
                        </form>
                </section>

                <script>
                        var mc ={};
                        mc.start = function()
                        {
                                var listeSelection = document.querySelectorAll('form.ajax');
                                listeSelection.forEach(function(balise)
                                {
                                        addEventListener('submit',mc.cbAjax);
                                });
                        }

                        mc.cbAjax = function (event)
                        {
                                event.preventDefault();

                                var formulaire = event.target;
                                var formData = new FormData(formulaire);
                                fetch('api.php',{
                                        method: 'POST',
                                        body: formData
                                });
                        }
                        mc.start();
                </script>