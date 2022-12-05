<?php 
	$servername = "messageboard.cc1k7swrkc1u.us-east-1.rds.amazonaws.com";
	$username = "admin"; # MySQL user
	$password = "1yq*sp9Hx7*e"; # MySQL Server root password
	$dbname='messageboard'; # Database name
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    # Display an error mesage if the connection fails
	    die("Connection failed: " . $conn->connect_error);
	}
?>
