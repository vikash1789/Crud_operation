<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","root","crud_bootstrap");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>