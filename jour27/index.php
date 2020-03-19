<?php
 require_once 'lib/functions.php';
 $pdo = getConnection();
handleForm($_FILES);
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Uploader une immage</title>
    </head>
    <body>
        <header>
        </header>
            <form method="post" enctype="multipart/form-data">
                <label>
                <input type="file" name="fileUpload" id="file-upload">
                </label>
                <button type="submit" name="submit">Save</button>
            </form>
        <main>
        </main>
        <footer>
        </footer>
</body>
</html>