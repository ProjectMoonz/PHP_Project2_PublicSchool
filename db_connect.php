<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="publicschool";
$con = mysqli_connect($servername, $username, $password, $dbname);

if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>