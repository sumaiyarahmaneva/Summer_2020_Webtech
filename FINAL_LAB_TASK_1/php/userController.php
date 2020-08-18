<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/create.php?error=null_error');
		}else{

				$user = [
					'username'=> $username,
					'password'=> $password,
					'email'=> $email
				];

				$status = insert($user);

				if($status){
					header('location: ../views/all_users.php?success=done');
				}else{
					header('location: ../views/create.php?error=db_error');
				}
			}
			else
				header('location: ../views/create.php?error=id_already_exist');
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

	//delete user
	if(isset($_POST['yes'])){

		$id = $_POST['username'];
		$status = delete($username);

		if($status){
			header('location: ../views/all_users.php?success=done');
		}
	}
	elseif(isset($_POST['no']))
		header('location: ../views/all_users.php')


?>