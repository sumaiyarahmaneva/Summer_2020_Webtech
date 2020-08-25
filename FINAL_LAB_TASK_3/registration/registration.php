<?php
	if (isset($_POST['Submit'])) 
	{
		$name = $_POST['personname'];
		echo "Name is ".$name;
		$email = $_POST['email'];
		echo "Email is ".$email;
		$gender = $_POST['gender'];
		echo "Gender is ".$gender;
		$d = $_POST['day'];
		$m = $_POST['month'];
		$y = $_POST['year'];
		echo "Date Of Birth is ".$d."/".$m."/".$y;
		$bloodgroup = $_POST['bloodgroup'];
		echo "Blood group is ".$bloodgroup;
		if (!empty($_POST['ssc']) and empty($_POST['hsc']) and empty($_POST['bsc'])) 
		{
			$ssc = $_POST['ssc'];
			echo "Degree is ".$ssc;
		}
		elseif(empty($_POST['ssc']) and !empty($_POST['hsc']) and empty($_POST['bsc']))
		{
			$hsc = $_POST['hsc'];
			echo "Degree is ".$hsc;
		}
		elseif(empty($_POST['ssc']) and empty($_POST['hsc']) and !empty($_POST['bsc']))
		{
			$bsc = $_POST['bsc'];
			echo "Degree is ".$bsc;
		}
		elseif(!empty($_POST['ssc']) and !empty($_POST['hsc']) and empty($_POST['bsc']))
		{
			$ssc = $_POST['ssc'];
			$hsc = $_POST['hsc'];
			echo "Degree is ".$ssc." ".$hsc;
		}
		elseif(!empty($_POST['ssc']) and empty($_POST['hsc']) and !empty($_POST['bsc']))
		{
			$ssc = $_POST['ssc'];
			$bsc = $_POST['bsc'];
			echo "Degree is ".$ssc." ".$bsc;
		}
		elseif(empty($_POST['ssc']) and !empty($_POST['hsc']) and !empty($_POST['bsc']))
		{
			$hsc = $_POST['hsc'];
			$bsc = $_POST['bsc'];
			echo "Degree is ".$hsc." ".$bsc;
		}
		else
		{
			$ssc = $_POST['ssc'];
			$hsc = $_POST['hsc'];
			$bsc = $_POST['bsc'];
			echo "Degree is ".$ssc." ".$hsc." ".$bsc;
		}
		$picture = $_FILES['picture'];
		echo "Picture name is ".$picture['name']."<br/>";
	}
	else
		header('location:registration.html');
?>