<?php
session_start();
if(!isset($_SESSION['student']))
{
    echo "<script>alert('You did not login yet! Student')</script>";
    die("<script>../../login_page.php</script>");
}
else
{
    include "conn.php";
    $student = $_SESSION['student'];
    $query = "SELECT * FROM student WHERE student_username = '$student'";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result))
    {
        $student_id = $row['student_id'];
    }
}

    if(isset($_POST['group_id']) && isset($_POST['delete']))
    {
        $group_id = $_POST['group_id'];
        $crudential = $_POST['delete'];
        
        $sql_group = "SELECT * FROM private_group WHERE group_id = '$group_id'";
        $group_result = mysqli_query($conn,$sql_group);
        
        while($row = mysqli_fetch_array($group_result))
        {
            $group_name = $row['group_title'];
        }
        
        if($crudential != $group_name)
        {
            echo "<script>alert('Try Again')</script>";
            echo "<script>window.history.go(-1)</script>";
            
        }
        else if($crudential == $group_name)
        {
            $sql = "DELETE FROM student_group WHERE group_id = '$group_id' AND student_id = '$student_id'";
            $result = mysqli_query($conn,$sql);
            echo "<script>alert('You have quitted from the group')</script>";
            echo "<script>window.location.href='../student_view_group.php'</script>";
        }
    }
?>