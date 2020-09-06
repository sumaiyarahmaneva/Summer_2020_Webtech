<?php
	require_once('../db/db.php');

	function validate($users){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where username='{$admin['username']}' and password='{$admin['password']}'";
		$result = mysqli_query($conn, $sql);
		$admin = mysqli_fetch_assoc($result);

		if(count($users) > 0 ){
			return true;
		}else{
			return false;
		}
	}