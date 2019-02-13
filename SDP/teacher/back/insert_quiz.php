<?php

session_start();
if(!isset($_SESSION['teacher']))
{
    echo "<script>alert('You did not login yet! Teacher')</script>";
    die("<script>window.location.href='../../login_page.php'</script>");
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

if(isset($_POST['post_id']) && isset($_POST['quiz_title']) && isset($_POST['quiz_description']))
{
    $post_id = $_POST['post_id'];
    $quiz_title = $_POST['quiz_title'];
    $quiz_description = $_POST['quiz_description'];
    
    $sql = "INSERT INTO quiz(quiz_title,quiz_description,post_id) VALUES('$quiz_title','$quiz_description','$post_id')";
    mysqli_query($conn,$sql);
    
    if(mysqli_affected_rows($conn)<= 0)
    {
        echo "<script>alert('Quiz created fail!')</script>";
        die("<script>window.history.go(-1);</script>");
    }
    else
    {
        $id_sql = "SELECT * FROM quiz WHERE quiz_title ='$quiz_title' AND quiz_description = '$quiz_description' AND post_id = '$post_id'";
        $id_result = mysqli_query($conn,$id_sql);
        while($row = mysqli_fetch_array($id_result))
        {
            $quiz_id = $row['quiz_id'];
        }
        
        echo "<script>alert('Quiz Created Successfully!')</script>";
        echo "<script>window.location.href='../teacher_create_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."'</script>";
    }
}
else
{
    die("<script>window.history.go(-1);</script>");
}
?>