<?php
	if (isset($_POST['submit'])) 
	{
		$d = $_POST['day'];
		$m = $_POST['month'];
		$y = $_POST['year'];
		echo "Date Of Birth is ".$d."/".$m."/".$y;
	}
	else
		header('location:dob.html');
?>