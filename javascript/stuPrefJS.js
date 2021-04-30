function valStuPref()
	{
		var gender = document.forms['StuPrefForm']['gender'].value;
		if (gender=="") 
		{
			alert("SELECT YOUR GENDER");
			return false;
		}
		var board = document.forms['StuPrefForm']['board'].value;
		if (board=="") 
		{
			alert("SELECT BOARD");
			return false;
		}
		var medium = document.forms['StuPrefForm']['medium'].value;
		if (medium=="") 
		{
			alert("SELECT MEDIUM");
			return false;
		}
		var days = document.forms['StuPrefForm']['days'].value;
		if (days=="") 
		{
			alert("SELECT NUMBER OF DAYS");
			return false;
		}
	}
