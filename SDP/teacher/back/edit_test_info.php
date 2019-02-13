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

if(isset($_POST['test_id']) && isset($_POST['post_id']) && isset($_POST['test_title']) && isset($_POST['test_description']))
{
    $test_id = $_POST['test_id'];
    $post_id = $_POST['post_id'];
    $test_title = $_POST['test_title'];
    $test_description = $_POST['test_description'];
    
    $sql = "UPDATE test SET test_title = '$test_title', test_description = '$test_description' WHERE test_id = '$test_id' AND post_id = '$post_id'";
    mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)<=0)
    {
        echo "<script>alert('Nothing changed!')</script>";
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        echo "<script>window.location.href='../teacher_edit_test.php?post_id=".$post_id."&test_id=".$test_id."'</script>";
    }
}

?>