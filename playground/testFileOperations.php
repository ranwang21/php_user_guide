<?php

$currentDir = getcwd();

echo $currentDir.'<br>';

$fileList = scandir($currentDir);

var_dump($fileList);

echo '<br>';

$newFilePath = $currentDir.DIRECTORY_SEPARATOR.'text.php';

if (file_exists($newFilePath)) {
    $editedFile = fopen($newFilePath, 'w');
    fwrite($editedFile, 'PHP string functions are cool, but the string concatenation is hell.');
    fclose($editedFile);
}

if (file_exists($newFilePath)) {
    $editedFile = fopen($newFilePath, 'a+');
    fwrite($editedFile, 'Its very convenient to create a site with PHP, however');
    fclose($editedFile);
}

if (file_exists($newFilePath)) {
    $editedFile = fopen($newFilePath, 'a+');
    fwrite($editedFile, 'Its very convenient to create a site with PHP, however');
    fclose($editedFile);
}

if (file_exists($newFilePath)) {
    $fileRead = fopen($newFilePath, 'r');
    $fileContent = fread($fileRead, filesize($newFilePath));
    fclose($fileRead);
}

echo $fileRead;
