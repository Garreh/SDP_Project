<?php

    if(isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['psw']) && isset($_POST['dob']))
    {
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $psw = $_POST['psw'];
        $dob = $_POST['dob'];
        
        include "conn.php";
        
        $sql = "INSERT INTO student(student_username,student_email,student_password,first_name,last_name,dob) ".
            "VALUES('$username','$email','".md5($psw)."','$f_name','$l_name','$dob')";
        mysqli_query($conn,$sql);
        if(mysqli_affected_rows($conn)<=0)
        {
            echo "<script>alert('Registration failed')</script>";
            die("<script>window.history.go(-1)</script>");
        }
        else
        {
            echo "<script>window.location.href='login_page.php'</script>";
        }
    }

?>