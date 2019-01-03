<?php

include "conn.php";

session_start();

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    $sql = "SELECT * FROM admin WHERE admin_username = '$username' and admin_password = '".md5($password)."'";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)<=0)
    {
        echo "<script>alert('Wrong username / password! Please Try Again!');</script>";
        die("<script>window.history.go(-1);</script>");
    }
    else
    {
        echo "<script>alert('Welcome back, admin!');</script>";
        $_SESSION['admin'] = $username; //set an admin session for username
		$_SESSION['start'] = time();	//set the start time to the login moment
		$_SESSION['expire'] = $_SESSION['start'] + (60 * 60); //set the time limit for login
		echo "<script>window.location.href='admin_home.php';</script>";
    }
}
else
{
    echo "<script>alert('No username and password set!')</script>";	
    die("<script>window.location.href='admin_login.php'</script>");
}

?>