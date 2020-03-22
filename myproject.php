<!DOCTYPE html>
<html>
<head>
	<title>php forms</title>
	<meta charset="utf-8">
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<form name = "Employement " action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
 
 <?php
 	$name = $Website = $position = $eLevel = $estatus = $comments = "";
 	if($_SERVER["REQUEST_METHOD"] == "POST" ){
 		if(empty($_POST["name"]))
 			echo "<span class = \"error\">Error:Name required<br></span>";
 		elseif(!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])){
 				echo "<span class = \"error\">Error:Name required only letters and spaces<br></span>";
 			}
 		elseif(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["Website"])) {
 				echo "<span class = \"error\">Error:incorrect format of website<br></span>";
 			}	
 		elseif(empty($_POST["Website"]))
 			echo "<span class = \"error\">Error:website required<br></span>";
 		else{
	 		$name = val($_POST["name"]);
	 		$Website = val($_POST["Website"]);
	 		$position = val($_POST["position"]);
	 		$eLevel = val($_POST["eLevel"]);
	 		$estatus = val($_POST["estatus"]);
	 		$comments = val($_POST["comments"]);
		 }
 	}

 function val($data)
 {
 	$data = trim($data);
 	$data = stripslashes($data);
 	$data = htmlspecialchars($data);
 	return $data;
 }

 	?>


		<table width="600" cellpadding="1" cellspacing="1" border="0">
			<tr>
				<td><h1>Employment Application</h1></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type = "text" name = "name"></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type = "text" name = "Website"></td>
			</tr>
			<tr>
				<td>position</td>
				<td><select name ="position">
					<option value = "accountanat">Accountant </option>
					<option value = "receptionist">Receptionist</option>
					<option value = "administrator">Administrator</option>
					<option value = "supervisor">Supervisor</option>
				</select></td>
			</tr>
			<tr>
				<td>Experience Level</td>
				<td><select name = "eLevel">
					<option value = "entry">Entry Level </option>
					<option value = "some">Some experienced</option>
					<option value = "very">Very experienced</option>
					</select></td>
			</tr>
			<tr>
				<td>Employement status</td>
				<td><input type="radio" name="estatus" value="employed">Employed</input>
						<input type="radio" name="estatus" value="unemployed">Unemployed</input>
					<input type="radio" name="estatus" value="student ">Student</input>
			  </td>
			</tr>
			<tr>
				<td>Additional comments:</td>
				<td><textarea rows = "5" cols = "45" name="comments"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type = "submit" name = "submit" value="submit"></input>
					<input type = "reset" name = "reset" value="reset"></input>
				</td>
			</tr>
		</table>
	</form>
	<?php
				 echo "<h1>output data</h1><hr>";
				 echo "name: ".$name."<br>";
				 echo "website: ".$Website."<br>";
				 echo "position: ".$position."<br>";
				 echo "Employement status: ".$estatus."<br>";
				 echo "experience Level: ".$eLevel."<br>";
				 echo "Additional comments: ".$comments."<br>";	 
	?>
</body>
</html>