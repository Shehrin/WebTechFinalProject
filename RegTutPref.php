<?php
	require_once 'controller/TutorRegController.php';

	/*session_start();
	$subject=$err_subject=$salary=$err_salary=$classRange=$err_classRange="";
	
	if($_SERVER['REQUEST_METHOD']== "POST")
	{
		$subject = @$_POST['subject'];
		$classRange = @$_POST['classRange'];
		$salary = @$_POST['salary'];
		
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
	}	*/
?>

<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
	</head>
	<body>
		<center>
		<h1 class="header" >WHAT KIND OF STUDENT ARE YOU LOOKING FOR</h1>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<fieldset>
					<table>
						<tr>
							<td><span><b>SUBJECTS YOU WOULD TEACH</b></span></td>
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
							<td><span><b>EXPECTED SALARY RANGE</b></span></td>
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
						<tr>
							<td><span><b>YOUR PREFERRED CLASS RANGE TO TEACH</b></span></td>
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
					</table>
					<br>
					<input type="Submit" class="btn" name="RegTutPref" value="Submit">
				</fieldset>
			</form>
		</center>
	</body>
</html>