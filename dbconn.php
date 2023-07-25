<?php
$conn=mysqli_connect("localhost","root","","coldriver");

if (mysqli_connect_errno()){
	die("Database connection failed : " . mysqli_connect_error() ." (". mysqli_connect_errno(). ")");
}	
?>