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
   
if(isset($_POST['group_id']) && isset($_POST['member_email']))
{
    include "conn.php";
    
    $group_id = $_POST['group_id'];
    $member_email = $_POST['member_email'];
    
    $sql_member = "SELECT * FROM student WHERE student_email = '$member_email'";
    $member_result = mysqli_query($conn,$sql_member);
    
    if(mysqli_num_rows($member_result)<=0)
    {
        echo "<script>alert('The student doesnt\' exist!!!')</script>";
        echo "<script>window.history.go(-1)</script>";
    }
    else
    {
        while($row = mysqli_fetch_array($member_result))
        {
            $member_id = $row['student_id'];
        } 
        $sql = "INSERT INTO student_group (group_id,student_id) VALUES ('$group_id','$member_id')";
        mysqli_query($conn,$sql);
        if(mysqli_affected_rows($conn)<=0)
        {
            echo "<script>window.history.go(-1)</script>";
        }
        else
        {
            echo "<script>window.location.href='../teacher_view_group.php?group=$group_id'</script>";
        }
    }
}
else
{
    echo "<script>window.history.go(-1)</script>";
}

?>