<?php
    include "config.php";

    $sqlB = "select * from img where size > 60";
    $resB = mysqli_query($connect,$sqlB);
    $dataB = mysqli_fetch_assoc($resB);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/fullimage.css">
    <title>Document</title>
</head>
<body>
<div>
    <header>
        <h1>Исходное изображение</h1>
    </header>
        <img src="./img/big/<?= $_GET['image']?>.jpg" alt="">
    <div>
        <a href="<?= $_SERVER['HTTP_REFERER']?>">Назад</a>
    </div>
</div>
</body>
</html>