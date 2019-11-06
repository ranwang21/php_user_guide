<?php

/**
 * Class Connection
 * All functions about connection to database.
 */
class Connection
{
    /**
     * @return PDO
     */
    public static function getConnection()
    {
        try {
            $db = new PDO('mysql:host=localhost:3307;dbname=ecole;charset=utf8', 'root');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Database connection error: '.$e->getMessage();
            exit;
        }

        return $db;
    }
}

/**
 * retrive all professors info.
 */
function get_all_cities()
{
    // instantiate connection and PDO object
    $db = Connection::getConnection();
    // write sql command
    $sql = 'SELECT DISTINCT ville FROM profs ORDER BY ville';
    // prepare the statement and execute
    try {
        // get prepared statement
        $results = $db->prepare($sql);
        $results->execute();
    } catch (Exception $e) {
        echo 'Error: '.$e->getMessage().'</br>';
        exit;
    }

    return $results->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * retrive all professors from a city.
 */
function get_all_professors_from_a_city($city)
{
    // instantiate connection and PDO object
    $db = Connection::getConnection();
    // write sql command
    $sql = 'SELECT Nom FROM profs WHERE ville = ?';
    // prepare the statement and execute
    try {
        // get prepared statement
        $results = $db->prepare($sql);
        $results->bindValue(1, $city, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo 'Error: '.$e->getMessage().'</br>';
        exit;
    }

    return $results->fetchAll(PDO::FETCH_ASSOC);
}

$cities = get_all_cities();

if (isset($_POST['city'])) {
    $profs = get_all_professors_from_a_city($_POST['city']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action='exercice-ecole-ville.php' method='post'>
        <label for='city'>Selectionnez une ville</label>
        <select id='city' name='city'>
            <?php
                foreach ($cities as $key => $city) {
                    echo "<option value='".$city['ville']."' >".$city['ville'].'</option>';
                }
            ?>
        </select>
        <input type='submit' />

        <?php
            if (isset($profs)) {
                echo '<ul>';
                foreach ($profs as $prof) {
                    echo '<li>';
                    echo $prof['Nom'];
                    echo '</li>';
                }
                echo '</ul>';
            }
        ?>
    </form>
</body>

</html>