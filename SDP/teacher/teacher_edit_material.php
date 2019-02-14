<!DOCTYPE html>
<html>
<head>
<title>Edit material</title>
<?php include "css/header.php"; session_start(); ?>
</head>

<body>

<?php
    $page = "post";
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

    if(isset($_GET['post_id']) && isset($_GET['material_id']))
    {
        $post_id = $_GET['post_id'];
        $material_id = $_GET['material_id'];
        if(isset($_GET['group_id']))
        {
            $group_id = $_GET['group_id'];
    ?>
        <button class='btn btn-warning float-left' style='margin:2%;' onclick="location.href='group_post_detail.php?group_id=<?php echo $group_id ?>&post_id=<?php echo $post_id ?>'">Back</button>
    <?php
        }
        else
        {
    ?>
        <button class='btn btn-warning float-left' style='margin:2%;' onclick="location.href='post_detail.php?post_id=<?php echo $post_id ?>'">Back</button>
    <?php
        }
?>

<div class="container-fluid w-50" style="margin-top:1%; margin-bottom:15%;">
    <div class="card card-light">
        <div class="card-header text-center">
            <h2 style='display:inline-block'>
            <?php
                $sql = "SELECT * FROM material INNER JOIN post ON material.post_id = post.post_id WHERE material.post_id = '$post_id' AND material.material_id = '$material_id' AND post.teacher_id = '$teacher_id'";
                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_array($result))
                {
                    $material_title = $row['material_title'];
                    $material_description = $row['material_description'];
                }
                    echo $material_title;
            ?>
            </h2>
            <button class='btn btn-warning float-right' style='display:inline-block' data-toggle='modal' data-target='#editmaterial'>Edit</button>
        </div>
        <div class="card-body">
            <?php
                echo $material_description;
            ?>
        </div>
    </div>
    <br/>
    <?php
        if(isset($_GET['group_id']))
        {
            $group_id = $_GET['group_id'];
    ?>
            <center><button class='btn btn-success w-25' onclick="location.href='teacher_edit_section.php?group_id=<?php echo $group_id ?>&post_id=<?php echo $post_id ?>&material_id=<?php echo $material_id ?>'">Edit sections</button></center>
    <?php
        }
        else
        {
    ?>
    <center><button class='btn btn-success w-25' onclick="location.href='teacher_edit_section.php?post_id=<?php echo $post_id ?>&material_id=<?php echo $material_id ?>'">Edit sections</button></center>
    <?php } ?>
</div>

    <!-- The Modal -->
  <div class="modal fade" id="editmaterial">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit material Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form method='post' action='back/edit_material_info.php'>
                <input type='hidden' value='<?php echo $post_id ?>' name='post_id'/>
                <input type='hidden' value='<?php echo $material_id ?>' name='material_id'/>
                <label>material Title</label>
                <input type='text' required='required' name='material_title' class='form-control' value='<?php echo $material_title ?>'/><br/>
                <label>material Description</label>
                <textarea required='required' name='material_description' class='form-control'><?php echo $material_description ?></textarea><br/>
                <center>
                <input type='submit' class='btn btn-success w-25' name='submit' value='Edit'/>
                </center>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
<?php } ?>
<?php include "css/footer.php"; ?>

</body>

</html>
