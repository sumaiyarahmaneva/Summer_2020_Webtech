<?php
	if (isset($_POST['Submit'])) 
	{
		$name = $_POST['personname'];
		echo "Name is ".$name ."<br>";
		$email = $_POST['email'];
		echo "Email is ".$email."<br>";
		$gender = $_POST['gender'];
		echo "Gender is ".$gender."<br>";
		$d = $_POST['day'];
		$m = $_POST['month'];
		$y = $_POST['year'];
		echo "Date Of Birth is ".$d."/".$m."/".$y."<br>";
		$bloodgroup = $_POST['bloodgroup'];
		echo "Blood group is ".$bloodgroup."<br>";
		if (!empty($_POST['ssc']) and empty($_POST['hsc']) and empty($_POST['bsc']) and empty($_POST['msc'])) 
		{
			$ssc = $_POST['ssc'];
			echo "Degree is ".$ssc."<br>";
		}
		elseif(empty($_POST['ssc']) and !empty($_POST['hsc']) and empty($_POST['bsc']) and empty($_POST['msc']))
		{
			$hsc = $_POST['hsc'];
			echo "Degree is ".$hsc."<br>";
		}
		elseif(empty($_POST['ssc']) and empty($_POST['hsc']) and !empty($_POST['bsc']) and empty($_POST['msc']))
		{
			$bsc = $_POST['bsc'];
			echo "Degree is ".$bsc."<br>";
		}
		elseif(empty($_POST['ssc']) and empty($_POST['hsc']) and empty($_POST['bsc']) and !empty($_POST['msc']))
		{
			$msc = $_POST['msc'];
			echo "Degree is ".$msc."<br>";
		}
		elseif(!empty($_POST['ssc']) and !empty($_POST['hsc']) and empty($_POST['bsc']) and empty($_POST['msc']))
		{
			$ssc = $_POST['ssc'];
			$hsc = $_POST['hsc'];
			echo "Degree is ".$ssc." ".$hsc."<br>";
		}
		elseif(!empty($_POST['ssc']) and empty($_POST['hsc']) and !empty($_POST['bsc']) and empty($_POST['msc']))
		{
			$ssc = $_POST['ssc'];
			$bsc = $_POST['bsc'];
			echo "Degree is ".$ssc." ".$bsc."<br>";
		}
		elseif(!empty($_POST['ssc']) and empty($_POST['hsc']) and empty($_POST['bsc']) and !empty($_POST['msc']))
		{
			$ssc = $_POST['ssc'];
			$msc = $_POST['msc'];
			echo "Degree is ".$ssc." ".$msc."<br>";
		}
		elseif(empty($_POST['ssc']) and !empty($_POST['hsc']) and !empty($_POST['bsc']) and empty($_POST['msc']))
		{
			$hsc = $_POST['hsc'];
			$bsc = $_POST['bsc'];
			echo "Degree is ".$hsc." ".$bsc."<br>";
		}
		elseif(empty($_POST['ssc']) and !empty($_POST['hsc']) and empty($_POST['bsc']) and !empty($_POST['msc']))
		{
			$hsc = $_POST['hsc'];
			$msc = $_POST['msc'];
			echo "Degree is ".$hsc." ".$msc."<br>";
		}
		elseif(empty($_POST['ssc']) and empty($_POST['hsc']) and !empty($_POST['bsc']) and !empty($_POST['msc']))
		{
			$bsc = $_POST['bsc'];
			$msc = $_POST['msc'];
			echo "Degree is ".$bsc." ".$msc."<br>";
		}
		elseif(!empty($_POST['ssc']) and !empty($_POST['hsc']) and !empty($_POST['bsc']) and empty($_POST['msc']))
		{
			$ssc = $_POST['ssc'];
			$hsc = $_POST['hsc'];
			$msc = $_POST['bsc'];
			echo "Degree is ".$ssc." ".$hsc." ".$bsc."<br>";
		}
		elseif(!empty($_POST['ssc']) and !empty($_POST['hsc']) and empty($_POST['bsc']) and !empty($_POST['msc']))
		{
			$ssc = $_POST['ssc'];
			$hsc = $_POST['hsc'];
			$msc = $_POST['msc'];
			echo "Degree is ".$ssc." ".$hsc." ".$msc."<br>";
		}
		elseif(!empty($_POST['ssc']) and empty($_POST['hsc']) and !empty($_POST['bsc']) and !empty($_POST['msc']))
		{
			$ssc = $_POST['ssc'];
			$msc = $_POST['bsc'];
			$msc = $_POST['msc'];
			echo "Degree is ".$ssc." ".$bsc." ".$msc."<br>";
		}
		elseif(empty($_POST['ssc']) and !empty($_POST['hsc']) and !empty($_POST['bsc']) and !empty($_POST['msc']))
		{   
			$hsc = $_POST['hsc'];
			$msc = $_POST['bsc'];
			$msc = $_POST['msc'];
			echo "Degree is ".$hsc." ".$bsc." ".$msc."<br>";
		}	
		else
		{
			$ssc = $_POST['ssc'];
			$hsc = $_POST['hsc'];
			$bsc = $_POST['bsc'];
			$msc = $_POST['msc'];
			echo "Degree is ".$ssc." ".$hsc." ".$bsc. " ".$msc."<br>";
		}
		$picture = $_FILES['picture'];
		echo "Picture name is ".$picture['name']."<br/>";
	}
	else
		header('location:registration.html');
?>

