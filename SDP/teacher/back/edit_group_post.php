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

    if(isset($_POST['group_id']) && isset($_POST['post_id']) && isset($_POST['post_title']) && isset($_POST['post_description']))
    {     
        $group_id = $_POST['group_id'];
        $post_id = $_POST['post_id'];
        $post_title = $_POST['post_title'];
        $post_description = $_POST['post_description'];
        
        $sql = "UPDATE post SET post_title = '$post_title', post_description = '$post_description' WHERE post_id = '$post_id' AND group_id = '$group_id'";
        mysqli_query($conn,$sql);
        if(mysqli_affected_rows($conn)<=0)
        {
            echo "<script>alert('Post editing failed')</script>";
            die("<script>window.history.go(-1)</script>");
        }
        else
        {
            echo "<script>window.location.href='../teacher_view_group.php?group=".$group_id."'</script>";
        }
    }
    else
    {
        die("<script>window.history.go(-1)</script>");
    }
?>