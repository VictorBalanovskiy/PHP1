<?php
include "config.php";

$sql = "select * from img";
$res = mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Happy New Year</title>
</head>
<body>
    <header>
        <h1>Новогодняя фотогалерея</h1>
    </header>

    <main>
        <div class="gallery-div"><?php include('images_small.php')?></div>
    </main>

    <footer>
        <p>
            <?= date('d.m.Y') ?>
        </p>
    </footer>
</body>
</html>