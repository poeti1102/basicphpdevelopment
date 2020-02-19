<!DOCTYPE html>
<html>
<head>
	<title> Registeration Form </title>
</head>
<body>
	<form method="GET" action="register.php">
		<table>
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Gender :</td>
				<td>
					<input type="radio" name="gender" value="Male" required> Male
					<input type="radio" name="gender" value="Female" required> Female
				</td>
			</tr>
			<tr>
				<td>Age :</td>
				<td><input type="number" name="age"></td>
			</tr>
			<tr>
				<td>Phone :</td>
				<td><input type="number" name="phone"></td>
			</tr>
			<tr>
				<td>Address :</td>
				<td>
					<textarea name="address"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="register">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>