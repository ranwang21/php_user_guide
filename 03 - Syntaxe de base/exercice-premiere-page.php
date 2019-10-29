<?php
    $name = 'Martin Vachon';
    $age = 45;
    $city = 'Montréal';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice - Première page</title>
</head>

<body>
    <h1>Présentation</h1>

    <p>
        Bonjour je m'appelle <b><?php echo $name; ?></b> et j'ai
        <b><?php echo $age; ?>
        </b> ans.<br>
        Je vis dans la ville de <b><?php echo $city; ?>
        </b>. </p>
</body>

</html>