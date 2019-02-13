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

if(isset($_POST['post_id']) && isset($_POST['test_title']) && isset($_POST['test_description']))
{
    $post_id = $_POST['post_id'];
    $test_title = $_POST['test_title'];
    $test_description = $_POST['test_description'];
    
    $sql = "INSERT INTO test(test_title,test_description,post_id) VALUES('$test_title','$test_description','$post_id')";
    mysqli_query($conn,$sql);
    
    if(mysqli_affected_rows($conn)<= 0)
    {
        echo "<script>alert('Test created fail!')</script>";
        die("<script>window.history.go(-1);</script>");
    }
    else
    {
        $id_sql = "SELECT * FROM test WHERE test_title ='$test_title' AND test_description = '$test_description' AND post_id = '$post_id'";
        $id_result = mysqli_query($conn,$id_sql);
        while($row = mysqli_fetch_array($id_result))
        {
            $test_id = $row['test_id'];
        }
        
        echo "<script>alert('Test Created Successfully!')</script>";
        echo "<script>window.location.href='../teacher_create_test.php?post_id=".$post_id."&test_id=".$test_id."'</script>";
    }
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>