<?php
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/authorService.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('location: ../views/loginauthor.php?error=null_value');
		}else{

			$author = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($author);

			if($status){
				$_SESSION['username'] = $username;
				header('location: ../views/homeauthor.php');
			}else{
				header('location: ../views/loginauthor.php?error=invalid_user');
			}
		}
	}



?>