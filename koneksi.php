<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "latihan_oop";

$mysqli = new mysqli($hostname,$username,$password,$database);
if(mysqli_connect_errno()){
	echo "Error:Could not connect to database";
	exit;
} 

 ?>