<?php

const SINGLE_OPTIONS = ['option1' => 'Option 1', 'option2' => 'Option 2', 'option3' => 'Option 3'];
const MULTIPLE_OPTIONS = ['option1' => 'Option 1', 'option2' => 'Option 2', 'option3' => 'Option 3', 'option4' => 'Option 4', 'option5' => 'Option 5'];

const CHECKBOXS = [
    ['id' => 'inputCheckbox1', 'label' => 'Example checkbox1', 'value' => 'checkbox1'],
    ['id' => 'inputCheckbox2', 'label' => 'Example checkbox2', 'value' => 'checkbox2'],
];

const RADIOS = [
    ['id' => 'inputRadio1', 'value' => 'option1', 'label' => 'Premier'],
    ['id' => 'inputRadio2', 'value' => 'option2', 'label' => 'Deuxième'],
    ['id' => 'inputRadio3', 'value' => 'option3', 'label' => 'Troisième'],
];

$formFields = [
    'userName' => [
        'element' => 'input',
        'type' => 'text',
        'id' => 'userName',
        'label' => 'Nom',
        'attributes' => [],
        'values' => null,
        'isValid' => true,
        'errorMessage' => 'Message de validation',
    ],
    'userAge' => [
        'element' => 'input',
        'type' => 'number',
        'id' => 'userAge',
        'label' => 'Age',
        'attributes' => ['min="18"', 'max="150"'],
        'values' => null,
        'isValid' => true,
        'errorMessage' => 'Message de validation',
    ],
    'userEmail' => [
        'element' => 'input',
        'type' => 'email',
        'id' => 'userEmail',
        'label' => 'Courriel',
        'attributes' => [],
        'values' => null,
        'isValid' => true,
        'errorMessage' => 'Message de validation',
    ],
    'userBirthday' => [
        'element' => 'input',
        'type' => 'date',
        'id' => 'userBirthday',
        'label' => 'Date d&apos;anniversaire',
        'attributes' => [],
        'values' => null,
        'isValid' => true,
        'errorMessage' => 'Message de validation',
    ],
    'selectSingle' => [
        'element' => 'select',
        'id' => 'selectSingle',
        'label' => 'Sélection simple',
        'attributes' => [],
        'options' => SINGLE_OPTIONS,
        'values' => null,
        'isValid' => true,
        'errorMessage' => 'Message de validation',
    ],
    'selectMultiple[]' => [
        'element' => 'select',
        'id' => 'selectMultiple',
        'label' => 'Sélection multiple',
        'attributes' => ['multiple="true"'],
        'options' => MULTIPLE_OPTIONS,
        'values' => null,
        'isValid' => true,
        'errorMessage' => 'Message de validation',
    ],
    'userRadio' => [
        'element' => 'radio',
        'id' => 'userRadio',
        'label' => 'Radios',
        'attributes' => [],
        'radios' => RADIOS,
        'values' => null,
        'isValid' => true,
        'errorMessage' => 'Message de validation',
    ],
    'userCheckbox[]' => [
        'element' => 'checkbox',
        'id' => 'userCheckbox',
        'label' => 'Checkbox',
        'attributes' => [],
        'checkboxs' => CHECKBOXS,
        'values' => null,
        'isValid' => true,
        'errorMessage' => 'Message de validation',
    ],
    'userMessage' => [
        'element' => 'textarea',
        'id' => 'userMessage',
        'label' => 'Message',
        'attributes' => [],
        'values' => null,
        'isValid' => true,
        'errorMessage' => 'Message de validation',
    ],
];

// echo out attributes
function writeAttributes($element)
{
    if (isset($element['attributes'])) {
        foreach ($element['attributes'] as $attribute) {
            echo ' '.$attribute;
        }
    }
}

// know the http method, show second part only on post
$method = $_SERVER['REQUEST_METHOD'];

// form validation
function validate($fieldName, $fieldValue)
{
    if (!isset($filedName) || !isset($fieldValue)) {
        return false;
    } else {
        switch ($fieldName) {
            case 'userName':
            strlen($fieldValue) <= 50 && strlen($fieldValue) ? true : false;
            break;
            case 'userAge':
            $fieldValue >= 18 && $fieldValue <= 180 ? true : false;
            break;
            case 'userEmail':
            strpos('@') !== false ? true : false;
            break;
            case 'userBirthday':
            $fieldValue >= 18 ? true : false;
            break;
            case 'selectMultiple':
            count($fieldValue) >= 2 ? true : false;
            break;
            case 'userRadio':
            count($fieldValue) >= 2 ? true : false;
            break;
        }
    }
}

// show text input element
function showInput($field)
{
    echo "<div class='form-group'>";
    echo "<label for='".$field['id']."' >".$field['label'].':</label>';
    echo '<'.$field['element']." class='form-control' type='".$field['type']."' id='".$field['id']."' name='".$field['id']."' ";
    if ($field['isValid']) {
        echo 'required />';
    }
    echo '</div>';
}

// show select input
function showSelectInput($field)
{
    echo "<div class='form-group'>";
    echo "<label for='".$field['id']."'>".$field['label'].'</label>';
    if ($field['label'] === 'Sélection simple') {
        echo '<'.$field['element']." class='form-control' name='".$field['id']."'>";
        foreach (SINGLE_OPTIONS as $key => $value) {
            echo "<option value='".$value."' ";
            writeAttributes($field);
            echo '>'.$key.'</option>';
        }
    } elseif ($field['label'] === 'Sélection multiple') {
        echo '<'.$field['element']." multiple class='form-control' name='".$field['id']."[]'>";
        foreach (MULTIPLE_OPTIONS as $key => $value) {
            echo "<option value='".$value."' ";
            writeAttributes($field);
            echo '>'.$key.'</option>';
        }
    }
    echo '<'.$field['element'].'/>';

    echo '</div>';
}

// show textarea
function showTextArea($field)
{
    echo "<div class='form-group'>";
    echo "<label for='".$field['id']."'>".$field['label'].'</label>';
    echo '<'.$field['element']." class='form-control' id='".$field['id']."' name='".$field['id']."'>";
    echo '</'.$field['element'].'>';
    echo '</div>';
}

// show radio elemts
function showRadio($field)
{
    echo '<label>'.$field['label'].': </label>';
    foreach (RADIOS as $radio) {
        echo "<div class='form-group'>";
        echo "<div class='form-check'>";
        echo "<input type='checkbox' class='form-check-input' value='".$radio['value']."' id='".$radio['id']."' name='".$field['id']."[]'/>";
        echo "<label for='".$radio['id']."'>".$radio['label'].': </label>';
        echo '</div>';
        echo '</div>';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <hr>
    <div class="container">

        <div class="alert alert-primary" role="alert">
            Exercice - formulaire
        </div>

        <form action="exercice-formulaire.php" method="post">
            <?php
                foreach ($formFields as $field) {
                    switch ($field['element']) {
                        case 'input':
                        showInput($field);
                        break;
                        case 'select':
                        showSelectInput($field);
                        break;
                        case 'textarea':
                        showTextArea($field);
                        break;
                        case 'radio':
                        showRadio($field);
                        break;
                    }
                }
            ?>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>

        <div>
            <hr>



            <!-- La contenue ci-dessous s'affiche seulement lorsque les données du formulaire sont valides -->

            <div class="alert alert-primary" role="alert">
                Résultat de la soumission
            </div>

            <ul class="list-group">
                <li class="list-group-item">

                    <!-- La valeur de chacun des champs du formulaire est affichée en utilisant des LI -->

                </li>
            </ul>

        </div>

    </div>
    <hr>
</body>

</html>