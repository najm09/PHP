<?php
	$fname = validate($_POST["fname"]);
	$lname = validate($_POST["lname"]);
	$email = validate($_POST["email"]);

//validate data
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

//connection setup
	$servername = "";
	$username = "";
	$password = "";
	$dbname = "";

//create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
	if($conn->connect_error){
		die("connection failed:".$conn->connect_error);
	}

	//inserting values into Database
	$sql = "INSERT INTO users (firstname,lastname,email)
	VALUES ('$fname', '$lname', '$email')";

//checking new query is created or not
	if($conn->query($sql) === TRUE){
		echo " new record created successfully";
	}else{
		echo "error".$sql."<br>".$conn->error;
	}
//closing the connection to avoid any kind of crash in database	
	$conn->close();
?>