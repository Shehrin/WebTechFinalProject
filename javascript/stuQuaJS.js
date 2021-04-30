    function valStuQua()
	{
		var name = document.forms['StuQuaForm']['name'].value;
		if (name=="") 
		{
			alert("ENTER YOUR NAME");
			return false;
		}
		var subject = document.forms['StuQuaForm']['subject'].value;
		if (subjct=="") 
		{
			alert("SELECT SUBJECTS");
			return false;
		}
		var classRange = document.forms['StuQuaForm']['classRange'].value;
		if (classRange=="") 
		{
			alert("SELECT CLASS RANGE");
			return false;
		}
		var salary = document.forms['StuQuaForm']['salary'].value;
		if (salary=="") 
		{
			alert("SELECT SALARY RANGE YOU WOULD OFFER");
			return false;
		}
		
	}
