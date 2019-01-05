<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href="css/admin.css" rel="stylesheet" type="text/css"/>
<title>Homepage</title>
    
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
<script type="text/javascript">
$(document).ready(function(){
   $("#sort").change(function(){
        var s = $(this).val();       
        $.ajax({
            method: "POST",
            url: "ajax/sort_by.php",
            data: {sort: s},
            success: function(result){
            $("#result").html(result);
        }
      });
   });
});
</script>
    
</head>

<body>
<?php include "navi.php" ?>
<center>

    <button class="manage_register" onclick="showBox()">Manage Teacher</button>
    <button class="manage_register" onclick="showBox1()">Register Teacher</button>

    <div id="manage_box">Sort by: 
        <select id="sort" name="sort">
            <option value="">Please Select</option>
            <option value="id">ID</option>
            <option value="username">Username</option>
            <option value="email">Email</option>
        </select>
        
            <span id="result"></span>
    
    </div>
    
    
    <div id="register_box">
        <form method="post" action="register_teacher.php">
            <p style="font-size: 20px;">Register Teacher</p>
            <div id="separate">
            <label>First Name</label><br/>
            <input type="text" name="fname" placeholder="Enter First Name"/><br/>
            <label>Username</label><br/>
            <input type="text" name="username" placeholder="Enter Username"/><br/>
            <label>Password</label><br/>
            <input type="password" id="password" name="password" placeholder="Enter Password"/><br/>
            </div>
            <div id="separate">
            <label>Last Name</label><br/>
            <input type="text" name="lname" placeholder="Enter Last Name"/><br/>
            <label>Email</label><br/>
            <input type="text" name="email" placeholder="Enter Email"/><br/>   
            <label>Confirm Password</label><br/>
            <input type="password" name="password2" placeholder="Re-enter Password"/><br/>
            </div><br/>
            <span id="result"></span><br/><br/>
            <input type="submit" value="Register"/>
        </form>
    </div>
</center>
    
    
<script>
function showBox() {
    document.getElementById('manage_box').style.display = 'block';
    document.getElementById('register_box').style.display = 'none';
}
function showBox1() {
    document.getElementById('register_box').style.display = 'block';
    document.getElementById('manage_box').style.display = 'none';
}
</script>
<?php include "footer.php" ?>
</body>

</html>
