<?php
$name = '';
$age = '';

if (isset($_GET['name'])) {
    $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
}

if (isset($_GET['age'])) {
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);
}
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <form action="formulaire-post.php" method="get">
        Nom: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit">
    </form>

    <div>
        <p>Résultat de la soumission: </p>
        <ul>
            <li>
                Nom: <?= $name; ?>
            </li>
            <li>
                Age: <?= $age; ?>
            </li>
        </ul>
    </div>
</body>

</html>