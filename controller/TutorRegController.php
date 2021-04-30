<?php
	require_once 'models/db_connect.php';
	session_start();
	
	$name=$err_name=$gender=$err_gender=$board=$err_board=$medium=$err_medium=$days=$err_days=$subject=$err_subject=$salary=$err_salary=$classRange=$err_classRange="";
	
	if(isset ($_POST["RegTutQua"]))
	{
		$_SESSION["gender"] = @$_POST['gender'];
		$_SESSION["board"] = @$_POST['board'];
		$_SESSION["medium"] = @$_POST['medium'];
		$_SESSION["name"] = @$_POST['name'];
		$_SESSION["days"] = @$_POST['days'];
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
			//insertTutor($name,$gender,$board,$medium,$days);
			header("Location:RegTutPref.php");
		}
	}
	function insertTutor($name,$gender,$board,$medium,$days)
	{
		$query= "INSERT INTO tutor values(NULL,'$name','$gender','$board','$medium','$days')";
		execute($query);
	}
	
	if(isset ($_POST["RegTutPref"]))
	{
		$subject = $_POST['subject'];
		$classRange = $_POST['classRange'];
		$salary = $_POST['salary'];
		$hasError=false;
		
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
			updateTutor($subject,$classRange,$salary);
			header("Location:Login.php");
		}
		
	}
	function updateTutor($subject,$classRange,$salary)
	{
		$email=$_SESSION["email"];
		$pass=$_SESSION["pass"];
		$gender= $_SESSION['gender'];
		$board = $_SESSION['board'];
		$medium = $_SESSION['medium'];
		$name = $_SESSION['name'];
		$days = $_SESSION['days'];
		
		$query = "insert into users values(NULL,'$email','$pass')";
		execute($query);
		$query = "select ID from users where email = '$email'";
		$rs = get($query);
		$uid = $rs[0]["ID"];
		$query = "insert into tutor values(NULL,$uid,'$name','$gender','$board','$medium','$days','$subject','$salary','$classRange')";
		execute($query);
		//$query= "UPDATE tutor SET gender='$gender',board='$board',medium='$medium' WHERE tutorID=";
		//execute($query);
	}
?>