<?php
    $valeur = 'PHP';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice - Variable</title>
</head>

<body>
    <h1>Production du HTML a partir de variable</h1>
    <ol>
        <li>
            <?php echo $valeur; ?>
        </li>
        <li>
            <?= $valeur; ?>
        </li>
        <li>
            <?php echo "$valeur"; ?>
        </li>
        <li>
            <?= "$valeur"; ?>
        </li>
        <li>
            <?php print_r($valeur); ?>
        </li>
        <li>
            <?php
                function printValeur($valeur)
                {
                    echo $valeur;
                }
                printValeur($valeur);
            ?>
        </li>
    </ol>
</body>

</html>