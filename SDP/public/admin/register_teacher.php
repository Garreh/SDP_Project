<?php

    session_start();
    if(!isset($_SESSION['admin']))//admin must always login first
    {
        echo "<script>alert('You have not login yet, admin')</script>";
        die("<script>window.location.href='admin_login.php'</script>");
    }

    include "conn.php";
    
    if(isset($_POST['password']) && isset($_POST['password2']))
    {
        if($_POST['password'] != $_POST['password2'])
        {
            echo "<script>alert('You did not enter the same password!')</script>";
            echo("<script>window.history.go(-1)</script>");
        }
        else
        {
            if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['email']))
            {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $sql = "INSERT INTO teacher (teacher_username,teacher_email,teacher_password,first_name,last_name) ".
                "VALUES('$username','$email','".md5($password)."','$fname','$lname')";
                mysqli_query($conn,$sql);

                if(mysqli_affected_rows($conn))
                {
                    echo "<script>alert('You have registered a teacher')</script>";
                    echo "<script>window.history.go(-1)</script>";
                }
                else
                {
                    echo "<script>alert('Registration failed')</script>";
                    die("<script>window.history.go(-1)</script>");
                }
            }
            else
            {
                echo "<script>alert('Please enter registration details first')</script>";
                die("<script>window.history.go(-1)</script>");
            }
        }
        
    }
?>