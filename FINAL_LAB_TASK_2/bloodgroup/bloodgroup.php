<?php
	if (isset($_POST['submit'])) 
	{
		$bloodgroup = $_POST['bloodgroup'];
		echo "Blood group is ".$bloodgroup;
	}
	else
		header('location:bloodgroup.html');
?>