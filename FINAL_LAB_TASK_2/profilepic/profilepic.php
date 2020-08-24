<?php
	if (isset($_POST['submit'])) 
	{
		$userid = $_POST['userid'];
		$picture = $_FILES['picture'];
		echo "User id is ".$userid."<br/>";
		echo "Picture name is ".$picture['name']."<br/>";
	}
	else
		header('location:profilepic.html');
?>