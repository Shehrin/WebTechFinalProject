<?php
	
	if(isset($_POST['SubmitT']))
	{
		header("Location:RegTutQua.php");
	}
	
	elseif(isset($_POST['SubmitS']))
	{
		header("Location:RegStuQua.php");
	}

?>