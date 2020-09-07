<?php
	require_once('../php/session_header.php');
	require_once('../service/adminService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Author List</title>
</head>
<body>

	<a href="homeadmin.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>Author list</h3>

	<table border="1">
		<tr>
			<td>Authorname</td>
			<td>Contactnumber</td>
			<td>Username</td>
			<td>Password</td>
			<td>Action</td>
		</tr>

		<?php  
			$authors = getAllAuthor();
			for ($i=0; $i != count($author); $i++) {  ?>
		<tr>
			<td><?=$author[$i]['authorname']?></td>
			<td><?=$author[$i]['contactnumber']?></td>
			<td><?=$author[$i]['username']?></td>
			<td><?=$author[$i]['password']?></td>
			<td>
				<a href="editauthor.php?username=<?=$author[$i]['username']?>">Edit</a> |
				<a href="deleteauthor.php?username=<?=$author[$i]['username']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>