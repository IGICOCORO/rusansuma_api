<?php

function getConnection($databasename = "hhmng") {
	
	$servername = "localhost";
	$username = "root";
	$password = "";
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

function dump($val = null){

	echo "<pre>";
	var_dump($val);
	echo "</pre>";

	die();

}

