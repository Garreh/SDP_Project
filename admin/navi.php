<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/admin.css" rel="stylesheet" type="text/css"/>
<link href="css/nav.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    
<?php 
session_start();

if(!isset($_SESSION['admin']))
{
    echo "<script>alert('Please login first, admin')</script>";
    die("<script>window.location.href='admin_login.php'</script>");
} 
    
?>
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
</body>

</html>
