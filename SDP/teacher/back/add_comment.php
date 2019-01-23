<?php

if(isset($_POST['comment'])&&isset($_POST['post_id']))
{
    include "conn.php";
    $post_id = $_POST['post_id'];
    $comment = $_POST['comment'];
    date_default_timezone_set('Asia/Kuala_Lumpur'); 
    $date = date("Y-m-d H:i:s"); 

    $sql = "INSERT INTO comment (comment,comment_datetime,teacher_id,post_id) VALUES ('$comment','$date',1,'$post_id')";
    mysqli_query($conn,$sql);
    
    if(mysqli_affected_rows($conn)<=0)
    {
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        echo "<script>window.location.href='../teacher_view_group.php'</script>";
    }
}
?>