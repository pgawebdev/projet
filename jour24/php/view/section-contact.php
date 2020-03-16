<section>
        <h2>Contact</h2>
        <form id="create" class="contact" action="" method="POST"><!-- id du formulaire -->
        <input type="text" name="nom" required placeholder="entrer vos nom et prénom"><!-- Nom de la personne -->
        <input type="hidden" name="date" value="<?php echo date("Y-m-d H:i:s") ?>"><!-- date du message -->
        <input type="text" name="email" required placeholder="entrez votre adresse email"><!-- email-->
        <textarea name="contenu" cols="60" rows="8" required placeholder="entrer votre mesage"></textarea><!-- meassage -->
        <!--
        <input type="text" style="display:none;" name="identifiantFormulaire" value="create" readonly>
        -->
        <input type="hidden" name="identifiantFormulaire" value="create">

        <button type="submit">Envoyer</button> <!-- Button d'envoie -->
        <div class="confirmation">
</section>