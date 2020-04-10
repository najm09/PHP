<?php
	$servername = "";
	$username = "";
	$password = "";
	$dbname = "";
//create database connection
	$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
	if($conn->connect_error){
		die("Error:".$conn->connect_error);
	}
//prepare statement
	$statm = $conn->prepare("INSERT INTO users (firstname,lastname,email) VALUES(?,?,?)");
//bind prepare statement
	$statm->bind_param("sss", $firstname, $lastname, $email);
//set parameters and execute

	$firstname = "Anna";
	$lastname = "bell";
	$email = "bell@gmail.com";
	$statm->execute();

	$firstname = "maria";
	$lastname = "senem";
	$email = "maria@me.com";
	$statm->execute();

	$firstname = "bean";
	$lastname = "gill";
	$email = "gill@gmail.com";
	$statm->execute();

	echo "new records created!<hr>";

	$statm->close();
	$conn->close();
?>