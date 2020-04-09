<?php
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "mywebsite";

	//create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//check connection
	if($conn->connect_error){
		die("connection failed:".$conn->connect_error);
	}

	$sql = "SELECT id,firstname,lastname,email FROM users";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "ID:".$row["id"]." firstname:".$row["firstname"]." lastname:".$row["lastname"]." email:".$row["email"]."<hr>";
		}
	}
	else{
		echo "zero users";
	}
?>