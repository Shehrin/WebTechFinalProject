function valTutQua()
{
	var name = document.forms['TutQuaForm']['name'].value;
		if (name=="") 
		{
			alert("ENTER YOUR NAME");
			return false;
		}
	var gender = document.forms['TutQuaForm']['gender'].value;
		if (gender=="") 
		{
			alert("SELECT YOUR GENDER");
			return false;
		}	
	var board = document.forms['TutQuaForm']['board'].value;
		if (board=="") 
		{
			alert("SELECT YOUR BOARD");
			return false;
		}		
	var days = document.forms['TutQuaForm']['days'].value;
		if (days=="") 
		{
			alert("SELECT THE NUMBER OF DAYS YOU ARE AVAILABLE");
			return false;
		}	
	var medium = document.forms['TutQuaForm']['medium'].value;
		if (medium=="") 
		{
			alert("SELECT YOUR PREFERRED MEDIUM OF LESSONS");
			return false;
		}	
		
		
}