<?php

    include "conn.php";
    session_start();
    if(!isset($_SESSION['student']))
    {
        echo "<script>alert('You did not login yet! Student')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        
        $student = $_SESSION['student'];
        $query = "SELECT * FROM student WHERE student_username = '$student'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $student_id = $row['student_id'];
        }
    }
    
    if(isset($_POST['submitName']))
    {
        if(isset($_POST['student_fname']) && isset($_POST['student_lname']))
        {
            $student_fname = $_POST['student_fname'];
            $student_lname = $_POST['student_lname'];
            
            $sql = "UPDATE student SET first_name = '$student_fname', last_name = '$student_lname' WHERE student_id = '$student_id'";
            mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<=0)
            {
                echo "<script>alert('There is no changes made on the name!')</script>";
                die("<script>window.history.go(-1)</script>");
            }
            else
            {
                echo "<script>alert('Your name has changed!')</script>";
                echo "<script>window.location.href='../student_profile.php'</script>";
            }
        }
    }
    else if(isset($_POST['submitUsername']))
    {
        if(isset($_POST['student_username']))
        {
            $student_username = $_POST['student_username'];
            
            $sql = "UPDATE student SET student_username = '$student_username' WHERE student_id = '$student_id'";
            mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<=0)
            {
                echo "<script>alert('The username might been taken!')</script>";
                die("<script>window.history.go(-1)</script>");
            }
            else
            {
                $_SESSION['student'] = $student_username; //set an admin session for username
				$_SESSION['start'] = time();	//set the start time to the login moment
				$_SESSION['expire'] = $_SESSION['start'] + (300 * 60); //set the time limit for login
                
                echo "<script>alert('Your username has changed!')</script>";
                echo "<script>window.location.href='../student_profile.php'</script>";
            }
        }
    }
    else if(isset($_POST['submitPassword']))
    {
        if(isset($_POST['old_password']) && isset($_POST['new_password']))
        {
            $old_password = md5($_POST['old_password']);
            $new_password = md5($_POST['new_password']);
            
            $sql_currentPSW = "SELECT * FROM student WHERE student_id = '$student_id'";
            $result_currentPSW = mysqli_query($conn,$sql_currentPSW);
            while($row = mysqli_fetch_array($result_currentPSW))
            {
                $current_password = $row['student_password'];
            }
            
            if($old_password != $current_password)
            {
                echo "<script>alert('Password changes failed! Wrong Password')</script>";
                die("<script>window.history.go(-1)</script>");
            }
            else if($old_password == $current_password)
            {
                $sql = "UPDATE student SET student_password = '$new_password' WHERE student_id = '$student_id'";
                mysqli_query($conn,$sql);
                if(mysqli_affected_rows($conn)<=0)
                {
                    echo "<script>alert('There is no changes made on the password!')</script>";
                    die("<script>window.history.go(-1)</script>");
                }
                else
                {
                    echo "<script>alert('Your password has changed!')</script>";
                    echo "<script>window.location.href='../student_profile.php'</script>";
                }
            }
        }
    }
    else if(isset($_POST['submitDob']))
    {
        if(isset($_POST['new_dob']))
        {
            $new_dob = $_POST['new_dob'];
            
            $sql = "UPDATE student SET dob = '$new_dob' WHERE student_id = '$student_id'";
            mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<=0)
            {
                echo "<script>alert('There is no changes made on the Date of Birth!')</script>";
                die("<script>window.history.go(-1)</script>");
            }
            else
            {
                echo "<script>alert('Your Date of Birth has changed!')</script>";
                echo "<script>window.location.href='../student_profile.php'</script>";
            }
            
        }
    }
    else
    {
        echo "<script>alert('There is nothing to edit!')</script>";
        echo "<script>window.location.href='../student_profile.php'</script>";
    }
?>