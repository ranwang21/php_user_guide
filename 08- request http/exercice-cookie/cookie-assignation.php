<?php

$value = 'Cookie exist';
setcookie('cookieTest', $value, time() + 3600);

?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <p><a href="cookie-lecture.php">Lecture du cookie</a></p>
    <p>
        Cette page vient d'assigner une valeur au cookie
    </p>
</body>

</html>