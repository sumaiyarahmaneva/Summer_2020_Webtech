function validation()
{
	var show = document.getElementById("show");
	var bg = document.getElementById("bloodgroup").value;
	if( bg != "")
	{
		return true;
	}
	else
	{
		show.innerHTML = "Must be selected";
		return false;
	}

}

function clicks()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}