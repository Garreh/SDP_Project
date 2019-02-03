<?php
include ("conn.php");
if($_POST)
    (
    $opass = $_POST("opass"); //oldpassword
    $npass = $_POST("npass");  //newpassword
    $cpass = $_POST("cpass");   //confirmpassword

    $user = $_SESSION["student_username"]
    
    $oqr = mysql_query("select student_password from student where student_username = '($user)'") or die (mysql_error());
    
    $odata = mysqli_fetch_row($oqr); //fetch the old data password
    
    if($odata[0]==$opass) //if oldpassword match with the database
    {
        if($npass == $cpass) 
        {
            $q = mysql_query("Update student set student_password='($npass)' where student_username = '($user)'") or die(mysql_error());
            
            if($q)
            {
                echo "<script>alert(' Password Changed' )</script>";
            }
            
        }else 
        {    
        echo "<script>alert('New password and Confirm Password does not match')</script>";
        }
    }
    else
        {
            
            echo  "<script>alert('Old password not Match') </script>";
        }
?>
<html>
    <body>
    <form method="post">
        <table>
            <tr>
                <td> Old Password</td>
                <td><input type="text" name="opass"></td>
            </tr>
            
            <tr>
                <td> New Password</td>
                <td><input type="text" name="npass"></td>
            </tr>
            
            <tr>
                <td> Confirm Password</td>
                <td><input type="text" name="cpass"></td>
            </tr>
            <tr>
                <td></td>
        <td><input type="submit"></td>
            </tr>
        </table>
        
        
        </form>
    
    </body>

</html>