<div id="logModal" class="modal">

<!-- Modal content -->
<span class="close">&times;</span>
        <form class=" ajax modal-content" action="" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" required>
            <label for="password">Mot de passe</label>
            <input type="text" name="password"required>
            <input type="hidden">
            <input type="submit" value="Submit">
        </form>
        </div>
        <?php require_once 'api.php';
        require_once 'templates/footer.php'?>