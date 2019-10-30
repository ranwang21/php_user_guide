<?php

$users = array(
    array('Pierre', 22, '123 rue A', 'aa@ser.com', array('programmation' => 5, 'enseignement' => 2)),
    array('Julie', 65, '123 rue B', 'bb@ser.com', array('électronique' => 46)),
    array('Martin', 45, '123 rue C', 'cc@ser.com', array('programmation' => 21, 'enseignement' => 1)),
    array('Mélanie', 41, '123 rue D', 'dd@ser.com', array('soudure' => 12, 'nutrition' => 6, 'restoration' => 1)),
);

// Écrire le code pour produire le résultat suivant:

// Résultat:
// Pierre, 22, 123 rue A, aa@ser.com (programmation pendant 5 ans, enseignement pendant 2 ans, )
// Julie, 65, 123 rue B, bb@ser.com (électronique pendant 46 ans, )
// Martin, 45, 123 rue C, cc@ser.com (programmation pendant 21 ans, enseignement pendant 1 ans, )
// Mélanie, 41, 123 rue D, dd@ser.com (soudure pendant 12 ans, nutrition pendant 6 ans, restoration pendant 1 ans, )

echo 'Resultat : ';
foreach ($users as $user) {
    echo $user[0].', '.$user[1].', '.$user[2].', '.$user[3].' (';
    foreach ($user[4] as $job => $year) {
        echo $job.' pendant '.$year.' ans, ';
    }
    echo ' )';
    echo '<br>';
}
