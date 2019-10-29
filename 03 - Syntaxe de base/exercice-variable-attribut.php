<?php

const HOME = 'Accueil';
const PRODUCT = 'Nos produits';
const ABOUT = 'À propos';
const IDEA = 'Idées cadeaux';

$arr = [HOME, PRODUCT, ABOUT, IDEA];

// Le nom de l'item de menu qui doit être actif
$selected = ABOUT;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Variable attribut</title>
    <style>
        #navigation ul {
            width: 150px;
        }

        .menu-item {
            background-color: #e1f4f3;
            color: #0000cc;
        }

        .selected {
            background-color: #fea799;
        }
    </style>
</head>

<body>
    <h1>Affichage d'un item actif dans le menu</h1>
    <nav id="navigation">
        <ul>
            <?php
                foreach ($arr as $key => $item) {
                    if ($item == $selected) {
                        echo '<li class="menu-item selected">'.$item.'</li>';
                    } else {
                        echo '<li class="menu-item">'.$item.'</li>';
                    }
                }
            ?>
        </ul>
    </nav>
</body>

</html>