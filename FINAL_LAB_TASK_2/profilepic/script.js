function validation()
{
	var show1 = document.getElementById("show1");
	var show2 = document.getElementById("show2");
	var userid = document.getElementById("userid").value;
	var picture = document.getElementById("picture").value;

	if( userid != "" && userid > 0)
	{
		if( picture != "")
		{
			var c = picture.split(".");
			if( c[1] == "jpg" || c[1] == "png" || c[1] == "jpeg" || c[1] == "JPG" || c[1] == "PNG" || c[1] == "JPEG")
			{
				return true;
			}
			else
			{
				show2.innerHTML = "Upload an image file";
				return false;
			}
		}
		else
		{
			show2.innerHTML = "Picture cannot be empty";
			return false;
		}
	}
	else
	{
		show1.innerHTML = "UserId cannot be empty and has to be a positive number";
		return false;
	}

}

function clicks1()
{
	var show1 = document.getElementById("show1");
	show1.innerHTML = "";
}

function clicks2()
{
	var show2 = document.getElementById("show2");
	show2.innerHTML = "";
}