<?php require_once 'templates/header.php' ; 
    require_once ('class/ApiTeam.php');
?>
    <main onload="load.checkPage()">

    <section>
        <a href="index.php">Se déconnecter</a>
    </section>
<h1>Bienvenu</h1>

<section id="addTeam">
    <h2>Créer une équipe</h2>
<form class="ajax modal-content" action="" method="post">
            <label for="team_name">Nom d'équipe</label>
            <input type="text" name="team_name" required>
            <button>Enregistrer</button>
            <input type="hidden" name="classeApi" value="Team">
            <input type="hidden" name="methodeApi" value="create">
        </form>
</section>
<p id="reponse"></p>

<section id="displayTeams">
    <?php 
    ApiTeam::read()
    ?>

</section>
    </main>

<?php require_once 'api.php';
require_once 'templates/footer.php'?>