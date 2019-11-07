<?php
/**
* Références
* https://www.php.net/manual/en/reserved.variables.files.php
* https://www.php.net/manual/en/features.file-upload.post-method.php
* https://www.php.net/manual/en/features.file-upload.php
* https://cloudinary.com/blog/file_upload_with_php.
*/
const SUPPORTED_EXTENSIONS = ['jpeg', 'jpg', 'png'];

$message = '';

if (isset($_FILES['file-to-upload'])) {
    // get the file
    $file = $_FILES['file-to-upload'];
    // get the uploaded file name
    $fileName = $file['name'];
    // get the file extension
    $extension = explode('.', $file['name'])[1];
    // check if file uploaded has the valid extension
    if (!in_array($extension, SUPPORTED_EXTENSIONS, true)) {
        $message = 'Error: Le fichier doit etre de type image: jpeg, jpg, png';
    }
    // define the folder to save the uploaded file and the file's name when being saved
    $newname = "$fileName.".$extension;
    $target = './image/'.$newname;
    // move the file to image folder
    if (move_uploaded_file($file['tmp_name'], $target)) {
        $message = 'Success!';
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice - File upload</title>
    <style>
        #container {
            width: 90%;
            margin: auto;
        }

        h1 {
            text-align: center;
        }

        .error-message {
            color: red;
        }

        .image-list {
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div id="container">
        <h1>Exercice - File upload</h1>
        <p class="error-message">
            <?= !empty($message) ? $message : ''; ?>
        </p>
        <section>
            <h2>Formulaire</h2>
            <hr>

            <form action='file-upload.php' method="post" enctype="multipart/form-data">
                <label>File: </label>
                <input type='file' name='file-to-upload' id='file-to-upload' />
                <input type="submit" value="Upload" name="submit">
            </form>

        </section>


        <section>
            <h2>Liste de fichier</h2>
            <hr>
            <div>
                <!-- TODO: afficher la liste de fichier -->
            </div>
        </section>
    </div>
</body>

</html>