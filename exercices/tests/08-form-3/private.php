<?php

    include_once './includes/config.php';
    
    if(empty($_SESSION['user']))
    {
        header('Location:login.php');
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page privée</title>
</head>
<body>
    <h1>Page privée</h1>
    <p>Bonjour <?= $_SESSION['user']->login ?></p>
    <a href="disconnect.php">Disconnect</a>
</body>
</html>