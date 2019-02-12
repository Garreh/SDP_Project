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
if(isset($_GET['group_id']) && isset($_GET['student_id']))
{
    $group_id = $_GET['group_id'];
    $student_id = $_GET['student_id'];
    
    $sql = "DELETE FROM student_group WHERE student_id = '$student_id' AND group_id = '$group_id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)<=0)
    {
        echo "<script>alert('The student cannot be deleted')</script>";
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        echo "<script>alert('The student is deleted from the group')</script>";
        echo "<script>window.location.href='../teacher_view_group.php?group=".$group_id."'</script>";
    }
}
else
{
    die("<script>window.history.go(-1)</script>");
}
?>