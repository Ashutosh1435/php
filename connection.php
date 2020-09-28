<?php

$server='localhost';
$user='root';
$password="";
$database="lavi";

$conn = mysqli_connect($server,$user,$password,$database);
if (! $conn){
	die("connection_failed");
}
?>


