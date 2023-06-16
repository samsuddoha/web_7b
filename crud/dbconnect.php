<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="batch_7";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	
	
?>