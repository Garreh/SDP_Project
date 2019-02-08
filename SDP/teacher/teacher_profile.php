<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>  
<?php
    include "css/header.php";
?>
<style type="text/css">
    .card-link-this:hover{
        text-decoration: underline;
    }
    .font-this{
        font-size: 25px;
    }
    .form-this{
        display: inline-block;
    }
</style>
    <script type="text/javascript">
      $(document).ready(	//to get current page document ready for a function
        function(){
            $('#password').keyup(function()	//get the changes done on the input with id of psw
            {
                var psw = $(this).val();
                
                $.post("../check_password.php", {password: psw}, function(data) //use for posting data without using any form and without changing the page
                {
                    if(data.status == true)
                    {
                        $('#result').html(data.msg).css('color','green');//message color=green
                        $('#submitPsw').attr("disabled",false);	//the button is enable again
                    }
                    else if(data.status == "moderate")
                    {
                        $('#result').html(data.msg).css('color','#EE7700');//message color=orange
                        $('#submitPsw').attr("disabled",false);	//the button is enable again
                    }
                    else
                    {
                        $('#result').html(data.msg).css('color','red');	//message color=red
                        $('#submitPsw').attr("disabled",true);	//the button is disable
                    }
                }, 'json');
            });
        });
    </script>
</head>
    
<body>
<?php
    $page = "userprofile";
    include "css/navbar.php";
    
    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        include "back/conn.php";
        $teacher = $_SESSION['teacher'];
        $query = "SELECT * FROM teacher WHERE teacher_username = '$teacher'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $teacher_id = $row['teacher_id'];
            $teacher_fname = $row['first_name'];
            $teacher_lname = $row['last_name'];
            $teacher_name = $row['first_name']." ".$row['last_name'];
            $teacher_email = $row['teacher_email'];
            $teacher_username = $row['teacher_username'];
            $teacher_dob = $row['dob'];
        }
    }
?>
<center>
<div class='container-fluid mt-3' style='padding-bottom: 10px;'>
    <div class='card w-75'>
        <div class='card-header'>
            <h1>User Profile</h1>
        </div>
        
        <div class='card-body card-light font-this'>
            
            <div class='row'>
                <div class='col-3 text-justify'>Name</div>
                <div class='col-7 text-justify text-muted'><?php echo $teacher_name ?></div>
                <div class='col-1'><a href='javascript:void(0)' class='card-link card-link-this' data-toggle='modal' data-target='#editName'>Edit</a></div>
            </div>
            <hr>
            <div class='row'>
                <div class='col-3 text-justify'>Username</div>
                <div class='col-7 text-justify text-muted'><?php echo $teacher_username ?></div>
                <div class='col-1'><a href='javascript:void(0)' class='card-link card-link-this' data-toggle='modal' data-target='#editUsername'>Edit</a></div>
            </div>
            <hr>
            <div class='row'>
                <div class='col-3 text-justify'>Email Address</div>
                <div class='col-7 text-justify text-muted'><?php echo $teacher_email ?></div>
                <div class='col-2'>Cannot Edit</div>
            </div>
            <hr>
            <div class='row'>
                <div class='col-3 text-justify'>Password</div>
                <div class='col-7 text-justify text-muted'>●●●●●●●●●●●●</div>
                <div class='col-1'><a href='javascript:void(0)' class='card-link card-link-this' data-toggle='modal' data-target='#editPassword'>Edit</a></div>
            </div>
            <hr>
            <?php 
                    $max = strtotime("-12 years",time());
                    $value = strtotime("-20 years",time());
                    $date = date("Y-m-d",$max);
                    $date2 = date("Y-m-d",$value);
            ?>
            <div class='row'>
                <div class='col-3 text-justify'>Date of Birth</div>
                <?php if(!is_null($teacher_dob)){ ?>
                <div class='col-7 text-justify text-muted'><?php echo $teacher_dob ?></div>
                <?php }else{ ?>
                <div class='col-7 text-justify text-muted'>Date of Birth is not set</div>
                <?php } ?>
                <div class='col-1'><a href='javascript:void(0)' class='card-link card-link-this' data-toggle='modal' data-target='#editDOB'>Edit</a></div>
            </div>
           
        </div>
    </div>
