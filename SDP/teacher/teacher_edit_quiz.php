<!DOCTYPE html>
<html>
<head>
<title>Edit Quiz</title>    
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
    
    if(isset($_GET['post_id']) && isset($_GET['quiz_id']))
    {    
        $post_id = $_GET['post_id'];
        $quiz_id = $_GET['quiz_id'];
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
                $sql = "SELECT * FROM quiz INNER JOIN post ON quiz.post_id = post.post_id WHERE quiz.post_id = '$post_id' AND quiz.quiz_id = '$quiz_id' AND post.teacher_id = '$teacher_id'";
                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_array($result))
                {
                    $quiz_title = $row['quiz_title'];
                    $quiz_description = $row['quiz_description'];
                }
                    echo $quiz_title;
            ?>
            </h2>
            <button class='btn btn-warning float-right' style='display:inline-block' data-toggle='modal' data-target='#editQuiz'>Edit</button> 
        </div>
        <div class="card-body">
            <?php
                echo $quiz_description;
            ?>
        </div>
    </div>
    <br/>
    <?php
        if(isset($_GET['group_id']))
        {
            $group_id = $_GET['group_id'];
    ?>
            <center><button class='btn btn-success w-25' onclick="location.href='teacher_edit_question.php?group_id=<?php echo $group_id ?>&post_id=<?php echo $post_id ?>&quiz_id=<?php echo $quiz_id ?>'">Edit Questions</button></center>
    <?php
        }
        else
        {
    ?>
    <center><button class='btn btn-success w-25' onclick="location.href='teacher_edit_question.php?post_id=<?php echo $post_id ?>&quiz_id=<?php echo $quiz_id ?>'">Edit Questions</button></center>
    <?php } ?>
</div>
    
    <!-- The Modal -->
  <div class="modal fade" id="editQuiz">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Quiz Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method='post' action='back/edit_quiz_info.php'>
                <input type='hidden' value='<?php echo $post_id ?>' name='post_id'/>
                <input type='hidden' value='<?php echo $quiz_id ?>' name='quiz_id'/>
                <label>Quiz Title</label>
                <input type='text' required='required' name='quiz_title' class='form-control' value='<?php echo $quiz_title ?>'/><br/>
                <label>Quiz Description</label>
                <textarea required='required' name='quiz_description' class='form-control'><?php echo $quiz_description ?></textarea><br/>
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