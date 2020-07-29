<?php
	session_start();
	if(isset($_POST['submit']))
	{
		if($_POST['name'] != "" and $_POST['email'] != "" and $_POST['username'] != "" and $_POST['password'] != "" and $_POST['confirmPassword'] != "" and isset($_POST['gender']) and $_POST['day'] != "" and $_POST['month'] != "" and $_POST['year'] != "")
		{
			if($_POST['password'] == $_POST['confirmPassword'])
			{
				$_SESSION['username']=$_POST['username'];
				$_SESSION['password']=$_POST['password'];
				$_SESSION['name']=$_POST['name'];
				$_SESSION['email']=$_POST['email'];
				$_SESSION['gender']=$_POST['gender'];
				$_SESSION['day']=$_POST['day'];
				$_SESSION['month']=$_POST['month'];
				$_SESSION['year']=$_POST['year'];

				header('location:login.html');
			}
			else
				echo "Invalid name and password";
		}
		else
			echo "Invalid name and password";
	}
	else
		header('location:home.html');

?>