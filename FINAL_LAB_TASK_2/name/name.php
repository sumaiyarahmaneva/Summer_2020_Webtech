<?php
	if (isset($_POST['submit'])) 
	{
		$name = $_POST['name'];
		echo "Name is ".$name;
	}
	else
		header('location:name.html');
?>