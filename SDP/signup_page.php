<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('template/header.php');?>
    <meta charset="utf-8">
    <title>Sign Up</title>
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
      
    <script type="text/javascript">
      $(document).ready(	//to get current page document ready for a function
        function(){
            $('#password').keyup(function()	//get the changes done on the input with id of psw
            {
                var psw = $(this).val();
                //alert(pswfrominput);
                //connect to php
                $.post("check_password.php", {password: psw}, function(data) //use for posting data without using any form and without changing the page
                {
                    if(data.status == true)
                    {
                        $('#result').html(data.msg).css('color','green');//message color=green
                        $('#Register').attr("disabled",false);	//the button is enable again
                    }
                    else if(data.status == "moderate")
                    {
                        $('#result').html(data.msg).css('color','#EE7700');//message color=green
                        $('#Register').attr("disabled",false);	//the button is enable again
                    }
                    else
                    {
                        $('#result').html(data.msg).css('color','red');	//message color=red
                        $('#Register').attr("disabled",true);	//the button is disable
                    }
                }, 'json');
            });
        });
    </script>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3 " style="background-color:#3A3837;">
      <a class="navbar-brand " href="home_page.php">History</a>
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
        <form name="form" method="post" action="signup.php" class="form-horizontal container ">
          <div class="form-group row justify-content-center">
            <h1 class="title pt-5">Sign Up</h1>
          </div>
          <br>
          <br>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">First Name:</label>
              <input type="text" name="f_name" required="required" class="form-control" placeholder="First Name">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">Last Name:</label>
              <input type="text" name="l_name" required="required" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">Username:</label>
              <input type="text" name="uname" required="required" class="form-control" placeholder="Username">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">Password:</label>
              <input type="password" id="password" maxlength="12" required="required" name="psw" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <label for="" style="float:left;">Email Address:</label>
              <input type="email" name="email" required="required" class="form-control" placeholder="Email Address">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
                <?php 
                    $max = strtotime("-12 years",time());
                    $value = strtotime("-17 years",time());
                    $date = date("Y-m-d",$max);
                    $date2 = date("Y-m-d",$value);
                ?>
              <label for="" style="float:left;">Date of Birth:</label>
              <input type="date" name="dob" max="<?php echo $date ?>" value="<?php echo $date2 ?>" required="required" class="form-control"/>
            </div>
          </div>
            <span id="result"></span>
          <br>
          <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <input type="submit" id="Register" value="Register" class="button btn-lg pl-5 pr-5"/>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <small id="passwordHelpBlock" class="form-text text-muted">
                <a href="/SDP/login_page.php">Already have an account? Log in here.</a>
              </small>
            </div>
          </div>
        </form>
      </center>
    </div>
  </body>
    <?php include('template/footer.php');?>
    <script type="text/javascript" src="javascripts/basic.js"></script>
</html>