</div>
</center>
     
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
       
<!--    MODAL AREA STARTS HERE    -->
    
    
    <!-- EDIT NAME Modal -->
  <div class="modal fade" id="editName">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Change Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method='post' action='back/edit_profile.php'>
        <div class="modal-body">
            <table class='w-100'>
            <tr><td>
            <label>First Name</label>
            </td><td>
            <input type='text' class='form-control form-this' name='teacher_fname' required='required' value='<?php echo $teacher_fname ?>'/>
            </td></tr>
           
            <tr><td>
            <label>Last Name</label>
            </td><td>
            <input type='text' class='form-control form-this' name='teacher_lname' required='required' value='<?php echo $teacher_lname ?>'/> 
            </td></tr>    
            </table>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <input type='submit' class="btn btn-success" name='submitName' value='Change Now'/>
        </div>
        </form>
      </div>
    </div>
  </div>
    
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    
    <!-- EDIT USERNAME Modal -->
  <div class="modal fade" id="editUsername">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Change Username</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method='post' action='back/edit_profile.php'>
        <div class="modal-body">
            <table class='w-100'>
                
            <tr><td>
            <label>Username</label>
            </td><td>
            <input type='text' class='form-control form-this' name='teacher_username' required='required' value='<?php echo $teacher_username ?>'/>
            </td></tr>  
            
            </table>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <input type='submit' class='btn btn-success' name='submitUsername' value='Change Now'/>
        </div>
        </form>
        
      </div>
    </div>
  </div>
    
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
     
    <!-- EDIT PASSWORD Modal -->
  <div class="modal fade" id="editPassword">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Change Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method='post' action='back/edit_profile.php'>
        <div class="modal-body">
            <table class='w-100'>
               
            <tr><td>
            <label>Current Password</label>
            </td><td>
            <input type='password' class='form-control form-this' maxlength='12' name='old_password' placeholder="Enter Current Password..." required='required'/>
            </td></tr>  
                
            <tr><td>
            <label>New Password</label>
            </td><td>
            <input type='password' class='form-control form-this' maxlength='12' id='password' name='new_password' placeholder="Enter New Password..." required='required'/>
            </td></tr>
                
            <tr><td colspan='2' class='text-center'><span id='result'></span></td></tr>
                
            </table>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <input type='submit' class='btn btn-success' id='submitPsw' name='submitPassword' value='Change Now'/>
        </div>
        </form>
        
      </div>
    </div>
  </div>
    
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    
    <!-- EDIT DOB Modal -->
  <div class="modal fade" id="editDOB">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Change Date of Birth</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method='post' action='back/edit_profile.php'>
        <?php if(!is_null($teacher_dob)){ ?>
        <div class="modal-body">
            <table class='w-100'>
               
            <tr><td>
            <label>Current Date of Birth</label>
            </td><td>
            <input type='text' class='form-control form-this' name='old_dob' readonly required='required' value='<?php echo $teacher_dob ?>'/>
            </td></tr>  
                
            <tr><td>
            <label>New Date of Birth</label>
            </td><td>
            <input type='date' class='form-control form-this' max="<?php echo $date ?>" value="<?php echo $teacher_dob ?>"  name='new_dob' required='required'/>
            </td></tr>  
                
            </table>
        </div>
            
        <?php }else{ ?>
            
        <div class="modal-body">
            <table class='w-100'>
               
            <tr><td>
            <label>Current Date of Birth</label>
            </td><td>
            <input type='text' class='form-control form-this' name='old_dob' readonly required='required' value='Not Set Yet'/>
            </td></tr>  
                
            <tr><td>
            <label>New Date of Birth</label>
            </td><td>
            <input type='date' class='form-control form-this' max="<?php echo $date ?>" value="<?php echo $date2 ?>"  name='new_dob' required='required'/>
            </td></tr>  
                
            </table>
        </div>
            
        <?php } ?>
            
        <!-- Modal footer -->
        <div class="modal-footer">
          <input type='submit' class='btn btn-success' name='submitDob' value='Change Now'/>
        </div>
        </form>
        
      </div>
    </div>
  </div>
    
<!--    MODAL AREA ENDS HERE    -->
    
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        
<?php
    include "css/footer.php";  
?>
</body>
    
</html>