<?php
session_start();
?>
<div id="signModal" class="modal">

<!-- Modal content -->
<span class="close">&times;</span>
        <form class="ajax modal-content" action="">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" required>
            <label for="password">Mot de passe</label>
            <input type="text" name="password" required>
            <label for="passwordConf">Confirmation mot de passe</label>
            <input type="text" name="passwordConf" required>
            <button>S'enregistrer</button>
            <input type="hidden" name="classeApi" value="User">
            <input type="hidden" name="methodeApi" value="signin">
        </form>
</div>
<?php require_once 'api.php';
 require_once 'templates/footer.php'?>
 