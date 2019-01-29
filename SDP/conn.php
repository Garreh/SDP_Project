<?php
	//connect to MySQL mysqli_connect()
	//server location, username, password, dbname
	$conn = mysqli_connect('localhost', 'root', '', 'historydb');
	
	if(mysqli_connect_errno())
	{
		die("<script>alert('Error happening with database connection!');</script>");
	}
?>
