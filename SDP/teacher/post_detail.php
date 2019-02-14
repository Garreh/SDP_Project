<!DOCTYPE html>
<html>
<head>
    <?php include "css/header.php"; ?>
    <title>Post Details</title>
</head>

<body>
    <?php
    $page = "post";
    session_start();
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
    ?>

<?php
        if(isset($_GET['post_id']))
        {
            $post_id = $_GET['post_id'];
            include "back/conn.php";
            $sql = "Select * from post WHERE post_id = '$post_id'";
            $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_array($result))
            {
                $post_title = $row['post_title'];
                $post_description = $row['post_description'];
                $post_date = $row['post_date'];
                $author = $row['teacher_id'];
            }
            if($author == $teacher_id)
            {
                echo "<button class='btn btn-warning float-left' style='margin:2%' data-toggle='modal' data-target='#editPost'>Edit</button>";
            }
?>
<div class="container-fluid w-50" style="margin-top: 1%; margin-bottom:12%">

        <div class="card">
        <div class="card-header">
                <?php

                echo "<h4  style='display:inline-block'>$post_title</h4>";
                echo "<h4 class='float-right' style='display:inline-block'>$post_date</h4>";
                ?>
            </div>
            <div class="card-body" style="min-height: 30vh">
                <?php echo $post_description ?>
            </div>
            <?php
                if($author == $teacher_id)
                {

            ?>
            <div class="card-footer" style="min-height: 10vh">
                <center>
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-success w-75" data-toggle="modal" data-target="#materialModal">Material</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-info w-75" data-toggle="modal" data-target="#quizModal ">Quiz</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-primary w-75" data-toggle="modal" data-target="#testModal">Test</button>
                        </div>
                    </div>
                </center>
            </div>
            <?php
                }
            ?>
       </div>

    <hr/>

    <div class="container-fluid w-100">
        <center>
        <h2 style='text-decoration:underline;'>Comment Section</h2>
        </center>
        <div class="card">
            <div class="card-body">
            <?php
            $sql_comment = "SELECT * FROM comment WHERE post_id = '$post_id' ORDER BY comment_id";
                $result_comment = mysqli_query($conn,$sql_comment);
                while($rows = mysqli_fetch_array($result_comment))
                {
                    $comment_id = $rows['comment_id'];
                    $comment = $rows['comment'];
                    $date = $rows['comment_datetime'];
                    $student = $rows['student_id'];
                    $teacher = $rows['teacher_id'];

                    if(is_null($student))
                    {
                        $sql_name = "SELECT * FROM teacher WHERE teacher_id = '$teacher'";
                        $result_name = mysqli_query($conn,$sql_name);
                        while($row_name = mysqli_fetch_array($result_name))
                        {
                            $teacher_username = $row_name['teacher_username'];
                            $role = "Teacher";
                            echo "<h7 class='w-50 text-success' style='display:inline-block; text-decoration:underline'>$teacher_username ($role)</h7>";

                        }
                    }
                    else if(is_null($teacher))
                    {
                        $sql_name = "SELECT * FROM student WHERE student_id = '$student'";
                        $result_name = mysqli_query($conn,$sql_name);
                        while($row_name = mysqli_fetch_array($result_name))
                        {
                            $student_username = $row_name['student_username'];
                            $role = "Student";
                            echo "<h7 class='w-50 text-success' style='display:inline-block; text-decoration:underline'>$student_username ($role)</h7>";

                        }
                    }

                        echo "<h7 class='float-right' style='display:inline-block'>$date</h7><br/>";
                        echo "<p class='float-left'>$comment</p>";
                        if($teacher == $teacher_id)
                        {
                            echo "<a href='back/delete_comment.php?comment_id=".$comment_id."' style='display:inline-block' class='card-link float-right'>Delete</a>";
                        }
                        echo "<br/><hr/>";
                }
            ?>
            </div>

        <div class="card-footer">
        <?php
            echo "<form method='post' action='back/add_comment.php'>";
            echo "<input type='text' class='form-control w-75' style='display:inline-block' name='comment' placeholder='Enter Comment...' required='required'/>";
            echo "<input type='hidden' value='".$post_id."' name='post_id'/>";
            echo "<input type='submit' class='btn btn-info' style='margin-left: 2vh;' name='submit' value='Comment'/>";
            echo "</form>";
        ?>
        </div>

        </div>
    </div>

