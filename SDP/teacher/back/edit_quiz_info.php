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

if(isset($_POST['quiz_id']) && isset($_POST['post_id']) && isset($_POST['quiz_title']) && isset($_POST['quiz_description']))
{
    $quiz_id = $_POST['quiz_id'];
    $post_id = $_POST['post_id'];
    $quiz_title = $_POST['quiz_title'];
    $quiz_description = $_POST['quiz_description'];
    
    $sql = "UPDATE quiz SET quiz_title = '$quiz_title', quiz_description = '$quiz_description' WHERE quiz_id = '$quiz_id' AND post_id = '$post_id'";
    mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)<=0)
    {
        echo "<script>alert('Nothing changed!')</script>";
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        echo "<script>window.location.href='../teacher_edit_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."'</script>";
    }
}

?>