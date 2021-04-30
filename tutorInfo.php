<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
    <h1 class="header" style="width:50%" >Tutor List</h1>
    <form style="width:50%">
        <?php
            $subject =$_GET["subject_pref"];
            $sql = "SELECT * FROM tutor WHERE subject_pref like '$subject%' ";
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
                    echo "<th>Gender</th>";
                    echo "<th>Board</th>";
                    echo "<th>Medium Of Lessons</th>";
					echo "<th>Number Of Days Available</th>";
					echo "<th>Preferred Subject</th>";
					echo "<th>Salary Preference</th>";
					echo "<th>Preferred Class Range</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['board'] . "</td>";
                        echo "<td>" . $row['medium'] . "</td>";
						echo "<td>" . $row['days'] . "</td>";
						echo "<td>" . $row['subject_pref'] . "</td>";
						echo "<td>" . $row['salary_pref'] . "</td>";
						echo "<td>" . $row['classRange'] . "</td>";
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