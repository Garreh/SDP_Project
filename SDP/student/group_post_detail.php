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
    
    if(!isset($_SESSION['student']))
    {
        echo "<script>alert('You did not login yet! student')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        
        $student = $_SESSION['student'];
        $query = "SELECT * FROM student WHERE student_username = '$student'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $student_id = $row['student_id'];
        }
    }
    
    if(isset($_GET['group_id']) && isset($_GET['post_id']))
    {
        $group_id = $_GET['group_id'];
        $post_id = $_GET['post_id'];
        
        $sql = "SELECT * FROM post INNER JOIN private_group ON post.group_id = private_group.group_id INNER JOIN student_group ON private_group.group_id = student_group.group_id WHERE post.post_id = '$post_id' AND post.group_id = '$group_id' AND student_group.student_id = '$student_id'";
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
          <h4 class="modal-title">Material List</h4>
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
            
            <h4>There is no material posted yet!</h4>
            
        <?php    
            }
            else
            {
                $material_total = 1;
                while($row = mysqli_fetch_array($result))
                {
                    $material_id = $row['material_id'];
                    $material_title = $row['material_title'];
        ?>
            <hr/><h5>
        <?php 
            echo $material_total.". ";
            echo "<a href='group_material_detail.php?group_id=".$group_id."&post_id=".$post_id."&material_id=".$material_id."'>".$material_title."</a>";
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
          <h4 class="modal-title">Quiz Listing</h4>
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
            
            <h4>There is no quiz posted yet!</h4>
            
        <?php    
            }
            else
            {
                $quiz_total = 1;
                while($row = mysqli_fetch_array($result))
                {
                    $quiz_id = $row['quiz_id'];
                    $quiz_title = $row['quiz_title'];
        ?>
            <hr/><h5>
        <?php 
            echo $quiz_total.". ";
            echo "<a href='student_view_quiz.php?group_id=".$group_id."&post_id=".$post_id."&quiz_id=".$quiz_id."'>".$quiz_title."</a>";
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
            
            <h4>There is no test yet!</h4>
            
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
            echo "<a href='student_view_test.php?group_id=".$group_id."&post_id=".$post_id."&test_id=".$test_id."'>".$test_title."</a>";
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
