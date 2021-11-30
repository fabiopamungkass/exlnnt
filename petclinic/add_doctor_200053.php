<!DOCTYPE html>
<html>
<head>
	<title>Pet Clinic fabiopamungkass</title>
</head>
<body>
	<h1>Pet Clinic fabiopamungkass</h1>
	<h3>Form Add Doctor</h3>
	<form method="post" action="create_doctor_200053.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="doctor_name_200053" required></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="doctor_gender_200053" value="Male" required> Male 
					<input type="radio" name="doctor_gender_200053" value="Female" required> Female 
			</td>
			</tr>
		<tr>
				<td>Address</td>
				<td><textarea name="doctor_address_200053" required></textarea></td>
			</tr>	
			<tr>
				<td>Phone</td>
				<td><input type="text" name="doctor_phone_200053" required></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="save" value="SAVE">
					<input type="reset" name="reset" value="RESET">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>