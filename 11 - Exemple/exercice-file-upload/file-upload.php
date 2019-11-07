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

if (!empty($_FILES['file-to-upload']['name'])) {
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
    // define the folder and file name to save the uploaded file and the file's name when being saved
    $target = './image/'.$fileName;
    // move the file to image folder
    if (move_uploaded_file($file['tmp_name'], $target)) {
        $message = 'Success!';
    }
}

$imagesList = scandir('./image');
$imagesToShow = [];
foreach ($imagesList as $fileName) {
    $fileNameAndExtensionArray = explode('.', $fileName);
    if (in_array($fileNameAndExtensionArray[1], SUPPORTED_EXTENSIONS, true)) {
        $imagesToShow[] = $fileName;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <div class="container">
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
            <div class="row text-center text-lg-left">

                <?php
                    foreach ($imagesToShow as $image) {
                        echo "<div class='col-lg-3 col-md-4 col-6'>";
                        echo "<img class='img-fluid img-thumbnail' src='".'./image/'.$image."' alt='image'";
                    }
                ?>
        </section>
    </div>
</body>

</html>