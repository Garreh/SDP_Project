<?php
// edit profile user
// get connection to database 

//step 1: get connection to database
$connection = mysqli_connect('localhost', 'root', '' , 'elearning');

if (mysqli_connect_errno()) //check connection!
{
	die("<script>alert('error in db connection!');</script>");
}

//success connection
echo "<script>alert('Success connection!');</script>";


?>
