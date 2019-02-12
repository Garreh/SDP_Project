<?php

include "conn.php";

session_start();
if(!isset($_SESSION['teacher']))
{
    echo "<script>alert('You did not login yet! Teacher')</script>";
    die("<script>window.location.href='../../login_page.php'</script>");
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

if(isset($_GET['comment_id']))
{
    $comment_id = $_GET['comment_id'];
    $sql = "DELETE FROM comment WHERE comment_id = '$comment_id' AND teacher_id = '$teacher_id'";
    mysqli_query($conn,$sql);
    die("<script>window.history.go(-1)</script>");
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>