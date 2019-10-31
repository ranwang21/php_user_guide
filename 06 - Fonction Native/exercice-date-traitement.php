<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}
$dateTime = date_create();

showTitle('Exercice 1');
// je ne comprends pas qu'est ce que '+0000' dans la maquette
echo  date_format($dateTime, 'D, d M Y H:i:s +u');

showTitle('Exercice 2');
echo  date_format($dateTime, 'd');

showTitle('Exercice 3');
echo  date_format($dateTime, 'm');
echo '<br>';
echo date_format($dateTime, 'F');

showTitle('Exercice 4');
echo date_format($dateTime, 'Y');

showTitle('Exercice 5');
echo date_format($dateTime, 'd m Y');

showTitle('Exercice 6 (Ajoute 1 mois à la date courante)');
$dateInterval = date_interval_create_from_date_string('+ 1 month');
$addedDateTime = date_add($dateTime, $dateInterval);
echo date_format($addedDateTime, 'D, d M Y H:i:s +u');

showTitle('Exercice 7 (Nombre de jour écoulé depuis le 31 décembre 1973)');
$dateTime = date_create();
$time_since = date_create('1973-12-31');
$time_diff_from_now = $dateTime->diff($time_since);
echo $time_diff_from_now->format('%a jours');

showTitle('Exercice 8');
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
echo strftime('%A %d %B %Y');
