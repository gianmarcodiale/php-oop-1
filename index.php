<?php

require_once __DIR__ . '/db.php';

// var_dump($movies);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Star Wars Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php foreach ($movies as $movie) : ?>
                <div class="col">
                    <div class="card">
                        <img src="<?= $movie->poster ?>" alt="" class="img-fluid">
                        <div class="card-text p-3">
                            <h4><?= $movie->title ?></h4>
                            <h6><?= $movie->year ?></h6>
                            <p><?= $movie->genre ?></p>
                            <p><?= $movie->duration ?>''</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>