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

if(isset($_GET['post_id']) && isset($_GET['quiz_id']))
{
    $post_id = $_GET['post_id'];
    $quiz_id = $_GET['quiz_id'];
    
    $sql = "DELETE student_answer.* FROM student_answer INNER JOIN question ON student_answer.question_id = question.question_id WHERE student_answer.student_id = '$student_id' AND question.quiz_id = '$quiz_id'";
    mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)<=0)
    {
        echo "<script>alert('The quiz record is unable to delete')</script>";
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        echo "<script>window.location.href='../student_view_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."'</script>";
    }
}
?>