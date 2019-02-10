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

if(isset($_POST['post_title']) && isset($_POST['post_desc']))
{
    $post_title = $_POST['post_title'];
    $post_desc = $_POST['post_desc'];
    $post_type = "PUBLIC";
    date_default_timezone_set('Asia/Kuala_Lumpur'); 
    $date = date("Y-m-d H:i:s");
    
    if(!empty($_FILES['upload_post_file']['name']))
    {
        include "post_file_upload.php";
    
        $sql = "INSERT INTO post(post_title,post_description,post_type,post_picture,post_date,teacher_id) VALUES('$post_title','$post_desc','$post_type','$destination','$date','$teacher_id')";

        mysqli_query($conn,$sql);

        if(mysqli_affected_rows($conn)<= 0)
        {
            echo "<script>alert('Post created fail!')</script>";
            die("<script>window.history.go(-1);</script>");
        }
        else
        {
            $id_sql = "SELECT * FROM post WHERE post_title ='$post_title' AND post_description = '$post_desc' AND post_type = '$post_type'";
            $id_result = mysqli_query($conn,$id_sql);
            while($row = mysqli_fetch_array($id_result))
            {
                $post_id = $row['post_id'];
            }
            
            echo "<script>alert('Post Created Successfully!')</script>";
            echo "<script>window.location.href='../teacher_post_detail.php?post_id=".$post_id."'</script>";
        }
    }
    else
    {
        $sql = "INSERT INTO post(post_title,post_description,post_type,post_date,teacher_id) VALUES('$post_title','$post_desc','$post_type','$date','$teacher_id')";

        mysqli_query($conn,$sql);

        if(mysqli_affected_rows($conn)<= 0)
        {
            echo "<script>alert('Post created fail!')</script>";
            die("<script>window.history.go(-1);</script>");
        }
        else
        {
            $id_sql = "SELECT * FROM post WHERE post_title ='$post_title' AND post_description = '$post_desc' AND post_type = '$post_type'";
            $id_result = mysqli_query($conn,$id_sql);
            while($row = mysqli_fetch_array($id_result))
            {
                $post_id = $row['post_id'];
            }
            
            echo "<script>alert('Post Created Successfully!')</script>";
           
            echo "<script>window.location.href='../teacher_post_detail.php?post_id=".$post_id."'</script>";
        }
    }
}
    
    
?>
 