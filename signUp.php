<?php
	require_once 'controller/signup&loginController.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
		<script src="javascript/signUpJS.js"></script>
	</head>
	<body>
		<center>
		<h1 class="header">SIGN UP</h1>
		<form name="sForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit= "validateForm()" method="POST">
		<fieldset>
			
			<table>
			<tr>
				<td><span><b>Email</b></span></td>
				<td><input type="text" name="email" id="email" >
				<span> <?php echo $err_email;?></span></td>
			</tr>
			
			<tr>
				<td><span><b>Password</b></span></td>
				<td><input type="password" name="pass" id="pass">
				<span><?php echo $err_pass;?></span></td>
			</tr>
			
			<tr>
				<td><span><b>Confirm Password</b></span></td>
				<td><input type="password" name="conpass" id="conpass">
				<span><?php echo $err_conpass;?></span></td>
			</tr>
			</table>
			
			<br>
				<input type="Submit" class="btn" name="SignUp" value="Sign up">
				<p>
				Signed up?<a href="Login.php">Login</a>
				</p>
		</fieldset>
		</form>
		</center>
	</body>
</html>	