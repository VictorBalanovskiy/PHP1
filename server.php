<?php

include "./config.php";

$action = $_GET['action'];
$id = $_GET['id'];
var_dump($action);
var_dump($id);
if($action == "count"){
    $sql = "UPDATE img SET count = (count + 1) WHERE id=$id";
    if(mysqli_query($connect,$sql)){
        header("Location: index.php");
}
}