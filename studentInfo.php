<?php
	//$db_server="localhost";
	//$db_user="root";
	//$db_password="";
	//$db="webtechproject";
	require_once 'models/db_connect.php';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
    <h1 class="header" style="width:50%" >Student List</h1>
    <form style="width:50%">
        <?php
            $subject =$_GET["subject"];
            $sql = "SELECT * FROM student WHERE subject like '$subject%' ";
            //$result =get($sql);

			$connect=mysqli_connect($db_server,$db_user,$db_password,$db);
			$result= mysqli_query($connect,$sql);
            if($result)
            {
				if(mysqli_num_rows($result) > 0)
                {
                    echo "<table class='center'>";
                    echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>Subject</th>";
                    echo "<th>Class Range</th>";
                    echo "<th>Offering Salary</th>";
					echo "<th>Tutor's Gender</th>";
					echo "<th>Board</th>";
					echo "<th>Days</th>";
					echo "<th>Medium of Lessons</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['subject'] . "</td>";
                        echo "<td>" . $row['classRange'] . "</td>";
                        echo "<td>" . $row['offeringSalary'] . "</td>";
						echo "<td>" . $row['tutor_gender'] . "</td>";
						echo "<td>" . $row['board'] . "</td>";
						echo "<td>" . $row['days'] . "</td>";
						echo "<td>" . $row['medium'] . "</td>";
                        echo "</tr>";
                    }    
            echo "</table>";
                }
            }

 


        ?>
        <br>
        <a href="Home.php"><-Back</a>
    </form>

 

 


</body>
</html>