<?php
	require_once('../db/db.php');

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from author where username={$username}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from author";
		$result = mysqli_query($conn, $sql);
		$admin = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($author, $row);
		}

		return $author;
	}


	function validate($author){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from author where username='{$author['username']}' and password='{$author['password']}'";
		$result = mysqli_query($conn, $sql);
		$adsmin = mysqli_fetch_assoc($result);

		if(count($author) > 0 ){
			return true;
		}else{
			return false;
		}
	}