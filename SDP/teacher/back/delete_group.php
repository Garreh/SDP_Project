<?php
    
    include "conn.php";

    session_start();
    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>../../login_page.php</script>");
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
            $sql = "DELETE FROM private_group WHERE group_id = '$group_id'";
            $result = mysqli_query($conn,$sql);
            echo "<script>alert('Group Deleted')</script>";
            echo "<script>window.location.href='../teacher_view_group.php'</script>";
        }
    }
?>