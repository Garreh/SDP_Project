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

if(isset($_POST['material_id']) && isset($_POST['post_id']) && isset($_POST['material_title']) && isset($_POST['material_description']))
{
    $material_id = $_POST['material_id'];
    $post_id = $_POST['post_id'];
    $material_title = $_POST['material_title'];
    $material_description = $_POST['material_description'];

    $sql = "UPDATE material SET material_title = '$material_title', material_description = '$material_description' WHERE material_id = '$material_id' AND post_id = '$post_id'";
    mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)<=0)
    {
        echo "<script>alert('Nothing changed!')</script>";
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        echo "<script>window.location.href='../teacher_edit_material.php?post_id=".$post_id."&material_id=".$material_id."'</script>";
    }
}

?>
