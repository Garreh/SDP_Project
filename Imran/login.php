<?php
session_start();//start session for every usage and one time

	include "connection.php"; //go to database
	//get from html login
	$student_username = mysqli_real_escape_string($connection,$_POST['student_username']);
	$student_password = mysqli_real_escape_string($connection,$_POST['student_password']);

    if (empty($student_username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($student_password)) {
  	array_push($errors, "Password is required");
  }

	$sql="Select * from users WHERE student_username ='$student_username' and student_password ='".md5($student_password)."'";
	//echo $sql;
	$result=mysqli_query($connection, $sql);

	if(mysqli_num_rows($result)>=1)
	{
		echo "<script>alert('Login Successfull!');</script>";
		$rows = mysqli_fetch_array($result);

		$_SESSION['student_user'] = $student_username;
		$_SESSION['student_email'] = $rows['student_email'];
		die("<script>window.location.href= 'homepage.php'</script>"); // our homepage.
	}
	

echo "<script>alert('Login Fail! Please try again !');</script>";
		die("<script>window.location.href= 'login.html'</script>");
	
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<style>
    body {
        font-family: 'Anton', sans-serif;
        font-size: 16px;
    }
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">
    <body>
        <div class="header">
  <a href="#default" class="logo">eLearning</a>
  <div class="header-right">
    <a class="active" href="signup.php">Sign Up</a> 
  </div>
</div>
        <div class="container" style="margin-left:500px";>
            <h1> Login </h1>
            
    <label for="last_name"></label>
        <input type="text" placeholder="Last Name" name="last_name" required>
    
    <label for="password"></label>
        <input type="password" placeholder="Password" name="password" required>
         
            <div class="clearfix">
            
                <button class="login_button" name="login_user" type="submit" style="margin-right: 200px" href="ed">
                <span>SIGN IN</span></button> 
            </div> 
            
        </div>
    </body>
    </head>
</html>
  
    
   