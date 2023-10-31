<?php 

$host_name ="localhost";
$user_name ="weblab";
$password="weblab";
$db_name ="student";

$conn = new mysqli($host_name, $user_name, $password, $db_name);
if($conn -> connect_error){
    die( "Faild to connect mysql" . $conn -> connect_error);
}

