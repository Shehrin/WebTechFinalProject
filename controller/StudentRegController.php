<?php
	//require_once 'controller/signup&loginController.php';
	require_once 'models/db_connect.php';
	session_start();
	$gender=$err_gender=$board=$err_board=$days=$err_days=$medium=$err_medium=$name=$err_name=$subject=$err_subject=$classRange=$err_classRange=$salary=$err_salary="";
	
	if(isset ($_POST["RegStuPref"]))
	{
		$gender = @$_POST['gender'];
		$board = @$_POST['board'];
		$medium = @$_POST['medium'];
		$days=@$_POST['days'];
		$hasError=false;
		
		if(!isset($_POST["gender"])) 
		{
			$err_gender = "[GENDER IS REQUIRED]";
			$hasError=true;
		}
		if(empty($_POST["board"])) 
		{
			$err_board = "[PLEASE SELECT A BOARD]";
			$hasError=true;
		}
		if(!isset($_POST["medium"])) 
		{
			$err_medium = "[LESSON MEDIUM IS REQUIRED]";
			$hasError=true;
		}
		if(empty($_POST["days"])) 
		{
			$err_days = "[PLEASE SELECT NUMBER OF DAYS]";
			$hasError=true;
		}
		if(!$hasError)
		{
			updateStudent($gender,$board,$medium,$days);
			header("Location:Login.php");
			//session_destroy();
		}
		
		
	}
	function updateStudent($gender,$board,$medium,$days)
	{
		$email=$_SESSION["email"];
		$pass=$_SESSION["pass"];
		$name = $_SESSION["name"] ;
		$subject = $_SESSION["subject"] ;
		$classrange = $_SESSION["classRange"];
		$salary= $_SESSION["salary"] ;
		$query = "insert into users values(NULL,'$email','$pass')";
		
		execute($query);
		$query = "select ID from users where email = '$email'";
		$rs = get($query);
		$uid = $rs[0]["ID"];
		$query = "insert into student values(NULL,$uid,'$name','$subject','$classrange','$salary','$gender','$board','$days','$medium')";
		execute($query);
	}
	
	if(isset ($_POST["RegStuQua"]))
	{
		$_SESSION["name"] = $_POST['name'];
		$_SESSION["subject"] = @$_POST['subject'];
		$_SESSION["classRange"] = @$_POST['classRange'];
		$_SESSION["salary"] = @$_POST['salary'];
		$hasError=false;
		
		if (empty($_POST['name'])) 
		{
			$err_name = "[NAME IS REQUIRED]";
			$hasError=true;
		}
		else 
		{ 
			if (!preg_match("/^[a-zA-Z-' _]*$/",$name)) 
			{
				$err_name = "[ONLY LETTERS AND WHITESPACE ALLOWED]";
				$hasError=true;
			}
		} 
		if(empty($_POST["subject"])) 
		{
			$err_subject = "[PLEASE SELECT NUMBER OF DAYS]";
			$hasError=true;
		}	
		if(empty($_POST["classRange"])) 
		{
			$err_classRange = "[PLEASE SELECT THE RANGE OF YOUR CLASS]";
			$hasError=true;
		}
		if(empty($_POST["salary"])) 
		{
			$err_salary = "[PLEASE SELECT THE SALARY YOU WOULD OFFER]";
			$hasError=true;
		}
		if(!$hasError)
		{
			//insertStudent($name,$subject,$classRange,$salary);
			
			header("Location:RegStuPref.php");
		}
	}
	function insertStudent($name,$subject,$classRange,$salary)
	{
		//$id = $_SESSION["ID"];
		//$query= "INSERT INTO student values(NULL,$id,'$name','$subject','$classRange','$salary')";
		execute($query);
	}
?>