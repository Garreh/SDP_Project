<?php
session_start();
if(!isset($_SESSION['teacher']))
{
    echo "<script>alert('You did not login yet! Teacher')</script>";
    die("<script>../../login_page.php</script>");
}
else
{
    include "conn.php";
    $teacher = $_SESSION['teacher'];
    $query = "SELECT * FROM teacher WHERE teacher_username = '$teacher'";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result))
    {
        $teacher_id = $row['teacher_id'];
    }
}
if(isset($_POST['comment'])&&isset($_POST['post_id'])&&isset($_POST['group_salt']))
{
    include "conn.php";
    $post_id = $_POST['post_id'];
    $comment = $_POST['comment'];
    date_default_timezone_set('Asia/Kuala_Lumpur'); 
    $date = date("Y-m-d H:i:s"); 
    $group_salt = $_POST['group_salt'];
    
    $sql = "INSERT INTO comment (comment,comment_datetime,teacher_id,post_id) VALUES ('$comment','$date','$teacher_id','$post_id')";
    mysqli_query($conn,$sql);
    
    if(mysqli_affected_rows($conn)<=0)
    {
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        
        echo "<script>window.location.href='../teacher_view_group.php?group=$group_salt'</script>";
    }
}
?>