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
            $db = new PDO('mysql:host=localhost:3307;dbname=ecole', 'root');
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
function get_all_professors()
{
    // instantiate connection and PDO object
    $db = Connection::getConnection();
    // write sql command
    $sql = 'SELECT Nom, AnneeAffectation, Rang FROM profs WHERE AnneeAffectation >= 2000 ORDER BY AnneeAffectation DESC';
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

$profs = get_all_professors();

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
    <table>
        <tr>
            <th>Nom</th>
            <th>Annee affectation</th>
            <th>Rang</th>
        </tr>
        <?php
            foreach ($profs as $prof) {
                echo '<tr>';
                echo '<td>';
                echo $prof['Nom'];
                echo '</td>';
                echo '<td>';
                echo $prof['AnneeAffectation'];
                echo '</td>';
                echo '<td>';
                echo $prof['Rang'];
                echo '</td>';
                echo '</tr>';
            }
        ?>
        <!-- todo -->
    </table>
</body>

</html>