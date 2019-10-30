<?php
const PRODUCTS = array('Produit A' => 12, 'Produit B' => 23, 'Produit C' => 2);
// const PRODUCTS = array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structure alternative</title>
    <style>
        table {
            width: 200px;
            border: 2px solid black;
        }

        table td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Liste de produits</h1>

    <p>Votre panier contient <?php
        echo count(PRODUCTS);
    ?> produits</p>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
        </tr>
        <?php
            foreach (PRODUCTS as $name => $price) {
                echo '<tr>';
                echo '<td>';
                echo $name;
                echo '</td>';
                echo '<td>';
                echo $price;
                echo '</td>';
                echo '</tr>';
            }
        ?>

    </table>

    <?php
        if (count(PRODUCTS) == 0) {
            echo '<p>Votre panier contient aucun produit.</p>';
        }
    ?>

    <p>Consultez la liste des spéciaux de la semaine</p>
</body>

</html>