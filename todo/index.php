<?php require_once 'templates/header.php' ?>
    <main onload="load.resetCookie()">
        <?php require_once 'templates/modales/signin.php' ?>

        <?php require_once 'templates/modales/login.php' ?>
        <!-- <button id="signBtn">S'enregistrer</button>
        <button id="logBtn">Se connecter</button> -->
        <a href="login.php">ENTRER</a>
        <a href="signin.php">S'enregistrer</a>
    </main>


<?php require_once 'templates/footer.php'?>