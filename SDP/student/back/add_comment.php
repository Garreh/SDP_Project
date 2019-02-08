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
if(isset($_POST['comment'])&&isset($_POST['post_id'])&&isset($_POST['group_id']))
{
    include "conn.php";
    $post_id = $_POST['post_id'];
    $comment = $_POST['comment'];
    date_default_timezone_set('Asia/Kuala_Lumpur'); 
    $date = date("Y-m-d H:i:s"); 
    $group_id = $_POST['group_id'];
    
    $sql = "INSERT INTO comment (comment,comment_datetime,student_id,post_id) VALUES ('$comment','$date','$student_id','$post_id')";
    mysqli_query($conn,$sql);
    
    if(mysqli_affected_rows($conn)<=0)
    {
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        
        echo "<script>window.location.href='../student_view_group.php?group=$group_id'</script>";
    }
}
?>