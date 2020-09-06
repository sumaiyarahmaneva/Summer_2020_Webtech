<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error')
		{
			echo "Something went wrong...please try again";
		}
		elseif($_GET['error'] == 'id_already_exist')
		{
			echo "this id already exist";
		}
		else
			echo "null submission";	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" id="username" name="username"></td>
					<td></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" id="number" name="number"></td>
					<td></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><input type="text" id="username" name="username"></td>
					<td id="show1"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="button" id="submit" name="submit" value="submit">
					</td>
					<td id="show2"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>