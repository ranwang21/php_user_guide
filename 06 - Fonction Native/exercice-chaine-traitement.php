<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

const SENTENCE = 'Une phrase qui doit être affiché en mettant un mot par ligne';

showTitle('Exercice 1');
$splited_sentence = explode(' ', SENTENCE);
foreach ($splited_sentence as $word) {
    echo $word.'<br>';
}

showTitle('Exercice 2');
$reverted_sentence = array_reverse($splited_sentence);
foreach ($reverted_sentence as $word) {
    echo $word.'<br>';
}

showTitle('Exercice 3');
echo 'Nombre de mots : '.count($splited_sentence);

showTitle('Exercice 4');
echo 'Nombre de caracteres : '.strlen(SENTENCE);

showTitle('Exercice 5');
$sentence_without_spaces = implode($splited_sentence);
echo 'Nombre de caracteres sans espaces : '.strlen($sentence_without_spaces);

showTitle('Exercice 6');
echo strtoupper(SENTENCE);

showTitle('Exercice 7');
array_walk($splited_sentence, function ($word, $key) {
    echo ucfirst($word).' ';
});

showTitle('Exercice 8');
array_walk($splited_sentence, function ($word, $key) {
    echo $word.'f ';
});
