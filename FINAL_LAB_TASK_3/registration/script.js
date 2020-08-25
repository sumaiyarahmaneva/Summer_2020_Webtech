function validation()
{
	var flag = true;
	var show1 = document.getElementById("show1");
	var n = document.getElementById("name").value;
	if( n != "" )
	{
		var a = n.split(" ");
		var b = a.length;
		if ( b >= 2) 
		{
			var c = "valid";
		 	if(n[0]=='a' || n[0]=='b'  || n[0]=='c' || n[0]=='d'  || n[0]=='e' || n[0]=='f'  || n[0]=='g' || n[0]=='h'  || n[0]=='i' || 
		 		n[0]=='j'  || n[0]=='k' || n[0]=='l'  || n[0]=='m' || n[0]=='n'  || n[0]=='o' || n[0]=='p'  || n[0]=='q' || n[0]=='r'  || 
		 		n[0]=='s' || n[0]=='t'  || n[0]=='u' || n[0]=='v'  || n[0]=='w' || n[0]=='x'  || n[0]=='y' || n[0]=='z'  || n[0]=='A' || 
		 		n[0]=='B'  || n[0]=='C' || n[0]=='D'  || n[0]=='E' || n[0]=='F'  || n[0]=='G' || n[0]=='H'  || n[0]=='I' || n[0]=='J'  || 
		 		n[0]=='K' || n[0]=='L'  || n[0]=='M' || n[0]=='N' || n[0]=='O' || n[0]=='P'  || n[0]=='Q' || n[0]=='R'  || n[0]=='S' || 
		 		n[0]=='T'  || n[0]=='U' || n[0]=='V'  || n[0]=='W' || n[0]=='X'  || n[0]=='Y' || n[0]=='Z')
		 	{
		 		for(i=0 ; i < n.length ; i++)
		 		{
		 			if(n[i]=='a' || n[i]=='b'  || n[i]=='c' || n[i]=='d'  || n[i]=='e' || n[i]=='f'  || n[i]=='g' || n[i]=='h'  || n[i]=='i' || 
		 				n[i]=='j'  || n[i]=='k' || n[i]=='l'  || n[i]=='m' || n[i]=='n'  || n[i]=='o' || n[i]=='p'  || n[i]=='q' || n[i]=='r'  ||
		 				n[i]=='s' || n[i]=='t'  || n[i]=='u' || n[i]=='v'  || n[i]=='w' || n[i]=='x'  || n[i]=='y' || n[i]=='z'  || n[i]=='A' || 
		 				n[i]=='B'  || n[i]=='C' || n[i]=='D'  || n[i]=='E' || n[i]=='F'  || n[i]=='G' || n[i]=='H'  || n[i]=='I' || n[i]=='J'  || 
		 				n[i]=='K' || n[i]=='L'  || n[i]=='M' || n[i]=='N' || n[i]=='O' || n[i]=='P'  || n[i]=='Q' || n[i]=='R'  || n[i]=='S' || 
		 				n[i]=='T'  || n[i]=='U' || n[i]=='V'  || n[i]=='W' || n[i]=='X'  || n[i]=='Y' || n[i]=='Z' || n[i]=='-' || n[i]=='.' || 
		 				n[i]==' ')					
		 			{
		 				continue;
		 			}
		 			else
		 			{
		 				c="invalid";
		 			}
		 		}
		 		if(c=="valid")
		 		{
		 			flag = true;
		 		}
		 		else
		 		{
		 			show1.innerHTML = "Can contain a-z or A-Z or dot(.) or dash(-)";
		 			return false;	
		 		}
		 	}
		 	else
		 	{
				show1.innerHTML = "Must start with a letter";
				return false;
			}
		}
		else
		{
		 	show1.innerHTML = "Contains at least two words";
		 	return false;
		}	

	}
	else
	{
		show1.innerHTML = "Cannot be empty";
		return false;
	}

	var show = document.getElementById("show2");
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
				flag =  true;
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
			return  false;
		}

	}
	else
	{
		show.innerHTML = "Cannot be empty";
		return  false;
	}

	var show = document.getElementById("show3");
	var m = document.getElementById("male").checked;
	var f = document.getElementById("female").checked;
	var o = document.getElementById("other").checked;
	if( m == true || f == true || o == true)
	{
		falg = true;
	}
	else
	{
		show.innerHTML = "Must be one of them has to be selected";
		return false;
	}

	return flag;

}

function clicks2()
{
	var show = document.getElementById("show2");
	show.innerHTML = "";
}

function clicks1()
{
	var show1 = document.getElementById("show1");
	show1.innerHTML = "";
}

function clicks3()
{
	var show = document.getElementById("show3");
	show.innerHTML = "";
}