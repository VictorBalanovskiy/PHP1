<?php
    echo "<link rel='stylesheet' href='./styles/index.css'>";
?>

<header>
    <h1>Новогодняя фотогалерея</h1>
</header>

<main>
    <div class="gallery-div"><?php include('photoGallery.php')?></div>
    <div class="form-div"><?php include('form.php')?></div>
</main>

<footer>
    <p>
        <?= date('d.m.Y') ?>
    </p>
</footer>

