<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href="css/admin.css" rel="stylesheet" type="text/css"/>
<?php include('../../template/header.php');?>
<script type="text/javascript">
function showPsw() {
var check = document.getElementById("password");
if (check.type === "password") {
    check.type = "text";
  } else {
    check.type = "password";
  }
}
</script>
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3 " style="background-color:#3A3837;font-family:Roboto;">
    <a class="navbar-brand" href="#">History</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family:Roboto;">
      <ul class="navbar-nav mr-auto">
      </ul>
    </div>

  </nav>
  <center>
    <h1 class="mt-5  " style="margin-top:100px;">Admin Login</h1>
  </center>


      <form name="form" method="post" action="login.php" id="" class="form-horizontal container pt-5">
        <div class="form-group row justify-content-center">

          <div class="">
            <input type="text" class="form-control" name="username"  placeholder="Enter your login id here">
          </div>
        </div>
        <div class="form-group row justify-content-center">

          <div class="">
            <input type="password" class="form-control"  name="password" placeholder="Enter your password here">
            <br>

          </div>
        </div>
        <div class="form-group row justify-content-center">
          <div class="">
            <small id="passwordHelpBlock" class="form-text text-mutedw">
              <!-- <input type="checkbox" id="show" onclick="showPsw()" name="show"/> -->
            <a href="/public/forgetpwd.php">Forgot your password?</a>
            </small>
          </div>

        </div>
        <br>
        <div class="form-group row justify-content-center">
          <div class="col-sm-7 text-center">
                    <input type="submit" value="Login"/>
          </div>
        </div>

      </form>
<!--
    <div class="login_box">
        <h1>Admin Login</h1>
        <form method="post" action="login.php">
        <table>
            <tr>
                <td><input type="text" name="username" placeholder="Login Username"/></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Login Password"/></td>
            </tr>
            <tr>
            <td style="padding-left: 21%"><input type="checkbox" id="show" onclick="showPsw()" name="show"/>Show Password</td>
            </tr>
        </table>
            <br/>
            <input type="submit" value="Login"/>
        </form>
    </div> -->



    <!-- Footer -->
    <footer class="page-footer font-small unique-color-light pt-4" style="  overflow: hidden;
      float: left;
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      width: 100%;
      padding: 20px;
      background-color: #444444;
      color: white;
      text-align: center;background-color:#3A3837;">


        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="color:#FFFFFF;">© 2019 Copyright:
          <a href="https://imrangroup.000webhostapp.com/"> IMRAN's Group.com</a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->



</body>

</html>
