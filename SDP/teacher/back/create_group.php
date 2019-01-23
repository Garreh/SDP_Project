<?php

include "conn.php";

if(isset($_POST['group_name']) && isset($_POST['group_description']))
{
    $group_name = mysqli_real_escape_string($conn,$_POST['group_name']);
    $group_description = mysqli_real_escape_string($conn,$_POST['group_description']);
    
    $sql = "INSERT INTO private_group(group_title, group_description, teacher_id) VALUES ".
			"('$group_name','$group_description','1')";
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
else
{
    echo "<script>window.history.go(-1);</script>";
}

?>