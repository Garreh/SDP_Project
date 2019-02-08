
<!DOCTYPE html>
<html>
    <?php
    //step 1: get connection.
    //step 2: get the current 'user' to edit their profile
    session_start();
	include 'connection.php';
    //$_SESSION['student_username'] = 'imran';
	$student_username = $_SESSION['student_username'];
    
    $sql = "SELECT * from student WHERE student_username = '$student_username'";
	$result = mysqli_query($connection, $sql);
    
	// to fetch the data from the database for display it
	while($rows = mysqli_fetch_array($result))
	
	{
		 $student_username= $rows['student_username'];
		 $student_email= $rows['student_email'];
		 $student_password=  $rows['student_password'];
		 $first_name= $rows['first_name'];
		 $last_name= $rows['last_name'];
		 
		

		
	}

?>

<head>
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<style>
   body {font-family: Arial, Helvetica, sans-serif;}

/* H1 style */

.modal-content h1 {
        margin-left:100px;
    }

    /* change password button */
    
    .submit_button {
      width: 250px;
        height: 50px;
        border-radius: 2px;
        background-color: blue;
        border: 1px solid blue;
        font-size: 20px;
        text-align: center;
        font-family: sans-serif;    
        cursor: pointer;
        margin: 5px;
        transition: all 0.5s;
        margin-left: 150px;
        color: white;
        display: inline;
        margin-left: 2px;
    }
    
    .submit_button span {
  cursor: pointer;
  display: inline-block;
    position: relative;
    transition: 0.5s;
    font-weight: bolder;
}

.submit_button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.submit_button:hover span {
  padding-right: 25px;
}

.submit_button:hover span:after {
  opacity: 1;
  right: 0;
}
    
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: orange;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  height: 55%;
  border-style: solid;
  border-width: medium;
  border-color: black;
}


/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    
    <form method="post" action="update.php" enctype="multipart/form-data">
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="edit_profile.css">
    <body>
        <div class="header">
  <a href="#default" class="logo">eLearning</a>
  <div class="header-right">
    <a class="active" href="##">Back</a> 
  </div>
</div>
    <div class="container" style="margin-left:500px";>
        <h1> Edit Profile </h1>
        
    <label for="student_username"></label>
        <input type="text" placeholder="Username" name="student_username"  value="<?php echo $student_username; ?>">
        
    <label for="student_email"></label>
        <input type="text" placeholder="Email" name="student_email"  value="<?php echo $student_email; ?>">
        
    <label for="first_name"></label>
        <input type="text" placeholder="first_name" name="first_name"  value="<?php echo $first_name; ?>">
        
    <label for="last_name"></label>
        <input type="text" placeholder="last_name" name="last_name"  value="<?php echo $last_name; ?>">
        
         
            <div class="clearfix">        
        <button class="login_button" type="submit" style="margin-left: -1px" href="##">
                <span>Save Changes</span></button> 
         <button class="password_button" id="myBtn" type="submit" style="margin-right: 0px" href="##">
                <span>Change Password</span></button> 
           </div>
        </div>
   
  <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close">&times;</span>
    <h1>Change Password</h1>
            
            <form action="update.php" method="post">
           <label for="last_name"></label>
        <input type="text" placeholder="Current Password" name="student_password" style="margin-left: 100px;" name="CurrentPasword">
                
        <label for="password"></label>
        <input type="text" placeholder="New Password" style="margin-left: 100px;"name="New Password" required>
                
         <input type="text" placeholder="Confirm Password" style="margin-left: 100px;"name="New Password" required>
                
        <div class="change_button">
        <button class="submit_button" type="submit" style="margin-left: 100px" href="##">
            
        <span>Change Password</span></button>
            </div>
        </form>
  </div>

</div>

        
          
    
        
        
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

        -->
    </body>
    </head>
</html>
  