</div>



<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- The EDIT POST Modal -->

    <div class="modal fade" id="editPost">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Post</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form method="post" action="back/edit_post.php">
            <?php
                $sql = "SELECT * FROM post WHERE post_id = '$post_id' AND group_id IS NULL";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result))
                {
                    $post_title = $row['post_title'];
                    $post_description = $row['post_description'];
                }
            ?>
                <input type="hidden" name="post_id" value="<?php echo $post_id ?>"/>
                <input type="text" name="post_title" class="form-control" placeholder="Enter Post Title..." value="<?php echo $post_title ?>" required="required"/><br/>
                <textarea class="form-control" name="post_description" required="required" placeholder="Enter Post Description"><?php echo $post_description ?></textarea><br/>
                <center>
                <input type="submit" class="btn btn-success w-50" value="Edit Post" name="submit"/>
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
            $sql = "SELECT * FROM material INNER JOIN post ON material.post_id = post.post_id WHERE material.post_id = '$post_id' AND post.group_id IS NULL";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)<=0)
            {
        ?>

            <form method='post' action='back/insert_material.php' enctype="multipart/form-data">
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
                <label>Material Title</label>
                <input type='text' name='material_title' class='form-control' required='required' placeholder='Please enter the material title...'/>
                <br/>
                <label>Material Description</label>
                <textarea name='material_description' class='form-control' required='required' placeholder='Please enter the material description...'></textarea>
                <br/>
                <center>
                <label for='material_image' style='padding-left:15%'>Upload Image</label>
                <input type='file' id='material_image' name='material_image'/>
                <br/>
                <input type='submit' class='w-25 btn btn-success' value='Create'/>
                </center>
            </form>

        <?php
            }
            else {
              // code...


        ?>


            <form method='post' action='back/insert_material.php' enctype="multipart/form-data">
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
                <label>Material Title</label>
                <input type='text' name='material_title' class='form-control' required='required' placeholder='Please enter the material title...'/>
                <br/>
                <label>Material Description</label>
                <textarea name='material_description' class='form-control' required='required' placeholder='Please enter the material description...'></textarea>
                <br/>
                <label for='material_image' >Upload Background</label>
                <br>
                <input type='file' id='material_image' name='material_image'/>
                <br/>
                <br>
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
        ?>
            <hr/><h5>
        <?php
            echo $material_total.". ";
            echo "<a href='teacher_edit_material.php?post_id=".$post_id."&material_id=".$material_id."'>".$material_title."</a>";
            echo "<a class='float-right' href='back/delete_material.php?post_id=".$post_id."&material_id=".$material_id."'>Delete</a>";
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
            $sql = "SELECT * FROM quiz INNER JOIN post ON quiz.post_id = post.post_id WHERE quiz.post_id = '$post_id' AND post.group_id IS NULL";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)<=0)
            {
        ?>

            <form method='post' action='back/insert_quiz.php'>
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
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


            <form method='post' action='back/insert_quiz.php'>
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
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
            echo "<a href='teacher_edit_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."'>".$quiz_title."</a>";
            echo "<a class='float-right' href='back/delete_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."'>Delete</a>";
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
            $sql = "SELECT * FROM test INNER JOIN post ON test.post_id = post.post_id WHERE test.post_id = '$post_id' AND post.group_id IS NULL";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)<=0)
            {
        ?>

            <form method='post' action='back/insert_test.php'>
                <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
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
            echo "<a href='teacher_edit_test.php?post_id=".$post_id."&test_id=".$test_id."'>".$test_title."</a>";
            echo "<a class='float-right' href='back/delete_test.php?post_id=".$post_id."&test_id=".$test_id."'>Delete</a><hr/>";
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
?>



    <?php
    include "css/footer.php";
    ?>

    </body>



</html>
