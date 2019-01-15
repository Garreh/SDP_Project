<?php

	session_start();
	if(isset($_SESSION['admin'])) //to check if the user already login
	{	//if yes, then goodbye
		echo "<script>alert('Goodbye, admin".$_SESSION['admin'].", see you again!');</script>";
	
		//finally destroy the session(logout complete)
		session_destroy();
		//go to login page
		echo "<script>window.location.href='admin_login.php';</script>";
	}
	else //if the user did not even login before logging out, will go to login.php page
	{
		echo "<script>alert('Please login first before logging out!');</script>";
		die("<script>window.location.href='login.php';</script>");
	}

?>