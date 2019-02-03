<!DOCTYPE html>
<html>
    <?php
    //step 1: get connection.
    //step 2: get the current 'user' to edit their profile
    session_start();
	include 'conn.php';
    //$_SESSION['student_username'] = 'imran';
	$teacher_username = $_SESSION['teacher_username'];
    
    $sql = "SELECT * from teacher WHERE teacher_username = '$teacher_username'";
	$result = mysqli_query($conn, $sql);
    
	// to fetch the data from the database for display it
	while($rows = mysqli_fetch_array($result))
	
	{
		 $teacher_username= $rows['teacher_username'];
		 $teacher_email= $rows['teacher_email'];
		 $first_name= $rows['first_name'];
		 $last_name= $rows['last_name'];
		 
		
	}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('template/header.php');?>
    <meta charset="utf-8">
    <title>Edit Profile Teacher</title>
    <style media="screen">
    .button
    {
      background-color: #3A3837;
      border: 2px solid #3A3837;
      color: #FFFFFF;
      padding: 10px 24px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius: 3px;
      border:none;
    }

    .button:hover {
      background-color: #FFFFFF;
      color: #3A3837;
    }

    .title
    {
      color: #47525E;
      font-family: Roboto;
      font-size: 40px;
      font-weight: 900;
      line-height: 50px;
      text-align: center;
    }

    label
    {
      color: #47525E;
      font-size: 17px;
      font-weight: 700px;
      font-family: Roboto;
    }
    </style>
    </head>
    
    <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3 " style="background-color:#3A3837;">
      <a class="navbar-brand " href="/SDP">History</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
          <a href="/SDP/login_page.php" class="btn btn-danger btn-rounded">LOGIN</a>
      </div>
    </nav>
    <div class="" style="height:900px; background-color:#F2E4B9; padding-top:2%;">
      <center>
        <form name="form" method="post" action="update_teacher_profile.php" class="form-horizontal container ">
          <div class="form-group row justify-content-center">
            <h1 class="title pt-5">Edit Profile</h1>
          </div>
          <br>
          <br>
    <div class="form-group row justify-content-center"> <!-- student username !-->
            <div class="col-sm-4 ">
              <label for="" style="float:left;">Username:</label>
              <input type="text" name="teacher_username"  value="<?php echo $student_username; ?>" required="required" class="form-control" placeholder="Username">
           </div>  
           
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">Last Name:</label>
              <input type="text" name="last_name" required="required"  value="<?php echo $last_name; ?>" class="form-control" placeholder="Last Name" >
            </div>
          </div>
          <div class="form-group row justify-content-center">
             <div class="col-sm-4 ">
              <label for="" style="float:left;">First Name:</label>
              <input type="text" name="first_name" value="<?php echo $first_name; ?>" required="required"  class="form-control" placeholder="First Name" >
            </div>
          </div>
            <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">Email Address:</label>
              <input type="email" name="teacher_email"  value="<?php echo $teacher_email; ?>" required="required" class="form-control" placeholder="Email Address" >
            </div>
          </div>
             <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <input type="submit" id="Submit" value="Submit" class="button btn-lg pl-5 pr-5"/>
            </div>
          </div>
          </form>
        </center>
        </div>
    </body>
    <?php include('template/footer.php');?>
</html>