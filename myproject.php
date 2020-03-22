<!DOCTYPE html>
<html>
<head>
	<title>php forms</title>
	<meta charset="utf-8">
</head>
<body>
	<form name = "Employement " action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
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
				<td><select name = "experienceLevel">
					<option value = "entry">Entry Level </option>
					<option value = "some">Some experienced</option>
					<option value = "very">Very experienced</option>
					</select></td>
			</tr>
			<tr>
				<td>Employement status</td>
				<td><input type="radio" name="estatus" value="employed">Employed</input>
						<input type="radio" name="estatus" value="unemployed">Unemployed</input>
					<input type="radio" name="estatus" value="student">Student</input>
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
</body>
</html>