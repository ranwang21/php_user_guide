<?php

if (isset($_COOKIE['cookieTest'])) {
    setcookie('cookieTest', null, -1);
}

?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <p><a href="cookie-lecture.php">Lecture du cookie</a></p>
    <p>Cette page vient de supprimer le cookie en assignant une valeur vide et une date d'expiration dépassée</p>
</body>

</html>