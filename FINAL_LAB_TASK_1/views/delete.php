<?php
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$company = getByID($_GET['id']);	
	}else{
		header('location:all_user.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<form action="../php/userController.php" method="POST">
		<fieldset>
			<legend>Confirmation</legend>
				Press Yes to delete this user and press No to go back <br/>
				<input type="hidden" name="id" value="<?=$users['id']?>">
				<input type="submit" name="yes" value="yes">
				<input type="submit" name="no" value="no">
		</fieldset>
	</form>
</body>
</html>