<?php
	session_start();
	if(!empty($_SESSION))
	{
		if(empty($_SESSION['status']))
		{
			header('location:login.html');
		}
	}
	else
	{
		if(empty($_COOKIE['status']))
		{
			echo $_COOKIE['status'];
			header('location:login.html');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
</head>
<body>
	<fieldset>
		<p>X-Company</p>
		<?php
			if(!empty($_SESSION))
			{
				echo "<p align='right'>Logged in as <a href='profile.html'>".$_SESSION['username']."</a>|<a href='logout.php'>Logout</a></p>";
			}
			else
				echo "<p align='right'>Logged in as <a href='profile.html'>".$_COOKIE['username']."</a>|<a href='logout.php'>Logout</a></p>";
		?>
	</fieldset>
	<fieldset>
		<table width="100%" border="1">
			<tr>
				<td rowspan="6" width="20%">
					Account
					<hr/>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="viewprofile.php">View Profile</a></li>
						<li><a href="editprofile.php">Edit Profile</a></li>
						<li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
						<li><a href="changepassword.php">Change Password</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</td>
				<td rowspan="6">
					<?php
						if(!empty($_SESSION))
						{
							 echo "<b> Welcome ".$_SESSION['username']."</b>";
						}
						else
							 echo "<b> Welcome ".$_COOKIE['username']."</b>";

					
					?> 
				</td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
			<p align="center">Copyright © 2017 </p>
	</fieldset>	
</body>