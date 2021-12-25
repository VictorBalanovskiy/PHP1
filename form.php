<?php
    echo "<link rel='stylesheet' href='./styles/form.css'>";
?>

<form action="server.php" method="post" enctype="multipart/form-data">
    <p>Выберите файл для загрузки</p>
    <div class="input-container">
        <input type="file" name="photo" accept="image/*">
        <input type="submit" value="Загрузить">
    </div>
</form>