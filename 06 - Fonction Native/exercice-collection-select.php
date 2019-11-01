<?php
const VALUES = array('A' => 12, 'B' => 2, 'C' => 56, 'D' => 9);
const MAX_VALUE = 10;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection select</title>
</head>

<body>
    <select name="selectElement" id="selectElement">
        <?php
            foreach (VALUES as $key => $value) {
                echo "<option value='".$value."'>".$key.'</option>';
            }
        ?>
    </select>
</body>

</html>