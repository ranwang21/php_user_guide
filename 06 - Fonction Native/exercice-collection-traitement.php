<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

$colors = array(
    'rouge',
    'bleu',
    'noir',
    'vert',
    'gris',
);

showTitle('Exercice 1');

array_shift($colors);
echo "<ul style='list-style:none'>";
array_walk($colors, function ($color) {
    echo '<li>';
    echo $color;
    echo '</li>';
});
echo '</ul>';

showTitle('Exercice 2');

echo "<ul style='list-style:none'>";
array_walk($colors, function ($color) {
    echo '<li>';
    echo strtoupper($color);
    echo '</li>';
});
echo '</ul>';

showTitle('Exercice 3');

$otherColors = array(
    'vert',
    'bleu',
    'noir',
);

$mergedArray = array_merge($colors, $otherColors);

echo "<ul style='list-style:none'>";
array_walk($mergedArray, function ($color) {
    echo '<li>';
    echo $color;
    echo '</li>';
});
echo '</ul>';
