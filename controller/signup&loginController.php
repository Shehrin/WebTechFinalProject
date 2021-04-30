<?php
	require_once 'models/db_connect.php';
	session_start();
	$email=$err_email=$pass=$err_pass=$conpass=$err_conpass="";
	
	if(isset ($_POST["SignUp"])) 
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$conpass = $_POST['conpass'];
		$hasError=false;
		
		if(empty($_POST["email"])) 
		{
			$err_email = "[E-MAIL REQUIRED]";
			$hasError=true;
		} 
		else 
		{
			if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
			{
				$err_email = "[INVALID E-MAIL FORMAT]";
				//$hasError=true;
			}
		}
		if(empty($_POST["pass"])) 
		{
			$err_pass = "[PASSWORD REQUIRED]";
			$hasError=true;
		} 
		if(empty($_POST["conpass"])) 
		{
            $err_conpass= "[CONFIRMATION REQUIRED]";
			$hasError=true;
		} 
		if ($pass !== $conpass) 
		{
            $err_conpass=  "[PASSWORD DOES NOT MATCH]";
			$hasError=true;
		}
		
		if(!$hasError)
		{
			$_SESSION["email"] = $email;
			$_SESSION["pass"] = $pass;
			header("Location:RegisterAs.php");
		}
	
	}
		/*function insertUser($email,$pass)
		{
			
			$query= "INSERT INTO users values(NULL,'$email','$pass')";
			execute($query);
			$query = "select ID from users where email='$email'";
			$usr=get($query);
			$_SESSION["ID"] = $usr[0]["ID"];
			
		}*/
		
		if(isset ($_POST["Login"]))
		{
			if(authentication($_POST["email"],$_POST["pass"]))
			{
				//session_start();
				//$_SESSION['uID']=$result[0]['ID'];
				header("Location:Home.php");
				//exit;
				
			}
			else
			{
				echo "Invalid username or password";
			}
		}
		function authentication($email,$pass)
		{
			$query= "SELECT * FROM users WHERE email ='$email' and password='$pass'";
			$result= get($query);
			if(count($result)>0)
			{
				//session_start();
				$_SESSION['uID']=$result[0]['ID'];
				return true;
				//$_SESSION['uID']=$result[0]['ID'];
			}
			return false;
		}

?>