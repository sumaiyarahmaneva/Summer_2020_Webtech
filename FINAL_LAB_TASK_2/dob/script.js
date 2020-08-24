function validation()
{
	var show = document.getElementById("show");
	var d = document.getElementById("day").value;
	var m = document.getElementById("month").value;
	var y = document.getElementById("year").value;
	if( d != "" && m != "" && y != "")
	{
		if( d >= 1 && d <= 31 && m >= 1 && m <= 12 && y >= 1900 && y <= 2016 )
		{
			return true;
		}
		else
		{
			show.innerHTML = "Must be a valid number";
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