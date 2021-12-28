<script>
    function count(id) {
        let i = document.getElementById("a_"+id).value;
        location.href = "server.php?action=count&id="+id;
        console.log("count");
        console.log(id);
    }
</script>

<?php
include "config.php";

$sqlS = "SELECT * FROM img WHERE size < 60";
$sqlB = "SELECT * FROM img WHERE size > 60";
$resS = mysqli_query($connect,$sqlS);
$resB = mysqli_query($connect,$sqlB);

while($dataS = mysqli_fetch_assoc($resS) and $dataB = mysqli_fetch_assoc($resB)):?>
    <section>
        <a href="fullimage.php?image=<?= $dataB['id']?>" id="a_<?= $dataS['id']?>" onclick="count(<?= $dataS['id']?>)"><img src="<?= $dataS['path']?>" id="<?= $dataS['id']?>" alt="<?= $dataS['title']?>"></a>
        <p class="count">Просмотров: <?= $dataS['count']?></p>
    </section>
<?php
endwhile;
?>


