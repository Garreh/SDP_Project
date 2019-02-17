<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href="css/admin.css" rel="stylesheet" type="text/css"/>
<link href="css/nav.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(	//to get current page document ready for a function
function(){
	$('#password').keyup(function()	//get the changes done on the input with id of psw
	{
		var psw = $(this).val();
		//alert(pswfrominput);
		//connect to php
		$.post("ajax/check_password.php", {password: psw}, function(data) //use for posting data without using any form and without changing the page
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
<title>Admin Register</title>
    <?php
        session_start();
        if(!isset($_SESSION['admin']))
        {
            echo "<script>alert('Please Login first')</script>";
            die("<script>window.location.href='admin_login.php'</script>");
        }
    ?>
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
    <div class="body">
    <center>
        
    <div class="login_box">   
        <h1>Admin Register</h1>
        <form method="post" action="register.php">
            <label style="padding-right: 175px;">Username</label><br/>
            <input type="text" id="username" name="username" placeholder="Enter Username"/><br/><br/>
            <label style="padding-right: 175px;">Password</label><br/>
            <input type="password" id="password" name="password" placeholder="Enter Password"/><br/>
            <span id="result"></span><br/>
            <label style="padding-right: 80px;">Confirm Password</label><br/>
            <input type="password" id="password2" name="password2" placeholder="Enter Password Again"/><br/>
            <input type="submit" id="Register" value="Register"/>
        </form>

    </div>
        
    </center>
    </div>
    <?php include "footer.php" ?>


</body>

</html>
