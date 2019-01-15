<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include('../../template/header.php');?>
<link href="css/admin.css" rel="stylesheet" type="text/css"/>

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
</head>

<body>
	<?php include('../../template/adminnav.php');?>


    <div class="body">


			<center>
				  <h1 class="title pt-5 mt-5">Admin Register</h1>
			</center>
				<form name="form" method="post" action="register.php" id="" class="form-horizontal container ">

          <br>
          <br>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">

              <input type="text" class="form-control" name="username" id="" placeholder="Username">
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="col-sm-4 ">

              <input type="password" class="form-control" name="password" id="" placeholder="Password">
            </div>
          </div>

					<div class="form-group row justify-content-center">
            <div class="col-sm-4 ">
              <input type="password" class="form-control" name="password2" id="" placeholder="Confirm Password">
            </div>
          </div>
					<br>
          <div class="form-group row justify-content-center">
            <div class="col-sm-7 text-center">
              <input type="submit" id="Register" value="Register"/>
            </div>
          </div>
        </form>




    </div>
  <?php include('../../template/adminfooter.php');?>


</body>

</html>
