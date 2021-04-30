<?php
	$db_server="localhost";
	$db_user="root";
	$db_password="";
	$db="webtechproject";
	
	function execute($query)
	{
		global $db_server,$db_user,$db_password,$db;
		$conn=mysqli_connect($db_server,$db_user,$db_password,$db);
		mysqli_query($conn,$query);
	}
	
	function get($query)
	{
		global $db_server,$db_user,$db_password,$db;
		$conn=mysqli_connect($db_server,$db_user,$db_password,$db);
		$result=mysqli_query($conn,$query);
		$data=array();
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$data[]=$row;
			}
		}
		return $data;
		
	}
	
?>