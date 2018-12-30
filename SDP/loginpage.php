
<html lang="en" dir="ltr">
  <head>
    <?php include('template/header.php');?>
    <meta charset="utf-8">
    <title>History</title>
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
          <a href="/SDP/signuppage.php" class="btn btn-danger btn-rounded">SIGN UP</a>
      </div>
    </nav>

    <div class="" style=" background-color:#F2E4B9; padding-top:5%;">
      <center>
        <h1 class="title pt-5">Login As</h1>
        <div class="">
          <button type="button" name="button" class="btn" id="" onclick="" style="width:150px;font-size:20px">Student</button>
          <button type="button" name="button" class="btn" id=""onclick="" style="width:150px;font-size:20px">Teacher</button>
        </div>

        <form name="form" method="post" id="" class="form-std form-horizontal container pt-5" >
          <div class="form-group row justify-content-center">

          </div>
          <br>
          <br>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputID" placeholder="Login ID">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
          </div>
          <br>
          <br>
          <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <button type="button" class="button btn-lg pl-5 pr-5" onclick="">Login</button>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <small id="passwordHelpBlock" class="form-text text-muted">
                <a href="/SDP/signuppage.php">Need an account? Sign up here.</a>
              </small>
              <small id="passwordHelpBlock" class="form-text text-muted">
                <a href="">Forgot your password?</a>
              </small>
            </div>
          </div>
        </form>
        <form name="form" method="post" id="" class="form-std form-horizontal container pt-5" >
          <div class="form-group row justify-content-center">

          </div>
          <br>
          <br>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputID" placeholder="Login ID">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
          </div>
          <br>
          <br>
          <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <button type="button" class="button btn-lg pl-5 pr-5" onclick="">Login</button>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <small id="passwordHelpBlock" class="form-text text-muted">
                <a href="/SDP/signuppage.php">Need an account? Sign up here.</a>
              </small>
              <small id="passwordHelpBlock" class="form-text text-muted">
                <a href="">Forgot your password?</a>
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
