<?php

    include "conn.php";
    session_start();
    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        
        $teacher = $_SESSION['teacher'];
        $query = "SELECT * FROM teacher WHERE teacher_username = '$teacher'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $teacher_id = $row['teacher_id'];
        }
    }
    
    if(isset($_POST['submitName']))
    {
        if(isset($_POST['teacher_fname']) && isset($_POST['teacher_lname']))
        {
            $teacher_fname = $_POST['teacher_fname'];
            $teacher_lname = $_POST['teacher_lname'];
            
            $sql = "UPDATE teacher SET first_name = '$teacher_fname', last_name = '$teacher_lname' WHERE teacher_id = '$teacher_id'";
            mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<=0)
            {
                echo "<script>alert('There is no changes made on the name!')</script>";
                die("<script>window.history.go(-1)</script>");
            }
            else
            {
                echo "<script>alert('Your name has changed!')</script>";
                echo "<script>window.location.href='../teacher_profile.php'</script>";
            }
        }
    }
    else if(isset($_POST['submitUsername']))
    {
        if(isset($_POST['teacher_username']))
        {
            $teacher_username = $_POST['teacher_username'];
            
            $sql = "UPDATE teacher SET teacher_username = '$teacher_username' WHERE teacher_id = '$teacher_id'";
            mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<=0)
            {
                echo "<script>alert('The username might been taken!')</script>";
                die("<script>window.history.go(-1)</script>");
            }
            else
            {
                $_SESSION['teacher'] = $teacher_username; //set an admin session for username
				$_SESSION['start'] = time();	//set the start time to the login moment
				$_SESSION['expire'] = $_SESSION['start'] + (300 * 60); //set the time limit for login
                
                echo "<script>alert('Your username has changed!')</script>";
                echo "<script>window.location.href='../teacher_profile.php'</script>";
            }
        }
    }
    else if(isset($_POST['submitPassword']))
    {
        if(isset($_POST['old_password']) && isset($_POST['new_password']))
        {
            $old_password = md5($_POST['old_password']);
            $new_password = md5($_POST['new_password']);
            
            $sql_currentPSW = "SELECT * FROM teacher WHERE teacher_id = '$teacher_id'";
            $result_currentPSW = mysqli_query($conn,$sql_currentPSW);
            while($row = mysqli_fetch_array($result_currentPSW))
            {
                $current_password = $row['teacher_password'];
            }
            
            if($old_password != $current_password)
            {
                echo "<script>alert('Password changes failed! Wrong Password')</script>";
                die("<script>window.history.go(-1)</script>");
            }
            else if($old_password == $current_password)
            {
                $sql = "UPDATE teacher SET teacher_password = '$new_password' WHERE teacher_id = '$teacher_id'";
                mysqli_query($conn,$sql);
                if(mysqli_affected_rows($conn)<=0)
                {
                    echo "<script>alert('There is no changes made on the password!')</script>";
                    die("<script>window.history.go(-1)</script>");
                }
                else
                {
                    echo "<script>alert('Your password has changed!')</script>";
                    echo "<script>window.location.href='../teacher_profile.php'</script>";
                }
            }
        }
    }
    else if(isset($_POST['submitDob']))
    {
        if(isset($_POST['new_dob']))
        {
            $new_dob = $_POST['new_dob'];
            
            $sql = "UPDATE teacher SET dob = '$new_dob' WHERE teacher_id = '$teacher_id'";
            mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)<=0)
            {
                echo "<script>alert('There is no changes made on the Date of Birth!')</script>";
                die("<script>window.history.go(-1)</script>");
            }
            else
            {
                echo "<script>alert('Your Date of Birth has changed!')</script>";
                echo "<script>window.location.href='../teacher_profile.php'</script>";
            }
            
        }
    }
    else
    {
        echo "<script>alert('There is nothing to edit!')</script>";
        echo "<script>window.location.href='../teacher_profile.php'</script>";
    }
?>