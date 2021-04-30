<?php
	require_once 'controller/StudentRegController.php';
	/*session_start();
	$gender=$err_gender=$board=$err_board=$days=$err_days=$medium=$err_medium="";
	
	if(!isset($_SESSION['ID']))
	{
		header("Location:signUp.php");
	}
	$ID=$_SESSION['ID'];
	if($_SERVER['REQUEST_METHOD']== "POST")
	{
		include('db_connect.php');
		$gender = @$_POST['gender'];
		$board = @$_POST['board'];
		$medium = @$_POST['medium'];
		$days=@$_POST['days'];
		
	if(!isset($_POST["gender"])) 
    {
        $err_gender = "[GENDER IS REQUIRED]";
	}
	if(empty($_POST["board"])) 
    {
        $err_board = "[PLEASE SELECT A BOARD]";
    }
	if(!isset($_POST["medium"])) 
    {
        $err_medium = "[LESSON MEDIUM IS REQUIRED]";
	}
	if(empty($_POST["days"])) 
    {
        $err_days = "[PLEASE SELECT NUMBER OF DAYS]";
    }
	if(empty($err_gender) && empty($err_board) && empty($err_days) && empty($err_medium))
		{
			$query = "UPDATE student set (tutor_gender,board,days,medium) values('$gender','$board','$days','$medium') WHERE userID='$ID'";
	
			$result = mysqli_query($conn, $query);
            
			if ($result) 
			{
				header("Location: Login.php");
				die();
			}
		}
	

    }*/
?>

<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
		<script src="javascript/stuPrefJS.js"></script>
	</head>
	<body>
		<center>
			<h1 class="header" >WHAT REQUIREMENTS DO YOU EXPECT IN A TUTOR</h1>
				<form name="StuPrefForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="valStuPref()">
					<fieldset>
					
					<table>
						<tr>
							<td><span><b>TUTOR'S GENDER</b></span></td>
							<td><input type="radio" name="gender" id="male" value="male"><span>Male</span>
						    <input type="radio" name="gender" id="female" value="female"><span>Female</span>
						    <input type="radio" name="gender" id="other" value="other"><span>Other</span>
						    <span class="error"><?php echo $err_gender;?></span></td>
						</tr>
						<tr>
							<td><span><b>TUTOR'S EDUCATION BOARD</b></span></td>
							<td>
							<select name="board">
							<option disabled selected>Board</option>
							<?php
								$board= array("National Curriculum(Bangla)","National Curriculum(English)","Edexcel","Cambridge","International Baccalaureate");
								for($j=0;$j<count($board);$j++)
								{
									echo "<option>$board[$j]</option>";
								}
							?>
							</select>
							<span class="error"><?php echo $err_board;?></span></td>
						</tr>
						<tr>	
							<td><span><b>DAYS PER WEEK</b></span></td>
							<td>
							<select name="days">
							<option disabled selected>1</option>
							<?php
							for($i=1;$i<=6;$i++)
							{
								echo "<option>$i</option>";
							}
							?>
							</select>
							<span class="error"><?php echo $err_days;?></span></td>
						</tr>
						<tr>
							<td><span><b>MEDIUM OF LESSONS</b></span></td>
							<td><input type="radio" name="medium" id="Online" value="Online"><span>Online</span>
						    <input type="radio" name="medium" id="Offline" value="Offline"><span>Offline</span>
							<span class="error"><?php echo $err_medium;?></span></td>
						</tr>	
					</table>
					<br>
				<input type="Submit" class="btn" name="RegStuPref" value="Submit">
				</fieldset>
			</form>
		</center>
	</body>
</html>