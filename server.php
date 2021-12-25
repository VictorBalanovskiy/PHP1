<?php
echo "<link rel='stylesheet' href='./styles/server.css'>";
$path = "img/{$_FILES['photo']['name']}";
if(move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
    echo "{$_FILES['photo']['name']} успешно загружен!";
}
?>
<br>
<a href="<?= $_SERVER['HTTP_REFERER']?>">Назад</a>