<?php
    echo "<link rel='stylesheet' href='./styles/fullimage.css'>";
?>
<div>
    <h1>Исходное изображение</h1>
    <img src="img/<?= $_GET['img']?>" alt="">
    <div>
        <a href="<?= $_SERVER['HTTP_REFERER']?>">Назад</a>
    </div>
</div>