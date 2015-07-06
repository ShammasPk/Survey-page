<?php
// Set the database information
$hostname = "localhost";
$username = "root";
$password = "admin";
$dbname = "survey";

//Create connection
$connection = new mysqli($hostname, $username, $password, $dbname);

if (mysqli_connect_error())
{
	echo "Could not connect, Please try again";
	exit();
}

?>