<?php
	session_start();

	if(isset($_POST['submit']))
	{
		if(isset($_POST['rememberme']) and $_POST['username'] != "" and $_POST['password'] !="")
		{
			if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
			{
				if($_COOKIE['username']==$_POST['username'] and $_COOKIE['password']==md5($_POST['password']))
				{
					header('location:dashboard.php');
				}
				elseif(!empty($_SESSION['username']) and !empty($_SESSION['password']))
				{
					if($_SESSION['username']==$_POST['username'] and $_SESSION['password']==$_POST['password'])
					{
						setcookie('username',$_SESSION['username'],time()+3600,'/');
						setcookie('password',md5($_SESSION['password']),time()+3600,'/');
						setcookie('name',$_SESSION['name'],time()+3600,'/');
						setcookie('email',$_SESSION['email'],time()+3600,'/');
						setcookie('gender',$_SESSION['gender'],time()+3600,'/');
						setcookie('day',$_SESSION['day'],time()+3600,'/');
						setcookie('month',$_SESSION['month'],time()+3600,'/');
						setcookie('year',$_SESSION['year'],time()+3600,'/');
						setcookie('status',"ok",time()+3600,'/');
						session_destroy();
						header('location:dashboard.php');
					}
					else
						echo "Registetion is not completed";
				}
				else
					echo "Invalid Username Or Password";
			}
			else
				echo "Invalid Username Or Password";

		}
		elseif($_POST['username'] != "" and $_POST['password'] !="")
		{
			if(!empty($_SESSION))
			{
				if($_SESSION['username']==$_POST['username'] and $_SESSION['password']==$_POST['password'])
				{
					$_SESSION['status'] = "ok";
					header('location:dashboard.php');
				}
				else
					echo "Invalid Username Or Password";
			}
			else
				echo "Registetion is not completed!";

		}
		else
			echo "Invalid Username Or Password";

	}
	else
		header('location:home.html');
?> 