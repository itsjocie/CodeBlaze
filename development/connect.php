<?php

$host="localhost";
$users="root";
$password="";
$db="development";

$conn=new mysqli($host,$users,$password,$db);
if($conn ->connect_error){
    die("Failed to connect DB".$conn->connect_error);
}
?>
