<?php

    session_start(); //start session for every usage and one time
    if(isset($_SESSION['student']))
    {
        session_destroy(); 
        session_start();
    }

	include "conn.php"; //go database
	
	if(isset($_POST['uname']) && isset($_POST['psw'])) //to check if the username and password are set
	{
		$username = mysqli_real_escape_string($conn,$_POST['uname']);
		$password = mysqli_real_escape_string($conn,$_POST['psw']);
		//read the data from membership table for the email(username) and password
		$sql = "SELECT * FROM teacher WHERE teacher_email = '$username' and teacher_password = '".md5($password)."'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)<=0)//if there is no result
		{	//try to read data from admin table(admin can login from user login page)
			$sql2 = "SELECT * FROM teacher WHERE teacher_username = '$username' and teacher_password = '".md5($password)."'";
			$sql2_result = mysqli_query($conn, $sql2);
		
			if(mysqli_num_rows($sql2_result)<=0)//if still no result
			{	//wrong username and password is the only reason, and will go back to previous page(login page)
				echo "<script>alert('Wrong username / password! Please Try Again!');</script>";
				die("<script>window.history.go(-1);</script>");
			}
			else //then the login is successful for admin
			{
                while($row = mysqli_fetch_array($sql2_result))
                {
                    $teacher = $row['teacher_username'];
                }
				$_SESSION['teacher'] = $teacher; //set an admin session for username
				$_SESSION['start'] = time();	//set the start time to the login moment
				$_SESSION['expire'] = $_SESSION['start'] + (300 * 60); //set the time limit for login
				echo "<script>window.location.href='../home_page.php';</script>"; //go to admin homepage
			}
		}
		else //if the first read result exist, will be user login(successful)
		{
			while($row = mysqli_fetch_array($result))
            {
                $teacher = $row['teacher_username'];
            }
			$_SESSION['teacher'] = $teacher; //set an admin session for username
			$_SESSION['start'] = time();	//set the start time to the login moment
			$_SESSION['expire'] = $_SESSION['start'] + (300 * 60); //set the time limit for login
			echo "<script>window.location.href='../home_page.php';</script>"; //go to user homepage
		}
	
	}
	else	//if the username and password is not set from login page, will jump back to login page
	{
		echo "<script>alert('No username and password set!')</script>";	
		die("<script>window.location.href='../../login_page.php'</script>");
    }
?>