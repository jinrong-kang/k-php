function isDisplay()
{
	var ratios = document.getElementsByName("B2a");
	if(ratios[2].checked)
	{
		document.getElementById("display").style.display="block";
	}
	else
	{
		document.getElementById("display").style.display="none";
	}
}