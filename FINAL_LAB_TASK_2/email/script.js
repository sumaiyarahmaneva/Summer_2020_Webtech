function validation()
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

function clicks()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}