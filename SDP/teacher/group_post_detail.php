<!DOCTYPE html>
<html>
<head>
<title>Group Post Details</title>
<?php include "css/header.php"; session_start(); ?>

</head>

<?php
    $page = "group";
    include "css/navbar.php";
    include "back/conn.php";

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

    if(isset($_GET['group_id']) && isset($_GET['post_id']))
    {
        $group_id = $_GET['group_id'];
        $post_id = $_GET['post_id'];

        $sql = "SELECT * FROM post WHERE post_id = '$post_id' AND teacher_id = '$teacher_id' AND group_id = '$group_id'";
        $result = mysqli_query($conn,$sql);
        while($rows = mysqli_fetch_array($result))
        {
            $post_title = $rows['post_title'];
            $post_description = $rows['post_description'];
            $post_date = $rows['post_date'];
        }
?>
<button class='btn btn-warning float-left' style='margin:2%;' onclick="location.href='teacher_view_group.php?group=<?php echo $group_id ?>'">Back</button>
    <div class='container-fluid w-50' style='margin-top:2%; margin-bottom:15%;'>
        <div class='card'>
            <div class='card-body'>
                <h7 class="w-75" style="display:inline-block"><?php echo $post_title ?></h7>
                <h7 class="float-right" style="display:inline-block"><?php echo $post_date ?></h7><hr/>
                <p class="w-100 h-75"><?php echo $post_description ?></p>
            </div>
            <div class='card-footer'>
                <center>
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-success w-75" data-toggle="modal" data-target="#materialModal">Material</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-info w-75" data-toggle="modal" data-target="#quizModal">Quiz</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-primary w-75" data-toggle="modal" data-target="#testModal">Test</button>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- The MATERIAL Modal -->
  <div class="modal fade" id="materialModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Material</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <?php
            $sql = "SELECT * FROM material INNER JOIN post ON material.post_id = post.post_id WHERE material.post_id = '$post_id' AND post.group_id = '$group_id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)<=0)
            {
        ?>

            <form method='post' action='back/insert_group_material.php' enctype="multipart/form-data">
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
                <input type='hidden' name='group_id' value='<?php echo $group_id ?>'/>
                <label>Material Title</label>
                <input type='text' name='material_title' class='form-control' required='required' placeholder='Please enter the material title...'/>
                <br/>
                <label>Material Description</label>
                <textarea name='material_description' class='form-control' required='required' placeholder='Please enter the material description...'></textarea>
                <br/>
                <center>
                <label for='material_image' style='padding-left:15%'>Upload Image</label>
                <input type='file' id='material_image' required='required' name='material_image'/>
                <br/>
                <input type='submit' class='w-25 btn btn-success' value='Create'/>
                </center>
            </form>

        <?php
            }
            else
            {
        ?>


            <form method='post' action='back/insert_group_material.php' enctype="multipart/form-data">
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
                <input type='hidden' name='group_id' value='<?php echo $group_id ?>'/>
                <label>Material Title</label>
                <input type='text' name='material_title' class='form-control' required='required' placeholder='Please enter the material title...'/>
                <br/>
                <label>Material Description</label>
                <textarea name='material_description' class='form-control' required='required' placeholder='Please enter the material description...'></textarea>
                <br/>

        
                <label for='material_image' >Material File</label>
                <br>
                <input type='file' class="inputfile" required='required' id='material_image' name='material_image' />
<br>
                <br/>
                <center>
                <input type='submit' class='w-25 btn btn-success' value='Create'/>
                </center>
            </form>

            <hr/><h4>Material Listing</h4>
        <?php
                $material_total = 1;
                while($row = mysqli_fetch_array($result))
                {
                    $material_id = $row['material_id'];
                    $material_title = $row['material_title'];
                    $file = $row['material_image'];

        ?>
            <hr/><h5>
        <?php
            echo $material_total.". ";
            // echo "<a href='back/download_file.php?file=".$file."'s>".$material_title."        <button>Download</button></a>";
            echo "".$material_title."&nbsp;&nbsp; ";
            // echo "<a href='back/teacher_edit_material.php??group_id=".$group_id."&post_id=".$post_id."&material_id=".$material_id."'>".$material_title."&nbsp;&nbsp;</a> ";
            echo "<a  href='back/download_file.php?file=".$file."'s>Download</a>&nbsp;";
            echo "<a class='float-right' href='back/delete_group_material.php?group_id=".$group_id."&post_id=".$post_id."&material_id=".$material_id."'>Delete</a>";

        ?>
            </h5>
        <?php
                    $material_total++;
                }
            }
        ?>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- The QUIZ Modal -->
  <div class="modal fade" id="quizModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create New Quiz</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
         <?php
            $sql = "SELECT * FROM quiz INNER JOIN post ON quiz.post_id = post.post_id WHERE quiz.post_id = '$post_id' AND post.group_id = '$group_id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)<=0)
            {
        ?>

            <form method='post' action='back/insert_group_quiz.php'>
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
                <input type='hidden' name='group_id' value='<?php echo $group_id ?>'/>
                <label>Quiz Title</label>
                <input type='text' name='quiz_title' class='form-control' required='required' placeholder='Please enter the quiz title...'/>
                <br/>
                <label>Quiz Description</label>
                <textarea name='quiz_description' class='form-control' required='required' placeholder='Please enter the quiz description...'></textarea>
                <br/>
                <center>
                <input type='submit' class='w-25 btn btn-success' value='Create'/>
                </center>
            </form>

        <?php
            }
            else
            {
        ?>


            <form method='post' action='back/insert_group_quiz.php'>
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
                <input type='hidden' name='group_id' value='<?php echo $group_id ?>'/>
                <label>Quiz Title</label>
                <input type='text' name='quiz_title' class='form-control' required='required' placeholder='Please enter the quiz title...'/>
                <br/>
                <label>Quiz Description</label>
                <textarea name='quiz_description' class='form-control' required='required' placeholder='Please enter the quiz description...'></textarea>
                <br/>
                <center>
                <input type='submit' class='w-25 btn btn-success' value='Create'/>
                </center>
            </form>

            <hr/><h4>Quiz Listing</h4>
        <?php
                $quiz_total = 1;
                while($row = mysqli_fetch_array($result))
                {
                    $quiz_id = $row['quiz_id'];
                    $quiz_title = $row['quiz_title'];
        ?>
            <hr/><h5>
        <?php
            echo $quiz_total.". ";
            echo "<a href='teacher_edit_quiz.php?group_id=".$group_id."&post_id=".$post_id."&quiz_id=".$quiz_id."'>".$quiz_title."</a>";
            echo "<a class='float-right' href='back/delete_group_quiz.php?group_id=".$group_id."&post_id=".$post_id."&quiz_id=".$quiz_id."'>Delete</a>";
        ?>
            </h5>
        <?php
                    $quiz_total++;
                }
            }
        ?>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- The TEST Modal -->
  <div class="modal fade" id="testModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Test</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
         <?php
            $sql = "SELECT * FROM test INNER JOIN post ON test.post_id = post.post_id WHERE test.post_id = '$post_id' AND post.group_id = '$group_id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)<=0)
            {
        ?>

            <form method='post' action='back/insert_group_test.php'>
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
                <input type='hidden' name='group_id' value='<?php echo $group_id ?>'/>
                <label>Test Title</label>
                <input type='text' name='test_title' class='form-control' required='required' placeholder='Please enter the test title...'/>
                <br/>
                <label>Test Description</label>
                <textarea name='test_description' class='form-control' required='required' placeholder='Please enter the test description...'></textarea>
                <br/>
                <center>
                <input type='submit' class='w-25 btn btn-success' value='Create'/>
                </center>
            </form>

        <?php
            }
            else
            {

                while($row = mysqli_fetch_array($result))
                {
                    $test_id = $row['test_id'];
                    $test_title = $row['test_title'];
                    $test_description = $row['test_description'];
        ?>
            <h5>
        <?php
            echo "<a href='teacher_edit_test.php?group_id=".$group_id."&post_id=".$post_id."&test_id=".$test_id."'>".$test_title."</a>";
            echo "<a class='float-right' href='back/delete_group_test.php?group_id=".$group_id."&post_id=".$post_id."&test_id=".$test_id."'>Delete</a><hr/>";
            echo "<p class='text-dark'>".$test_description."</p>";
        ?>
            </h5>
        <?php

                }
            }
        ?>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

<?php
    }
    else
    {
        die("<script>window.location.href='teacher_view_group.php'</script>");
    }
?>
<?php include "css/footer.php"; ?>
</html>
