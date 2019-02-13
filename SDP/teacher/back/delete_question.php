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
if(isset($_GET['post_id']) && isset($_GET['question_id']))
{
    $post_id = $_GET['post_id'];
    $question_id = $_GET['question_id'];
    if(isset($_GET['quiz_id']))
    {
        $quiz_id = $_GET['quiz_id'];
        $sql1 = "DELETE FROM answer WHERE question_id = '$question_id'";
        mysqli_query($conn,$sql1);
        $sql2 = "DELETE FROM question WHERE question_id = '$question_id' AND quiz_id = '$quiz_id'";
        mysqli_query($conn,$sql2);
        
        echo "<script>window.location.href='../teacher_edit_question.php?post_id=".$post_id."&quiz_id=".$quiz_id."'</script>";
    }
    else
    {
        die("<script>window.history.go(-1)</script>");
    }
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>