<?php

require_once './db.php';

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style lang="scss">
        .movie-poster {
            width: 150px;
            aspect-ratio: 9/16;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <?php
    include './Views/partials/header.php';
    ?>

    <div class="container py-5">
        <ul class="list-group">
            <?php
            foreach ($movies as $movie) {
                ?>
                <li class="list-group-item d-flex align-items-center gap-5">
                    <img class="movie-poster" src="<?= $movie->poster ?>" alt="">
                    <p>
                        <?= $movie->getStringDetails() ?>
                    </p>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>