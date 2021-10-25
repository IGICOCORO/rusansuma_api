<?php

function getConnection($databasename = "isteebu_gitega_2") {
	
	$servername = "localhost";
	$username = "jean";
	$password = "lion";
	$dbname = $databasename;
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$databasename;**charset=utf8**", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully";
	} catch (PDOException $e) {
		die($e);
		echo "Connection failed: " . $e->getMessage();
	}
	return $conn;

}

