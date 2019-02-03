<?php
include ("conn.php");
if($_POST)
{  
    $opass = $_POST("opass"); //oldpassword
    $npass = $_POST("npass");  //newpassword
    $cpass = $_POST("cpass");   //confirmpassword

    $user = $_SESSION["student_username"];
    
    $oqr = mysql_query("select student_password from student where student_username = '($user)'") or die (mysql_error());
    
    $odata = mysqli_fetch_row($oqr); //fetch the old data password
    
    if($odata[0]==$opass) //if oldpassword match with the database
    {
        if($npass == $cpass) 
        {
            $q = mysql_query("Update student set student_password='($npass)' where student_username = '($user)'") or die(mysql_error());
            
            if($q)
            {
                echo "<script>alert(' Password Changed' )</script>";
            }
            
        }else 
        {    
        echo "<script>alert('New password and Confirm Password does not match')</script>";
        }
    }
    else
        {
            
            echo  "<script>alert('Old password not Match') </script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('template/header.php');?>
    <meta charset="utf-8">
    <title>Change Password For Student</title>
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
            <h1 class="title pt-5">Change Password For Student</h1>
          </div>
          <br>
          <br>
    <body>
    <form method="post">
        <table>
            <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">First Name:</label>
              <input type="text" name="opass" required="required" class="form-control" placeholder="Old Password">
            </div>
          </div>
             <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">New Password:</label>
              <input type="text" name="npass" required="required" class="form-control" placeholder="New Password">
            </div>
          </div>
            <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">Confirm Password:</label>
              <input type="text" name="cpass" required="required" class="form-control" placeholder="New Password">
            </div>
          </div>
          
            <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <input type="submit" id="Submit" value="Submit" class="button btn-lg pl-5 pr-5"/>
            </div>
          </div>
        </table>
        
        
        </form>
    
    </body>
          </form>
        </center>
        </div>
    </body>
</html>



  <!--<tr>
                <td> Old Password</td>
                <td><input type="text" name="opass"></td>
            </tr>
            
            <tr>
                <td> New Password</td>
                <td><input type="text" name="npass"></td>
            </tr>
            
            <tr>
                <td> Confirm Password</td>
                <td><input type="text" name="cpass"></td>
            </tr> !-->