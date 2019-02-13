<?php

include "conn.php";

session_start();
if(!isset($_SESSION['student']))
{
    echo "<script>alert('You did not login yet! Student')</script>";
    die("<script>window.location.href='../../login_page.php'</script>");
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

if(isset($_GET['comment_id']))
{
    $comment_id = $_GET['comment_id'];
    $sql = "DELETE FROM comment WHERE comment_id = '$comment_id' AND student_id = '$student_id'";
    mysqli_query($conn,$sql);
    die("<script>window.history.go(-1)</script>");
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>