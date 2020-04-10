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

	$sql = "SELECT DISTINCT firstname FROM users";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo " firstname:".$row["firstname"]."<hr>";
		}
	}
	else{
		echo "zero users";
	}
?>