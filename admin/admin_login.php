<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href="css/admin.css" rel="stylesheet" type="text/css"/>
<link href="css/nav.css" rel="stylesheet" type="text/css"/>
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
<div class="nav">
        <div class="nav-button">
            <div class="nav-home">
            <a href="admin_home.php">History&#x02ADA;</a>
            </div>
            <a href="admin_manage_post.php">Post</a>
            <a href="admin_manage_teacher.php">Teacher</a>           
        </div>
    <?php if(isset($_SESSION['admin'])){ ?>
    <button class="register_button" onclick="location.href='logout.php'">Logout</button>
    <?php } else { ?>
    <button class="register_button" onclick="location.href='admin_register.php'">Register</button>
    <button class="login_button" onclick="location.href='admin_login.php'">Login</button>  
    <?php } ?>
</div>
    <?php
    if(isset($_SESSION['admin']))
    {
        session_destroy();
    }
    ?>
    <center>
        
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
    </div>
        
    </center>
    
    <?php include "footer.php" ?>


</body>

</html>
