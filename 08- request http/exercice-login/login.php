<?php
session_start();

const USERNAME = 'abc';
const PASSWORD = '123';

$username = '';
$password = '';

if (isset($_POST['username']) && $_POST['username'] === USERNAME && $_POST['password'] === PASSWORD) {
    $_SESSION['user'] = $_POST['username'];
    header('Location:./index.php');
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
    <form action='./login.php' method='POST'>
        <input name='username' /><br>
        <input name='password' /><br>
        <input type='submit' />
    </form>
</body>

</html>