<?php
	require_once 'controller/StudentRegController.php';
	/*session_start();
	$name=$err_name=$subject=$err_subject=$classRange=$err_classRange=$salary=$err_salary="";
	
	if(!isset($_SESSION['ID']))
	{
		header("Location:signUp.php");
	}
	$ID=$_SESSION['ID'];
	
	if($_SERVER['REQUEST_METHOD']== "POST")
	{
		include('db_connect.php');
		$name = $_POST['name'];
		$subject = @$_POST['subject'];
		$classRange = @$_POST['classRange'];
		$salary = @$_POST['salary'];
		
		if (empty($_POST['name'])) 
        {
            $err_name = "[NAME IS REQUIRED]";
        }
		else 
        { 
            if (!preg_match("/^[a-zA-Z-' _]*$/",$name)) 
            {
               $err_name = "[ONLY LETTERS AND WHITESPACE ALLOWED]";
            }
        } 
		if(empty($_POST["subject"])) 
		{
			$err_subject = "[PLEASE SELECT NUMBER OF DAYS]";
		}
		if(empty($_POST["classRange"])) 
		{
			$err_classRange = "[PLEASE SELECT THE RANGE OF YOUR CLASS]";
		}
		if(empty($_POST["salary"])) 
		{
			$err_salary = "[PLEASE SELECT THE SALARY YOU WOULD OFFER]";
		}
		if(empty($err_name) && empty($err_subject) && empty($err_classRange) && empty($err_salary))
		{
			$query = "INSERT into student(userID,name,subject,classRange,offeringSalary) values('$ID','$name','$subject','$classRange','$salary')";
	
			$result = mysqli_query($conn, $query);
            
			if ($result) 
			{
				header("Location: RegStuPref.php");
				die();
			}
		}
	

		
	}*/


?>

<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
		<script src="javascript/stuQuaJS.js"></script>
	</head>
	<body>
		<center>
			<h1 class="header" >TELL US ABOUT YOURSELF</h1>
			<form name="StuQuaForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="valStuQua()">
				<fieldset>
					<table>
						<tr>
							<td><span><b>NAME</b></span></td>
							<td><input type="text" name="name" value="<?php echo $name;?>">
							<span class="error"><?php echo $err_name;?></span></td>
						</tr>
						<tr>
							<td><span><b>SUBJECTS YOU WANT TO LEARN</b></span></td>
							<td>
							<select name="subject">
							<option disabled selected>Subject</option>
							<?php
							$subject= array("Sciences","Humanities","Art","Business","All");
							for($j=0;$j<count($subject);$j++)
							{
								echo "<option>$subject[$j]</option>";
							}
							?>
							</select>
							<span class="error"><?php echo $err_subject;?></span></td>
							
						</tr>
						<tr>
							<td><span><b>YOUR CLASS RANGE</b></span></td>
							<td>
							<select name="classRange">
							<option disabled selected>Class</option>
							<?php
							for($i=1;$i<=12;$i++)
							{
								echo "<option>$i</option>";
							}
							?>
							</select>
							<span class="error"><?php echo $err_classRange;?></span></td>
						</tr>
						<tr>
							<td><span><b>SALARY WOULD YOU OFFER</b></span></td>
							<td>
							<select name="salary">
							<option disabled selected>salary</option>
							<?php
							$salary= array("2k-4k","4k-6k","6k-8k","8k+");
							for($j=0;$j<count($salary);$j++)
							{
								echo "<option>$salary[$j]</option>";
							}
							?>
							</select>
							<span class="error"><?php echo $err_salary;?></span></td>
						</tr>
					</table>
					<br>
					<input type="Submit" class="btn" name="RegStuQua" value="Submit">
				</fieldset>
			</form>
		</center>
	</body>
</html>