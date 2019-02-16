<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    include "css/header.php";
    ?>
    <title>Post Details</title>
</head>

<body>
    <?php
    $page = "post";

    include "css/navbar.php";
    if(!isset($_SESSION['student']))
    {
        echo "<script>alert('You did not login yet! Student')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        include "back/conn.php";
        $student = $_SESSION['student'];
        $query = "SELECT * FROM student WHERE student_username = '$student'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $student_id = $row['student_id'];
        }
    }
    ?>
<div class="container-fluid" style="margin-top: 1%; margin-bottom:12%">
    <div class="container w-50">
        <div class="card">
        <div class="card-header">
            <?php
            if(isset($_GET['post_id']))
            {
                $post_id = $_GET['post_id'];
                include "back/conn.php";

                date_default_timezone_set('Asia/Kuala_Lumpur');
                $date = date("Y-m-d");

                $check_sql = "SELECT * FROM access WHERE student_id = '$student_id' AND post_id = '$post_id'";
                $check_result = mysqli_query($conn,$check_sql);
                if(mysqli_num_rows($check_result)<=0)
                {
                    $access_sql = "INSERT INTO access VALUES('$student_id','$post_id','$date')";
                    mysqli_query($conn,$access_sql);
                }
                else
                {
                    $update_access = "UPDATE access SET date = '$date' WHERE student_id = '$student_id' AND post_id = '$post_id'";
                }



                $sql = "Select * from post WHERE post_id = '$post_id'";
                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_array($result))
                {
                    $post_title = $row['post_title'];
                    $post_description = $row['post_description'];
                    $post_date = $row['post_date'];
                    $author = $row['teacher_id'];
                }
                $sql = "SELECT * FROM teacher WHERE teacher_id = '$author'";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result))
                {
                    $teacher_username = $row['teacher_username'];
                }
                echo "<h4  style='display:inline-block'>$post_title</h4>";
                echo "<h4 class='float-right' style='display:inline-block'>$post_date</h4>";
                ?>
            </div>
            <div class="card-body" style="min-height: 30vh">
                <?php echo $post_description ?>
            </div>

            <div class="card-footer" style="min-height: 10vh">
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
    <hr/>

    <div class="container w-50">
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
                    $teacher = $rows['teacher_id'];
                    $student = $rows['student_id'];

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
                        if($student == $student_id)
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

    <!-- The MATERIAL Modal -->
  <div class="modal fade" id="materialModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Material</h4>
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

            <h3>There is no material yet</h3>

        <?php
            }
            else
            {
        ?>
          <h4>Material Listing</h4>
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

            <h3>There is no quiz yet</h3>

        <?php
            }
            else
            {
        ?>
            <h4>Quiz Listing</h4>
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
            echo "<a href='student_view_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."'>".$quiz_title."</a>";
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

            <h3>There is no test yet</h3>

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
            echo "<a href='student_view_test.php?post_id=".$post_id."&test_id=".$test_id."'>".$test_title."</a>";
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
