<!DOCTYPE html>
<html>
<head>
	<title>Pet Clinic fabiopamungkass</title>
</head>
<body>
	<h1>Pet Clinic fabiopamungkass</h1>
	<h3>Form Add Pet</h3>
	<form method="post" action="create_pet_200053.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="pet_name_200053" required></td>
			</tr>
			<tr>
				<td>Type</td>
				<td>
					<select name="pet_type_200053" required>
						<option value="">Chose</option>
						<option value="Cat">Cat</option>
						<option value="Dog">Dog</option>
						<option value="Reptil">Reptil</option>
						<option value="Bird">Bird</option>
						<option value="Rodent">Rodent</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="pet_gender_200053" value="Male" required> Male 
					<input type="radio" name="pet_gender_200053" value="Female" required> Female 
			</td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="number" name="pet_age_200053" required></td>
			</tr>
			<tr>
				<td>Owner</td>
				<td><input type="text" name="pet_owner_200053" required></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="pet_address_200053" required></textarea></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="pet_phone_200053" required></td>
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