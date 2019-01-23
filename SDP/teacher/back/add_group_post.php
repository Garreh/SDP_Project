<?php
    
    if(isset($_POST['post_title']) && isset($_POST['post_description']) && isset($_POST['group_id']))
    {
        include "conn.php";
        
        $post_title = $_POST['post_title'];
        $post_description = $_POST['post_description'];
        $post_type = "PRIVATE";
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $post_date = date("Y-m-d");
        $teacher_id = "";
        $group_id = $_POST['group_id'];
        
        $sql = "INSERT INTO post (post_title,post_description,post_type,post_date,teacher_id,group_id) VALUES ('$post_title','$post_description','$post_type','$post_date',1,'$group_id')";
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

?>