<!DOCTYPE html>
<html>
<head>
<title>Create material</title>
<?php
    include "css/header.php";
    session_start();
?>




</head>

<body>
<?php
    $page = "group";
    include "css/navbar.php";

    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        include "back/conn.php";
        $teacher = $_SESSION['teacher'];
        $query = "SELECT * FROM teacher WHERE teacher_username = '$teacher'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $teacher_id = $row['teacher_id'];
        }
    }

    if(isset($_GET['material_id']) && isset($_GET['post_id']))
    {
        $material_id = $_GET['material_id'];
        $post_id = $_GET['post_id'];
?>

<div class="container-fluid w-75" style="margin-top:1%; margin-bottom:15%;">
    <center><h1>Create material section</h1></center>
    <div class="card card-light">
        <div class="card-body">
        <form method="post" action="back/insert_material_section.php" enctype="multipart/form-data">
            <div class="container-fluid" id="dynamic_field">
            <?php
            if(isset($_GET['group_id']))
            {
                $group_id = $_GET['group_id'];
                echo "<input type='hidden' name='group_id' value='".$group_id."'/>";
            }
            ?>
            <input type="hidden" name="post_id" value="<?php echo $post_id ?>"/>
            <input type="hidden" name="material_id" value="<?php echo $material_id ?>"/>
            <div class="container">
            <label>Topic</label>
            <textarea class='form-control' name='topic' required="required" placeholder='Enter your section'></textarea>
            <br/>
            <label>Description</label>
            <textarea class='form-control' name='description' required="required" placeholder='Enter your section'></textarea>
            <br/>
            <label>Slide</label>
            <br>
            <input type='file' id='material_slide' name='slide'/>
            <br>
            <br/>
            <label>Image</label>
            <br>
            <input type='file' id='material_image' name='image'/>
            <br>
            <br/>
            <label>Video</label>
            <br>
            <input type='file' id='material_video' name='video'/>
          <br>

            <br/>
            </div>

            </div>
            <center>
                <input type="submit" name="submit" value="Create" class="btn btn-success" style="width:10vw;"/>
            </center>
        </form>
        <br/>

    </div>
    </div>
</div>

<?php

    }
    else
    {
        die("<script>window.history.go(-1)</script>");
    }
?>
<?php include "css/footer.php" ?>
</body>

</html>
