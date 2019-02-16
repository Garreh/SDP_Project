<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('template/header.php');?>
    <meta charset="utf-8">
    <title>History</title>
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
          <a href="/SDP/signup_page.php" class="btn btn-danger btn-rounded">SIGN UP</a>
      </div>
    </nav>

    <div class="" style="height:800px;background-color:#F2E4B9; padding-top:5%;">
      <center>
        <h1 class="title pt-5">Login As</h1>
        <br>
        <div class="">
          <button type="button" name="button" class="btn" id="studentbtn" onclick="studentlog()" style="width:172px;font-size:20px;background-color:#3A3837;color:#FFFFFF;">Student</button>
          <button type="button" name="button" class="btn" id="teacherbtn" onclick="teacherlog()" style="width:172px;font-size:20px;background-color:#3A3837;color:#FFFFFF;">Teacher</button>
        </div>

        <form name="form" method="post" id="stdlog" action="student/back/login.php" class="form-std form-horizontal container" style="display:none" >
        <div class="form-group row justify-content-center">

          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="text" name="uname" class="form-control" id="inputUsername" placeholder="Login ID">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="password" name="psw" maxlength="12" class="form-control" id="inputPassword" placeholder="Password">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <p style="font-size:1em;color:red;padding-top:10px;" id="errmsg"></p>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <input type="submit" class="button btn-lg pl-5 pr-5" value="Login" onclick="stdlogin()"/>
            </div>

            <div class="col-sm-7 text-center">
              <p style="font-size:1em;color:red;padding-top:10px;" id="errmsg"></p>
            </div>
          </div>

          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <small id="passwordHelpBlock" class="form-text text-muted">
                <a href="/SDP/signup_page.php">Need an account? Sign up here.</a>
              </small>
              <small id="passwordHelpBlock" class="form-text text-muted">
                <a href="#">Forgot your password?</a>
              </small>
            </div>
          </div>
        </form>

        <form name="form" method="post" id="tchlog" action="teacher/back/login.php" class="form-std form-horizontal container" style="display:none">
          <div class="form-group row justify-content-center">

          </div>

          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="text" name="uname" class="form-control" id="inputUsername2" placeholder="Login ID">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="password" name="psw" maxlength="12" class="form-control" id="inputPassword2" placeholder="Password">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <p style="font-size:1em;color:red;padding-top:10px;" id="errmsg2"></p>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <input type="submit" class="button btn-lg pl-5 pr-5" value="Login" onclick="tchlogin()"/>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <small id="passwordHelpBlock" class="form-text text-muted">
                <a href="#">Forgot your password?</a>
              </small>
            </div>
          </div>
        </form>
      </center>
    </div>
  </body>
    <?php include('template/footer.php');?>
    <script type="text/javascript" src="javascripts/main.js"></script>
</html>
