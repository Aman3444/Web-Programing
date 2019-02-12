<?php
$host = "localhost";
$username = "multcom_eatery";
$password = "aman@@user";
$database = "multcom_eatery";

// Create connection
$connection = new mysqli ( $host, $username, $password, $database );

// Check connection
if ($connection->connect_errno) {
	die ( "Connection failed: " . $connection->connect_error );
} else {
	echo "";
}

?>