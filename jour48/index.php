<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
    <?php require_once 'api/config.php'; ?>

        <h1>Ma TodoList</h1>
    </header>
    <main>
        <div>
            <h2>Ajouter une tâche</h2>
            <form action="" method="post">
                <label for="title">Titre</label>
                <input type="text" name="title" id="">
                <label for="title">Contenu</label>
                <input type="text" name="description" id="">
                <button type="submit">Enregistrer la tâche</button>
            </form>
        </div>
        <div class="todos">
            <h2>Affichage de la TodoList</h2>
        </div>
    </main>
    <footer>
    </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>