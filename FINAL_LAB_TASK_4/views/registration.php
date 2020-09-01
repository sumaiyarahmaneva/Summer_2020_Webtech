<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" onkeyup="f2()"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="button" name="submit" value="Submit" onclick="f1()">
						<a href="login.php" style="display: none">login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

	<script type="text/javascript">
		function f1(){
			document.getElementsByTagName('a')[0].style.display = 'inline';
		}

		function f2()
		{ 
			var show = document.getElementById("show");
	        var e = document.getElementById("email").value;
	        if( e != "")
	        {
		        var a=0;
		        for( i=0 ; i < e.length ; i++)
		        {
			        if(e[i]=='@')
			        {
				        a++;
			        }
			        	else
					continue;
				}
				if(a==1)
				{
					var b = e.split("@");
					var d = b[1].split(".");
					var l;
					for( i=0 ; i < d.length ; i++)
					{
						l = d[i];
					}
					if( l == "com")
					{
					return true;
					}
					else
					{
						show.innerHTML = "Must be a valid email address";
						return false;
					}
				}
				else
				{
					show.innerHTML = "Must be a valid email address";
					return false;
				}

			}
			else
			{
				show.innerHTML = "Cannot be empty";
				return false;
			}

			
		}
	</script>
</body>
</html>