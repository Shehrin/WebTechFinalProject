<?php
	require_once 'controller/TutorRegController.php';
	/*session_start();
	$name=$err_name=$gender=$err_gender=$board=$err_board=$medium=$err_medium=$days=$err_days="";
	
	if($_SERVER['REQUEST_METHOD']== "POST")
	{
		$gender = @$_POST['gender'];
		$board = @$_POST['board'];
		$medium = @$_POST['medium'];
		$name = $_POST['name'];
		$days = $_POST['days'];
		
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
	} */
?>
<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
		<script src="javascript/tutQuaJS.js"></script>
	</head>
	<body>
		<center>
		<h1 class="header" >TELL US ABOUT YOURSELF</h1>
			<form name="TutQuaForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="valTutQua()">
				<fieldset>
					<table>
						<tr>
							<td><span><b>NAME</b></span></td>
							<td><input type="text" name="name" value="<?php echo $name;?>">
							<span class="error"><?php echo $err_name;?></span></td>
						</tr>
						<tr>
							<td><span><b>GENDER</b></span></td>
							<td><input type="radio" name="gender" id="male" value="male"><span>Male</span>
						    <input type="radio" name="gender" id="female" value="female"><span>Female</span>
						    <input type="radio" name="gender" id="other" value="other"><span>Other</span>
						    <span class="error"><?php echo $err_gender;?></span></td>
						</tr>
						<tr>
							<td><span><b>EDUCATION BOARD</b></span></td>
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
				<input type="Submit" class="btn" name="RegTutQua" value="Submit">
				</fieldset>
			</form>
		</center>
	</body>
</html>