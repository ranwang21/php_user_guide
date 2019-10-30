<?php
/* Tableau des mois de l'année */
$mois_coul = array(
    'Janvier' => 'blue',
    'Février' => 'white',
    'Mars' => 'Red',
    'Avril' => 'Yellow',
    'Mai' => 'Grey',
    'Juin' => 'Lime',
    'Juillet' => 'lightblue',
    'Août' => 'fuchsia',
    'Septembre' => 'lightgrey',
    'Octobre' => 'olive',
    'Novembre' => 'pink',
    'Décembre' => 'purple',
);

/**
 * Print the table content.
 *
 * Params:
 *
 * @$array array of entries
 * @$layout bool, vertical or horizontal
 */
function createTableItems($array, $layout)
{
    if ($layout) {
        echo '<ul>';
        foreach ($array as $month => $color) {
            echo "<li style='display:block;width:10%;background-color:".$color."'>".$month.'</li>';
        }
        echo '</ul>';
    } else {
        echo '<ul>';
        foreach ($array as $month => $color) {
            echo "<li style='display: inline;background-color:".$color."'>".$month.'</li>';
        }
        echo '</ul>';
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Tableau mois</title>
    <style>
        .container {
            width: 80%;
            border: 1px solid brown;
            margin: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <header>
            <h1>Tableau mois</h1>
        </header>
        <main>
            <div class="container">
                <!--Première table -->
                <table>
                    <?php
                        createTableItems($mois_coul, true);
                    ?>
                </table>
            </div>
            <div class="container">
                <!--Seconde table -->
                <table>
                    <?php
                        createTableItems($mois_coul, false);
                    ?>
                </table>
            </div>
        </main>
        <footer>
        </footer>
    </div>
</body>

</html>