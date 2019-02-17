<?php

    include "conn.php";
    session_start();
    if(isset($_POST['password']) && isset($_POST['password2']))
    {
        if($_POST['password'] != $_POST['password2'])
        {
            echo "<script>alert('You did not enter the same password!')</script>";
            echo("<script>window.history.go(-1)</script>");
        }
        else
        {
            if(isset($_POST['username']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = "INSERT INTO admin (admin_username,admin_password) VALUES('$username','".md5($password)."')";
                mysqli_query($conn,$sql);

                if(mysqli_affected_rows($conn)<=0)
                {
					echo "<script>alert('Registration failed')</script>";
                    die("<script>window.history.go(-1)</script>");
                }
                else
                {
                    echo "<script>alert('You have registered as admin')</script>";
                    echo "<script>window.location.href='admin_login.php'</script>";
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