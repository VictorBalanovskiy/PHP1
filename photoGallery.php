<?php
echo "<link rel='stylesheet' href='./styles/photoGallery.css'>";
$christmasTrees = scandir("img");
// print_r($photo);

for($i=2; $i < count($christmasTrees); $i++) {?>
    <a href="fullimage.php?img=<?= $christmasTrees[$i]?>"><img class="christmasImg" src="img/<?= $christmasTrees[$i]?>" alt=""></a>
<?php
    }