<?php

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
        echo "<script>window.location.href='../teacher_view_group.php'</script>";
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
            echo "<script>window.location.href='../teacher_view_group.php'</script>";
        }
        else
        {
            echo "<script>window.location.href='../teacher_view_group.php'</script>";
        }
    }
}
else
{
    echo "<script>window.location.href='../teacher_view_group.php'</script>";
}

?>