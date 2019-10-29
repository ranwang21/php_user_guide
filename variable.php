<?php

class Person
{
    public $name = 'Martin';
}

$variable_integer = 4195;
$variable_double = 3.14159;
$variable_string = 'une chaîne de caractères';
$variable_object = new Person();
$variable_array = array('premier', 'deuxième', 'troisième');
$variable_null = null;
$variable_boolean = true;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Variable</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        table td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h2>Affiche tout les types disponible</h2>
    <table>
        <tr>
            <th>Type</th>
            <th>Description</th>
            <th>Valeur</th>
            <th>var_dump()</th>
        </tr>
        <tr>
            <td>Integers</td>
            <td></td>
            <td>
                <?=$variable_integer; ?>
            </td>
            <td>
                <?=var_dump($variable_integer); ?>
            </td>
        </tr>
        <tr>
            <td>Float (Doubles)</td>
            <td></td>
            <td>
                <?=$variable_double; ?>
            </td>
            <td>
                <?=var_dump($variable_double); ?>
            </td>
        </tr>
        <tr>
            <td>Strings</td>
            <td></td>
            <td>
                <?=$variable_string; ?>
            </td>
            <td>
                <?=var_dump($variable_string); ?>
            </td>
        </tr>
        <tr>
            <td>Objects</td>
            <td></td>
            <td>Ne peut être converti en chaîne de caractères</td>
            <td>
                <?=var_dump($variable_object); ?>
            </td>
        </tr>
        <tr>
            <td>Arrays</td>
            <td></td>
            <td>Ne peut être converti en chaîne de caractères</td>
            <td>
                <?=var_dump($variable_array); ?>
            </td>
        </tr>
        <tr>
            <td>Booleans</td>
            <td>Deux valeurs possibles: true, false</td>
            <td>
                <?=$variable_boolean; ?>
            </td>
            <td>
                <?=var_dump($variable_boolean); ?>
            </td>
        </tr>
        <tr>
            <td>NULL</td>
            <td>Une seul valeur possible</td>
            <td>
                <?=$variable_null; ?>
            </td>
            <td>
                <?=var_dump($variable_null); ?>
            </td>
        </tr>
        <tr>
            <td>Resources</td>
            <td>Contient une référence à une donnée externe à PHP</td>
            <td>Ne peut être converti en chaîne de caractères</td>
            <td></td>
        </tr>
    </table>
</body>

</html>