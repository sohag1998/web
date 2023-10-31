<?php
require_once("connection.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM semester_reg WHERE id=$id";
    $result = $conn -> query($sql);

    if($result){
        header("location: index.php");
    }
}