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
if(isset($_POST['post_id']) && isset($_POST['question_id']) && isset($_POST['question']))
{
    $post_id = $_POST['post_id'];
    $question_id = $_POST['question_id'];
    $question = $_POST['question'];
    if(isset($_POST['quiz_id']))
    {
        $quiz_id = $_POST['quiz_id'];
        
        if(isset($_POST['correct_id']) && isset($_POST['correct']) && isset($_POST['wrong_id']) && isset($_POST['wrong']))
        {
            $correct_id = $_POST['correct_id'];
            $correct = $_POST['correct'];
            $wrong_id = $_POST['wrong_id'];
            $wrong = $_POST['wrong'];
            
            $sql1 = "UPDATE question SET question_topic = '$question' WHERE question_id = '$question_id'";
            mysqli_query($conn,$sql1);
            $sql2 = "UPDATE answer SET answer_description = '$correct' WHERE answer_id = '$correct_id' AND answer_correct = 1";
            mysqli_query($conn,$sql2);
            for($i = 1;$i<=3; $i++)
            {
                $sql3 = "UPDATE answer SET answer_description = '$wrong[$i]' WHERE answer_id = '$wrong_id[$i]' AND answer_correct = 0";
                mysqli_query($conn,$sql3);
            }
            
            
            if(isset($_POST['group_id']))
            {
                $group_id = $_POST['group_id'];
                echo "<script>window.location.href='../teacher_edit_question.php?group_id=".$group_id."post_id=".$post_id."&quiz_id=".$quiz_id."'</script>";
            }
            else
            {
                echo "<script>window.location.href='../teacher_edit_question.php?post_id=".$post_id."&quiz_id=".$quiz_id."'</script>";
            }
        }
    }
    else if(isset($_POST['test_id']))
    {
        $test_id = $_POST['test_id'];
        
        if(isset($_POST['correct_id']) && isset($_POST['correct']) && isset($_POST['wrong_id']) && isset($_POST['wrong']))
        {
            $correct_id = $_POST['correct_id'];
            $correct = $_POST['correct'];
            $wrong_id = $_POST['wrong_id'];
            $wrong = $_POST['wrong'];
            
            $sql1 = "UPDATE question SET question_topic = '$question' WHERE question_id = '$question_id'";
            mysqli_query($conn,$sql1);
            $sql2 = "UPDATE answer SET answer_description = '$correct' WHERE answer_id = '$correct_id' AND answer_correct = 1";
            mysqli_query($conn,$sql2);
            for($i = 1;$i<=3; $i++)
            {
                $sql3 = "UPDATE answer SET answer_description = '$wrong[$i]' WHERE answer_id = '$wrong_id[$i]' AND answer_correct = 0";
                mysqli_query($conn,$sql3);
            }
            
            if(isset($_POST['group_id']))
            {
                $group_id = $_POST['group_id'];
                echo "<script>window.location.href='../teacher_edit_question.php?group_id=".$group_id."post_id=".$post_id."&test_id=".$test_id."'</script>";
            }
            else
            {
                echo "<script>window.location.href='../teacher_edit_question.php?post_id=".$post_id."&test_id=".$test_id."'</script>";
            }
            
        }
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