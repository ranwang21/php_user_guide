<?php
session_start();

    if (!isset($_SESSION['user'])) {
        header('Location:./login.php');
        exit;
    }

    if (isset($_GET['action']) && $_GET['action'] === 'logout') {
        unset($_SESSION['user']);
        header('Location:./login.php');
        exit;
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
    <h1>Page secrete accessible seulement avec authentification</h1>
    <a href='./index.php?action=logout'>logout</a>
</body>

</html>