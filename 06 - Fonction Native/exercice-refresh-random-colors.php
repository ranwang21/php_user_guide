<?php
function color()
{
    return rand(0, 255);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1">
    <title>Document</title>
</head>

<style>
    .block {
        width: 120px;
        height: 120px;
    }
</style>

<body>

    <?php
        for ($i = 0; $i < 2; ++$i) {
            echo "<div class='block' style='background-color:rgb(".color().','.color().','.color()."'></div>";
        }
    ?>
</body>

</html>