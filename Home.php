<?php
	require_once 'models/db_connect.php';
	require_once 'controller/signup&loginController.php';
	$uID=$email="";
	
	
	if(!isset($_SESSION['uID']))
	{
		header("Location:Login.php");
		
	}
	$uID=$_SESSION['uID'];
	$query="SELECT * FROM users WHERE ID='$uID'";
	//$query="SELECT * FROM student,tutor WHERE userID='$uID'";
	$res=get($query);
	$email=$res[0]['email'];
?>

<html>
	<link rel="stylesheet" href="homestyle.css">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="AboutUs.php">About</a>
  <a href="Contact.php">Contact</a>
  <input type="text" name="subject" id="subject" placeholder="Search by subject.." oninput="showUser(this.value)" >
  <button type="search">Search</button>
  <a href="logout.php">Logout</a>
  
</div>

<h1>Welcome <?php echo $email; ?></h1>
<p id="txtHint" ></p>

<script>
        function showUser(str)
        {
            if (str=="") 
            {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() 
            {
                if (this.readyState==4 && this.status==200) 
                {
                    document.getElementById("txtHint").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","studentInfo.php?subject="+str,true);
            xmlhttp.send();
        }
 </script>

</body>
</html>
