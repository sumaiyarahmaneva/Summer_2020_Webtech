<?php
	if (isset($_POST['submit'])) 
	{
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
		
	}
	else
		header('location:degree.html');
?>