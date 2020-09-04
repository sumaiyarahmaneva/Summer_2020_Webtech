<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error')
		{
			echo "Something went wrong...please try again";
		}
		elseif($_GET['error'] == 'id_already_exist')
		{
			echo "this id already exist";
		}
		else
			echo "null submission";	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form id="form">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Userid</td>
					<td><input type="text" id="id" name="id"></td>
					<td></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username"></td>
					<td></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email" onkeyup="f1()"></td>
					<td id="show1"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="button" id="submit" name="submit" value="submit" onclick="f2()">
						<a href="../views/login.php" id="login" style="display: none">Login</a>
					</td>
					<td id="show2"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
		
		var a = false;
		var show1 = document.p("show1");
		function f1()
		{
			var email = document.p("email").value;
			if( email != "")
			{
				var count=0;
				for( i=0 ; i < email.length ; i++)
				{
					if(email[i]=='@')
					{
						count++;
					}
					else
						continue;
				}
				if(count==1)
				{
					var b = email.split("@");
					var c = b[1].split(".");
					var last;
					for( i=0 ; i < c.length ; i++)
					{
						last = c[i];
					}
					if( last == "com" || last == "edu")
					{
						var xhttp = new XMLHttpRequest();
						xhttp.open('POST', '../php/regCheck.php', true);
						xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
						xhttp.send('email='+email);

						xhttp.orsc = function ()
						{
							if(this.readyState == 4 && this.status == 200)
							{
								if(this.responseText != ""){
									document.p('show1').innerHTML = this.responseText;
								}
								else{
									document.p('show1').innerHTML = "";
									a = true;
								}
								
							}	
						}

					}
					else
					{
						show1.innerHTML = "Must be a valid email address";
					}
				}
				else
				{
					show1.innerHTML = "Must be a valid email address";
				}
			}
			else
			{
				show1.innerHTML = "Cannot be empty";
			}
		}

		function f2()
		{
			var show2 = document.p("show2");
			if(a == true)
			{
				var id = document.p('id').value;
				var username = document.p('username').value;
				var email = document.p('email').value;
				var password = document.p('password').value;
				var submit = document.p('submit').value;
				if(id!="" && username!="" && password!="")
				{
					var xhttp = new XMLHttpRequest();
					xhttp.open('POST', '../php/emailCheck.php', true);
					xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
					xhttp.send('id='+id+'&username='+username+'&password='+password+'&email='+email+'&submit='+submit);

					xhttp.orsc = function ()
					{
						if(this.readyState == 4 && this.status == 200)
						{
							if(this.responseText != "")
							{
								document.p('form').reset();
								document.p('login').style.display = 'inline'
							}
							else
							{
								document.p('searchdata').innerHTML = "";
							}	
						}	
					}
				}
				else
				{
					show2.innerHTML = "please fill all the information correctly";
				}
			}
			else
			{
				show2.innerHTML = "please fill all the information correctly";
			}
			
		}
	</script>
</body>
</html>