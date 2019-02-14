<?php
session_start();
include "conn.php";

if(!isset($_SESSION['teacher']))
{
    echo "<script>alert('You did not login yet! Teacher')</script>";
    die("<script>window.location.href='../login_page.php'</script>");
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

if(isset($_POST['post_id']) && isset($_POST['material_title']) && isset($_POST['material_description']))
{
    $post_id = $_POST['post_id'];
    $material_title = $_POST['material_title'];
    $material_description = $_POST['material_description'];

    if(!empty($_FILES['material_image']['name']))
    {
        include "material_file_upload.php";

        $sql = "INSERT INTO material(material_title,material_description,material_image,post_id) VALUES('$material_title','$material_description','$destination','$post_id')";

        mysqli_query($conn,$sql);

        if(mysqli_affected_rows($conn)<= 0)
        {
            echo "<script>alert('Material created fail!')</script>";
            die("<script>window.history.go(-1);</script>");
        }
        else
        {
            $id_sql = "SELECT * FROM material WHERE material_title ='$material_title' AND material_description = '$material_description' AND post_id = '$post_id'";
            $id_result = mysqli_query($conn,$id_sql);
            while($row = mysqli_fetch_array($id_result))
            {
                $material_id = $row['material_id'];
            }

            echo "<script>alert('Material Created Successfully!')</script>";
            echo "<script>window.location.href='../teacher_create_material.php?post_id=".$post_id."&material_id=".$material_id."'</script>";
        }
    }
    else
    {
        $sql = "INSERT INTO material(material_title,material_description,post_id) VALUES('$material_title','$material_description','$post_id')";

        mysqli_query($conn,$sql);

        if(mysqli_affected_rows($conn)<= 0)
        {
            echo "<script>alert('Material created fail!')</script>";
            die("<script>window.history.go(-1);</script>");
        }
        else
        {
            $id_sql = "SELECT * FROM material WHERE material_title ='$material_title' AND material_description = '$material_description' AND post_id = '$post_id'";
            $id_result = mysqli_query($conn,$id_sql);
            while($row = mysqli_fetch_array($id_result))
            {
                $material_id = $row['material_id'];
            }

            echo "<script>alert('Material Created Successfully!')</script>";

            echo "<script>window.location.href='../teacher_create_material.php?post_id=".$post_id."&material_id=".$material_id."'</script>";
        }
    }
}

?>
