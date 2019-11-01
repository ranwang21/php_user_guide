<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

$users = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ),
);

showTitle("Exercice 1 (Afficher les prénoms sans effectué d'itération)");
array_walk($users, function ($user) {
    echo $user['first_name'].', ';
});

showTitle('Exercice 2 (Afficher la valeur de l\'élément différent entre les deux collections $firstArray et $secondArray sans exécuter d\'itération)');

$firstArray = array('a' => 'auto', 'b' => 'moto', 'c' => 'avion');
$secondArray = array('a' => 'auto', 'b' => 'moto');

$array_diff = array_diff($firstArray, $secondArray);
array_walk($array_diff, function ($value) {
    echo $value;
});

showTitle('Exercice 3 (Inverser les clefs et les valeurs de la collection $firstArray sans exécuter d\'itération)');
$new_array = array_flip($firstArray);
var_dump($new_array);
