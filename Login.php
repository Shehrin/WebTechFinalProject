<?php
	require_once 'controller/signup&loginController.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="mystyle.css">
	</head>
	<body>
		<center>
				<h1 class="header" >LOG IN</h1>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<fieldset>
					<table>
						<tr>
							<td><span><b>Email</b></span></td>
							<td><input type="text" name="email" value="<?php echo $email;?>">
							<span class="error"><?php echo $err_email;?></span></td>
						</tr>
						<tr>
							<td><span><b>Password</b></span></td>
							<td><input type="password" name="pass" value="<?php echo $pass;?>">
							<span><?php echo $err_pass;?></span></td>
						</tr>
					</table>
					<br>
				<input type="Submit" class="btn" name="Login" value="Log in">
				<p>
				Not Signed up?<a href="signUp.php">Sign Up Now!</a>
				</p>
				</fieldset>
			</form>
		</center>
	</body>
</html>