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
if(isset($_GET['group_id']) && isset($_GET['post_id']) && isset($_GET['material_id']))
{
    $group_id = $_GET['group_id'];
    $post_id = $_GET['post_id'];
    $material_id = $_GET['material_id'];
    
    $sql = "SELECT * FROM section INNER JOIN material ON section.material_id  = material.material_id INNER JOIN post ON material.post_id = post.post_id WHERE post.group_id = '$group_id' AND section.material_id = '$material_id' AND material.post_id = '$post_id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<=0)
    {
        $sql1 = "DELETE material.* FROM material INNER JOIN post ON material.post_id = post.post_id WHERE post.group_id = '$group_id' AND material.post_id = '$post_id' AND material.material_id = '$material_id'";
        mysqli_query($conn,$sql1);
        
        echo "<script>alert('Material is Deleted!')</script>";
        echo "<script>window.location.href='../group_post_detail.php?group_id=".$group_id."&post_id=".$post_id."'</script>";
    }
    else
    {
        $sql1 = "DELETE material.* FROM material INNER JOIN post ON material.post_id = post.post_id WHERE post.group_id = '$group_id' AND material.post_id = '$post_id' AND material.material_id = '$material_id'";
        mysqli_query($conn,$sql1);

        $sql2 = "DELETE section.* FROM section INNER JOIN material ON section.material_id = material.material_id INNER JOIN post ON material.post_id = post.post_id WHERE post.group_id = '$group_id' AND material.post_id = '$post_id' AND section.material_id = '$material_id'";
        mysqli_query($conn,$sql2);
        
        echo "<script>alert('Material Deleted!')</script>";
        echo "<script>window.location.href='../group_post_detail.php?group_id=".$group_id."&post_id=".$post_id."'</script>";
    }
    
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>