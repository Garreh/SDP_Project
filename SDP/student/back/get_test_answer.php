<?php

$result = array();
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
        $result2 = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result2))
        {
            $student_id = $row['student_id'];
        }
    }

if(isset($_POST['answer']) && isset($_POST['question']))
{
    $answer_id = $_POST['answer'];
    $question_id = $_POST['question'];
    
    $sql1 = "SELECT * FROM answer WHERE question_id = '$question_id' AND answer_correct = '1'";
    $result1 = mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_array($result1))
    {
        $correct_answer = $row['answer_id'];
    }
    
    if($answer_id == $correct_answer)
    {
        $result['msg'] = 'Correct Answer';
        $result['status'] = true;
        
        $sql = "INSERT INTO student_answer(student_id,question_id,answer_id) VALUES ('$student_id','$question_id','$answer_id')";
        mysqli_query($conn,$sql);
    }
    else
    {
        $result['msg'] = 'Wrong Answer';
        $result['status'] = false;
        
        $sql = "INSERT INTO student_answer(student_id,question_id,answer_id) VALUES ('$student_id','$question_id','$answer_id')";
        mysqli_query($conn,$sql);
    }
    
    echo json_encode($result);
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>