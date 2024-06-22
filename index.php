<?php
include __DIR__ . "/models/movies.php";
include __DIR__ . "/models/store.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>MOVIES</h1>

    <ul>
        <?php foreach ($movies as $movie) { ?>
            <li><?= $movie->descrizione() ?></li>
        <?php } ?>
    </ul>

    <?php
    foreach ($images as $image) {
        echo '<img src="' . $image . '" alt="">';
    }
    ?>


</body>

</html>