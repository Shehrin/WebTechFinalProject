/*function get(id)
{
	document.getElementById(id).value;
}
function validateForm()
{
	var email= get("email");
	var pass= get("pass");
	
	if(email == "" || pass == "" || conpass == "")
	{
		get("allerror").innerHTML="[ENTER ALL INFORMATION]";
		return false;
	}
	else
	{
		return true;
	}
}	
function validateEmail()
{
	var email= get("email");
	if(email=="")
	{
		get("email").innerHTML="[ENTER YOUR E-MAIL]";
		return false;
	}
	else
	{
		get("email").innerHTML="";
		return true;
	}
}*/


function validateForm()
{
	var email = document.forms['sForm']['email'].value;
	if (email=="") 
	{
		alert("ENTER E-MAIL");
		return false;
	}
	var pass = document.forms['sForm']['pass'].value;
	if (pass=="") 
	{
		alert("ENTER A PASSWORD");
		return false;
	}
	var conpass = document.forms['sForm']['conpass'].value;
	if (conpass=="") 
	{
		alert("ENTER PASSWORD AGAIN!");
		return false;
	}
	if(pass!= conpass)
	{
		alert("Passwords don't match");
		return false;
	}
}
	
	
	
	
	
	