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
if(isset($_GET['group_id']) && isset($_GET['post_id']) && isset($_GET['quiz_id']))
{
    $group_id = $_GET['group_id'];
    $post_id = $_GET['post_id'];
    $quiz_id = $_GET['quiz_id'];
    
    $sql = "SELECT * FROM question INNER JOIN quiz ON question.quiz_id  = quiz.quiz_id INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND question.quiz_id = '$quiz_id' AND quiz.post_id = '$post_id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<=0)
    {
        $sql1 = "DELETE quiz.* FROM quiz INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND quiz.post_id = '$post_id' AND quiz.quiz_id = '$quiz_id'";
        mysqli_query($conn,$sql1);
        
        echo "<script>alert('Quiz is Deleted!')</script>";
        echo "<script>window.location.href='../group_post_detail.php?group_id=".$group_id."&post_id=".$post_id."'</script>";
    }
    else
    {
        $sql1 = "DELETE quiz.* FROM quiz INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND quiz.post_id = '$post_id' AND quiz.quiz_id = '$quiz_id'";
        mysqli_query($conn,$sql1);

        $sql2 = "DELETE question.* FROM question INNER JOIN quiz ON question.quiz_id = quiz.quiz_id INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND quiz.post_id = '$post_id' AND question.quiz_id = '$quiz_id'";
        mysqli_query($conn,$sql2);
        
        $sql3 = "DELETE answer.* FROM answer INNER JOIN question ON answer.question_id = question.question_id INNER JOIN quiz ON question.quiz_id = quiz.quiz_id INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND quiz.post_id = '$post_id' AND question.quiz_id = '$quiz_id'";
        mysqli_query($conn,$sql3);
        
        echo "<script>alert('Quiz Deleted!')</script>";
        echo "<script>window.location.href='../group_post_detail.php?group_id=".$group_id."&post_id=".$post_id."'</script>";
    }
    
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>