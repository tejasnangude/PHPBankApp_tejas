<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="phpbankapp";
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	// Check connection
	try{
		$conn = new mysqli($servername, $username, $password, $dbname) ;
	}
	catch (Exception $e) {
		echo($conn->connect_error);
	}
?>