<?php
/* Database connection settings */
	$servername = "localhost";
    $username = "u604181095_rfid";		//put your phpmyadmin username.(default is "root")
    $password = "Things@88";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "u604181095_rfid";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>