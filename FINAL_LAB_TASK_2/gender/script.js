function validation()
{
	var show = document.getElementById("show");
	var m = document.getElementById("male").checked;
	var f = document.getElementById("female").checked;
	var o = document.getElementById("other").checked;
	if( m == true || f == true || o == true)
	{
		return true;
	}
	else
	{
		show.innerHTML = "Must be one of them has to be selected";
		return false;
	}

}

function clicks()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}