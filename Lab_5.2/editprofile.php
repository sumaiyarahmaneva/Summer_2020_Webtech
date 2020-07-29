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
	<title>EDITPROFILE</title>
</head>
<body>
	<fieldset>
		<p>X-Company</p>
		<?php
			if(!empty($_SESSION))
			{
				echo "<p align='right'>Logged in as <a href='viewprofile.php'>".$_SESSION['username']."</a>|<a href='logout.php'>Logout</a></p>";
			}
			else
				echo "<p align='right'>Logged in as <a href='viewprofile.php'>".$_COOKIE['username']."</a>|<a href='logout.php'>Logout</a></p>";
		?>
	</fieldset>
	<fieldset>
		<table width="100%" border="1">
			<tr>
				<td rowspan="6" width="30%">
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
					<fieldset>
					    <legend><b>PROFILE</b></legend>
						<form method="post">
							<br/>
							<table>
								<tr>
									<td width="10%">Name</td>
									<td>:</td>
									<td>
										<input type="text" name="name">
									</td>
								</tr>		
								<tr><td colspan="3"><hr/></td></tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>
										<input type="text" name="email">
									</td>
								</tr>		
								<tr><td colspan="3"><hr/></td></tr>			
								<tr>
									<td>Gender</td>
									<td>:</td>
									<td>
										<input name="gender" type="radio" value="Male">Male
										<input name="gender" type="radio" value="Female">Female
										<input name="gender" type="radio" value="Other">Other
									</td>
								</tr>
								<tr><td colspan="3"><hr/></td></tr>
								<tr>
									<td>Date of Birth</td>
									<td>:</td>
									<td>
										<input type="text" name="dob"><br/>
										dd/mm/yyyy
									</td>
								</tr>
							</table>	
					        <hr/>
								<input type="submit" value="submit" name="submit">
						</form>
					</fieldset> 
				</td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
			<p align="center">Copyright © 2017 </p>
	</fieldset>	
</body>
<?php
	if(isset($_POST['submit']))
	{
		if(!empty($_SESSION))
		{
			$_SESSION['name']=$_POST['name'];
			$_SESSION['email']=$_POST['email'];
			$_SESSION['gender']=$_POST['gender'];
			$cut=explode('/', $_POST['dob']);
			$_SESSION['day']=$cut['0'];
			$_SESSION['month']=$cut['1'];
			$_SESSION['year']=$cut['2'];
			echo "Profile is edited";

		}
		else
		{
			setcookie('name',$_POST['name'],time()+3600,'/');
			setcookie('email',$_POST['email'],time()+3600,'/');
			setcookie('gender',$_POST['gender'],time()+3600,'/');
			$cut=explode('/', $_POST['dob']);
			setcookie('day',$cut['0'],time()+3600,'/');
			setcookie('month',$cut['1'],time()+3600,'/');
			setcookie('year',$cut['2'],time()+3600,'/');	
		}
	}
	
?>
