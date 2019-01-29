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
   
    if(isset($_POST['post_title']) && isset($_POST['post_description']) && isset($_POST['group_id']) && isset($_POST['group_salt']))
    {
        
        
        $post_title = $_POST['post_title'];
        $post_description = $_POST['post_description'];
        $post_type = "PRIVATE";
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $post_date = date("Y-m-d");
        $group_id = $_POST['group_id'];
        $group_salt = $_POST['group_salt'];
        
        $sql = "INSERT INTO post (post_title,post_description,post_type,post_date,teacher_id,group_id) VALUES ('$post_title','$post_description','$post_type','$post_date','$teacher_id','$group_id')";
        mysqli_query($conn,$sql);
        if(mysqli_affected_rows($conn)<=0)
        {
            echo "<script>window.history.go(-1)</script>";
        }
        else
        {
            echo "<script>window.location.href='../teacher_view_group.php?group=$group_salt'</script>";
        }
    }

?>