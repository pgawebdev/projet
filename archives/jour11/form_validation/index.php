<?php

if (!empty($_REQUEST)){

$username = $_REQUEST['username'];
$usermail = $_REQUEST['useremail'];
$userpwd = $_REQUEST['pwd'];
$pwdconfirm = $_REQUEST['confirm-pwd'];

print_r($_REQUEST);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="user-name">Nom</label>
        <input type="text" name="username" id="user-name" pattern:[A-ZA-z] required>
        <label for="email">Email</label>
        <input type="email" name="useremail" id="user-mail" required>
        <label for="password">Mot de passe</label>
        <input type="password" name="pwd" id="user-pwd" minlenght="8" required>
        <label>Confirm</label>
        <input type="password" name="confirm-pwd" id="user-confirm" required>
        <input type="submit" value="Log in">
    </form>
    
</body>
</html>