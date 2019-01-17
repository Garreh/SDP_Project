<?php
session_start();

// initializing variables
$student_username = "";
$student_email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'elearning');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $student_username = mysqli_real_escape_string($db, $_POST['student_username']);
  $student_email = mysqli_real_escape_string($db, $_POST['student_email']);
  $student_password = mysqli_real_escape_string($db, $_POST['student_password']);
  $first_name =  mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);



    //if ($password_1 != $password_2) {
	//array_push($errors, "The two passwords do not match");
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($student_username)) { array_push($errors, "Name is required"); }
  if (empty($student_email)) { array_push($errors, "Email is required"); } 
  if (empty($student_password)) { array_push($errors, "Password is required"); }
  if (empty($first_name)) { array_push($errors, "First Name is required"); }
  if (empty($last_name)) { array_push($errors, "Last Name is required"); }
  if (empty($birthdate)) { array_push($errors, "Date Of Birth is required"); }

  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM student WHERE student_username='$student_username' OR student_email='$student_email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['student_username'] === $student_username) {
      array_push($errors, "Student name already exists");
    }

    if ($user['student_email'] === $student_email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$student_password = md5($student_password);//encrypt the password before saving in the database

  	$query = "INSERT INTO student (student_username, student_email, student_password, first_name, last_name, birthdate) 
  			  VALUES('$student_username', '$student_email', '$student_password','$first_name', '$last_name', '$birthdate')";
  	mysqli_query($db, $query);
      
      // display error if the mysqli query db query have error
  	echo "<script>alert('Register Successful');</script>";
  	header('location: login.php');
  }
}
// ... 

// LOGIN USER
 /*if (isset($_POST['login_user'])) {
  $student_username = mysqli_real_escape_string($db, $_POST['student_username']);
  $student_password = mysqli_real_escape_string($db, $_POST['student_password']);

  if (empty($student_username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($student_password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$student_password = md5($student_password);
  	$query = "SELECT * FROM users WHERE student_username='$student_username' AND student_password='$student_password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['student_username'] = $student_username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: homepage.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
*/

// UPDATE USER
// UPDATE USER

?>