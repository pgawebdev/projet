<?php
require_once 'templates/header.php'
?>
<div>

<!-- Modal content -->
<span class="close">&times;</span>
        <form class=" ajax modal-content" action="" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" required>
            <label for="password">Mot de passe</label>
            <input type="text" name="password"required>
            <button>S'enregistrer</button>
            <input type="hidden" name="classeApi" value="User">
            <input type="hidden" name="methodeApi" value="login">
        </form>
        </div>
        <p id="reponse"></p>
        <?php require_once 'api.php';
 require_once 'templates/footer.php'?>
 <!-- <script> checkSession();</script> -->