<?php

include "conn.php";

session_start();
if(!isset($_SESSION['teacher']))
{
    echo "<script>alert('You did not login yet! Teacher')</script>";
    die("<script>../../login_page.php</script>");
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

if(isset($_POST['group_name']) && isset($_POST['group_description']) && isset($_POST['group_salt']))
{
    $group_name = mysqli_real_escape_string($conn,$_POST['group_name']);
    $group_description = mysqli_real_escape_string($conn,$_POST['group_description']);
    $hash_name = $teacher_id.$group_name;
    $hash = sha1($hash_name);
    
    $sql = "INSERT INTO private_group(group_title, group_description, group_salt, teacher_id) VALUES ".
			"('$group_name','$group_description','$hash','$teacher_id')";
    mysqli_query($conn,$sql);
    
    if(mysqli_affected_rows($conn)<=0)
    {
        echo "<script>alert('You cannot create a group with the same name!')</script>";
        die("<script>window.history.go(-1)'</script>");
    }
    else
    {
        $group_salt = $_POST['group_salt'];
        echo "<script>window.location.href='../teacher_view_group.php?group=$group_salt'</script>";
    }
    
}
else
{
    echo "<script>window.history.go(-1);</script>";
}

?>