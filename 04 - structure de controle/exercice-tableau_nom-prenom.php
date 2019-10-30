<?php

const USERS = array(
array('Pierre', 22, '123 rue A', 'aa@ser.com', array('programmation' => 5, 'enseignement' => 2)),
array('Julie', 65, '123 rue B', 'bb@ser.com', array('électronique' => 46)),
array('Martin', 45, '123 rue C', 'cc@ser.com', array('programmation' => 21, 'enseignement' => 1)),
array('Mélanie', 41, '123 rue D', 'dd@ser.com', array('soudure' => 12, 'nutrition' => 6, 'restoration' => 1)),
);

// Couleur noire lorsque l'âge est exactement égal la référence, vert lorsque supérieur et bleu lorsque inférieur
const AGE_REFERENCE = 45;

// Couleur jaune lorsque le nombre d'années d'expérience est égal ou supérieur a MINIMUM_EXPERIENCE
const MINIMUM_EXPERIENCE = 5;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice - Tableau</title>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
            margin: auto;
        }

        ul {
            list-style-type: none;
            padding: 5px;
        }

        .age-reference {
            background-color: black;
            color: white;
        }

        .age-over {
            background-color: green;
            color: white;
        }

        .age-under {
            background-color: blue;
            color: white;
        }

        .experience-invalid {
            background-color: white;
            color: black;
        }

        .experience-valid {
            background-color: yellow;
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Age</th>
                <th>Adresse</th>
                <th>Courriel</th>
                <th>Emplois</th>
            </tr>

            <?php
                    foreach (USERS as $user) {
                        // get user age
                        $user_age = $user[1];
                        // switch row background color based on user age
                        if ($user_age < AGE_REFERENCE) {
                            echo "<tr class='age-under'>";
                        } elseif ($user_age = AGE_REFERENCE) {
                            echo "<tr class='age-reference'>";
                        } else {
                            echo "<tr class='age-over'>";
                        }
                        // Iterate user details
                        foreach ($user as $user_detail) {
                            echo '<td>';
                            if (!is_array($user_detail)) {
                                echo $user_detail;
                            } else {
                                foreach ($user_detail as $job => $years) {
                                    if ($years > AGE_REFERENCE) {
                                        echo "<span class='age-over'>";
                                    } elseif ($years = AGE_REFERENCE) {
                                        echo "<span class='age-reference'>";
                                    } else {
                                        echo "<span class='age-under'>";
                                    }

                                    echo $job.' : '.$years.' ans<br>';
                                    echo '</span>';
                                }
                            }
                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                ?>
        </thead>

        <tbody>

        </tbody>

        <tfoot>

        </tfoot>
    </table>

</body>

</html>