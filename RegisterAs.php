<?php
	require_once 'controller/RegAsController.php';
	/*session_start();
	$email="";
	$result1=$result2=$row1=$row2="";
	if(!isset($_SESSION['email']))
	{
		header("Location:signUp.php");
	}
	
	else
	{
		$email=$_SESSION['email'];
		if(isset($_POST['SubmitT']))
	{
		$query1="SELECT * from users WHERE email='$email'";
		get($query1);
		
			$_SESSION['ID']=$data['ID'];
			header("Location:RegTutQua.php");
			exit;
		
	}
	elseif(isset($_POST['SubmitS']))
	{
		$query2="SELECT * from users WHERE email='$email'";
		get($query2);
		$_SESSION['ID']=$data['ID'];
		header("Location:RegStuQua.php");
		exit;
	}
	}*/
?>
<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
	</head>
	<body>
		<center>
		<h1 class="header" >REGISTER AS</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<fieldset>
					
					<table>
						<tr>
							<input type="Submit" class="btn" name="SubmitT" value="As Tutor">
						</tr>
						<tr>
							<input type="Submit" class="btn" name="SubmitS" value="As Student">
						</tr>
					</table>
				</fieldset>
			</form>
		</center>
	</body>
</html>