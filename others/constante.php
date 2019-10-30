<?php

define("CONSTANT_NUMBER", 50);
define("CONSTANT_DOUBLE", 3.14159);
define("CONSTANT_STRING", "bonjour");
define("CONSTANT_BOOLEAN", true);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Constant</title>

        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <h2>Affiche tout les types disponible</h2>
        <table>
            <tr>
                <th>Constant</th><th>echo</th><th>var_dump</th>
            </tr>
            <tr>
                <td>CONSTANT_NUMBER</td><td><?=CONSTANT_NUMBER ?></td><td><?=var_dump(CONSTANT_NUMBER) ?></td>
            </tr>
            <tr>
                <td>CONSTANT_DOUBLE</td><td><?=CONSTANT_DOUBLE ?></td><td><?=var_dump(CONSTANT_DOUBLE) ?></td>
            </tr>
            <tr>
                <td>CONSTANT_STRING</td><td><?=CONSTANT_STRING ?></td><td><?=var_dump(CONSTANT_STRING) ?></td>
            </tr>
            <tr>
                <td>CONSTANT_BOOLEAN</td><td><?=CONSTANT_BOOLEAN ?></td><td><?=var_dump(CONSTANT_BOOLEAN) ?></td>
            </tr>
        </table>

        <h2>Affiche tout les constantes disponible</h2>
        <p>Les constantes que nous avons définit sont au bas complètement</p>
        <pre>
            <?=print_r(get_defined_constants(true)); ?>
        </pre>
    </body>
</html>