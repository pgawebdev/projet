            <!--Formulaire de contact-->
            <section id='contact'>
                <form action="#contact" method="GET" class="form">
                    <div class="form">
                        <label for="name">Nom: </label>
                        <input type="text" name="nom" id="name" placeholder="nom" required>
                    </div>
                    <div class="form">
                        <label for="email">Mail: </label>
                        <input type="email" name="email" id="email"  autocomplete="off" placeholder="mail@nomdedomaine" required>
                    </div>
                    <div class="form">
                        <label for="name">Votre message: </label>
                        <textarea name="message" id="message"cols="60" rows="8" maxlength="1000" placeholder="Entrez votre message" required> </textarea>
                    </div>
                    <div class="form">
                        <button type="submit" value="Envoyer">Envoyer</button>
                    </div>
                </form>
                <div>
                    <!-- ICI ON VEUT VOIR LE MESSAGE DE CONFIRMATION -->
                    <?php require_once "php/controller/traitement-contact.php" ?>
                </div>
            </section>
            <!--Formulaire de contact-->