<?php
session_start();

$action = '';
$fruit = '';
$numberOfApples = $numberOfPears = $numbreOfBananas = 0;

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if (isset($_GET['fruit'])) {
    $fruit = $_GET['fruit'];
}

function addOne($fruit)
{
    if (isset($_SESSION[$fruit])) {
        $_SESSION[$fruit] = intval($_SESSION[$fruit]) + 1;
    } else {
        $_SESSION[$fruit] = 1;
    }
}

function deleteOne($fruit)
{
    if (isset($_SESSION[$fruit]) && intval($_SESSION[$fruit]) >= 1) {
        $_SESSION[$fruit] = intval($_SESSION[$fruit]) - 1;
    } else {
        $_SESSION[$fruit] = 0;
    }
}

function clearOne($fruit)
{
    $_SESSION[$fruit] = 0;
}

function clearSessions()
{
    $_SESSION['apple'] = 0;
    $_SESSION['pear'] = 0;
    $_SESSION['banana'] = 0;
}

if (isset($action) && isset($fruit)) {
    switch ($action) {
        case 'add':
        addOne($fruit);
        break;
        case 'delete':
        deleteOne($fruit);
        break;
        case 'clear':
        clearOne($fruit);
        break;
        case 'clearcart':
        clearSessions();
        break;
    }
}

if (isset($_SESSION['apple'])) {
    $numberOfApples = intval($_SESSION['apple']);
}

if (isset($_SESSION['pear'])) {
    $numberOfPears = intval($_SESSION['pear']);
}

if (isset($_SESSION['banana'])) {
    $numbreOfBananas = intval($_SESSION['banana']);
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
    <form action="exercice-panier.php" method="GET">
        <table>
            <tr>
                <th>Ajouter au panier</th>
                <th>Enlever du panier</th>
                <th>Enlever</th>
                <th>Nombre</th>
            </tr>
            <tr>
                <td><a href="exercice-panier.php?action=add&fruit=apple">Une pomme</a></td>
                <td><a href="exercice-panier.php?action=delete&fruit=apple">Une pomme</a></td>
                <td><a href="exercice-panier.php?action=clear&fruit=apple">Toutes les pommes</a></td>
                <td><?=$numberOfApples; ?>
                </td>
                </td>
            </tr>
            <tr>
                <td><a href="exercice-panier.php?action=add&fruit=pear">Une poire</a></td>
                <td><a href="exercice-panier.php?action=delete&fruit=pear">Une poire</a></td>
                <td><a href="exercice-panier.php?action=clear&fruit=pear">Toutes les poires</a></td>
                <td><?=$numberOfPears; ?>
                </td>
            </tr>
            <tr>
                <td><a href="exercice-panier.php?action=add&fruit=banana">Une banane</a></td>
                <td><a href="exercice-panier.php?action=delete&fruit=banana">Une banane</a></td>
                <td><a href="exercice-panier.php?action=clear&fruit=banana">Toutes les bananes</a></td>
                <td><?=$numbreOfBananas; ?>
                </td>
            </tr>
            <tr>
                <td><a href="exercice-panier.php?action=clearcart">Vider le panier</a></td>
            </tr>
        </table>
    </form>
</body>

</html>