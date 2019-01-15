
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
          <a href="/SDP/index.php" class="btn btn-danger btn-rounded">GET OUT</a>
      </div>
    </nav>

    <div class="" style="height:800px;background-color:#F2E4B9; padding-top:5%;">
      <center>
        <h1 class="title pt-5">Admin Login</h1>
        <br>

        <form name="form" method="post" class="form-std form-horizontal container" >
          <div class="form-group row justify-content-center">

          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputUsername3" placeholder="Login ID">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <p style="font-size:1em;color:red;padding-top:10px;" id="errmsg"></p>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <button type="button" class="button btn-lg pl-5 pr-5"  onclick="adminlogin()">Login</button>
            </div>
            <div class="col-sm-7 text-center">
              <p style="font-size:1em;color:red;padding-top:10px;" id="errmsg"></p>
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

        <!-- <form name="form" method="post" id="stdlog" class="form-std form-horizontal container" >
          <div class="form-group row justify-content-center">

          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputUsername3" placeholder="Login ID">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <p style="font-size:1em;color:red;padding-top:10px;" id="errmsg"></p>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <button type="button" class="button btn-lg pl-5 pr-5"  onclick="adminlogin()">Login</button>
            </div>
            <div class="col-sm-7 text-center">
              <p style="font-size:1em;color:red;padding-top:10px;" id="errmsg"></p>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4">
              <small id="passwordHelpBlock" class="form-text text-muted">
                <a href="">Forgot your password?</a>
              </small>
            </div>
          </div>
        </form> -->
      </center>
    </div>
  </body>
  <!-- Footer -->
  <footer class="page-footer font-small unique-color-light pt-4" style="background-color:#3A3837;">

      <!-- Footer Elements -->
      <div class="container">
        <?php if(isset($_SESSION['id'])){ ?>
          <a href="#!" class="btn btn-danger btn-rounded" onclick="">LOGOUT</a>
        <?php }else{ ?>
          <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
              <h5 class="mb-1" style="color:#FFFFFF;">Get out of here if you're not suppose to be here!</h5>
            </li>
            <li class="list-inline-item">
                <a href="/SDP/index.php" class="btn btn-danger btn-rounded">GET OUT</a>
            </li>
          </ul>
        <?php } ?>
      </div>
      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3" style="color:#FFFFFF;">© 2019 Copyright:
        <a href=""> IMRAN's Group.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script type="text/javascript" src="javascripts/main.js"></script>
</html>
