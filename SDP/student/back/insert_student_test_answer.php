<?php

include "conn.php";
session_start();
if(!isset($_SESSION['student']))
{
    echo "<script>alert('You did not login yet! Student')</script>";
    die("<script>window.location.href='../login_page.php'</script>");
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

if(isset($_POST['post_id']) && isset($_POST['test_id']) && isset($_POST['question_id']) && isset($_POST['answer']))
{
    $post_id = $_POST['post_id'];
    $test_id = $_POST['test_id'];
    $question_id = $_POST['question_id'];
    $answer_id = $_POST['answer'];
    
    $total = count($question_id);
    
    for($i = 1; $i<=$total; $i++)
    {
        $sql = "INSERT INTO student_answer(student_id, question_id, answer_id) VALUES ('$student_id','$question_id[$i]','$answer_id[$i]')";
        mysqli_query($conn,$sql);
    }
    if(mysqli_affected_rows($conn)<=0)
    {
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        echo "<script>window.location.href='../student_view_test.php?post_id=".$post_id."&test_id=".$test_id."'</script>";
    }
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>