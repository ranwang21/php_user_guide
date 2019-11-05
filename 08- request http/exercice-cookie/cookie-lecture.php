<?php

if (isset($_COOKIE['cookieTest'])) {
    $cookie = $_COOKIE['cookieTest'];
}

?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <p><a href="cookie-assignation.php">Assignation du cookie</a></p>
    <p><a href="cookie-suppression.php">Suppression du cookie</a></p>
    <p>
        Valeur du cookie:<?=
            isset($cookie) ? $cookie : ' pas de cookie.';
        ?>
    </p>
</body>

</html>