<?php
$imagesList = scandir('./image');
$imagesToShow = [];
foreach ($imagesList as $filename) {
    $filename_array = explode('.', $filename);
    if ($filename_array[1] === 'png') {
        $imagesToShow[] = $filename;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #carousel {
            width: 300px;
            margin: auto;
        }

        img {
            margin: auto;
        }

        .alert {
            margin-top: 100px;
            margin-bottom: 150px;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container">

        <div class="alert alert-dark" role="alert">
            Galerie qui présente dynamiquement les <?=count($imagesToShow); ?> images.
        </div>

        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <?php
                    foreach ($imagesToShow as $key => $image) {
                        if ($key === 0) {
                            echo "<div class='carousel-item active'>";
                            echo "<img src='./image/".$image."'"." class=d-block alt='alt' />";
                            echo '</div>';
                        }
                        echo "<div class='carousel-item'>";
                        echo "<img src='./image/".$image."'"." class=d-block alt='alt' />";
                        echo '</div>';
                    }
                ?>


                <!-- <div class='carousel-item'>
                        <img src="TODO" class="d-block" alt="...">
                    </div> -->

                <!-- Note: Pour la première image, la structure doit être la suivante: -->

                <!-- <div class='carousel-item active'>
                        <img src="TODO" class="d-block" alt="...">
                    </div> -->


            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>