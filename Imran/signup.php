<?php include('server.php') ?>

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
<link rel="stylesheet" href="signup.css">
    <body>
        <div class="header">
  <a href="#default" class="logo">eLearning</a>
  <div class="header-right">
    <a class="active" href="login.php">Login</a> 
  </div>
</div>
        <div class="container" style="margin-left:500px";>
            <h1> Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
    <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
      
      <label for="student_username"></label>
      <input type="text" placeholder="Student Name" name="student_username" value="<?php echo $student_username; ?>" required>
      
      <label for="student_email"></label>    
      <input type="text" placeholder="Enter Email" name="student_email" value="<?php echo $student_email; ?>" required>
        
      <label for="student_password"></label>
      <input type="password" placeholder="Password" name="student_password" required>
        
      <label for="first_name"></label>
      <input type="text" placeholder="First Name" name="first_name" required>
      
      <label for="last_name"></label>
      <input type="text" placeholder="Last Name" name="last_name" required>    
        
      <label for="DOB"></label>
      <input type="date" placeholder="Date Of Birth" name="birthdate" required>    
    
            <div class="clearfix">
           
                <button class="login_button" name="reg_user" type="submit" style="margin-right: 200px" href="##">
                <span>SIGN UP</span></button> 
                
            </div>
        
            </form>
        
        </div>
    
    </body>
</head>
</html>
