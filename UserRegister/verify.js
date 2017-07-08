

function validate_name(str)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    	document.getElementById("nameText").innerHTML=xmlhttp.responseText;
    	}
  	}
	xmlhttp.open("GET","verify.php?flag=1&name="+str,true);
	xmlhttp.send();
	}

function validate_email(str)
	{
	var xmlhttp;
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    	document.getElementById("emailText").innerHTML=xmlhttp.responseText;
    	}
  	}
	xmlhttp.open("GET","verify.php?flag=2&email="+str,true);
	xmlhttp.send();
	}