<!DOCTYPE html>
<html>
<head>
<title>Edit Test</title>    
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
    
    if(isset($_GET['post_id']) && isset($_GET['test_id']))
    {    
        $post_id = $_GET['post_id'];
        $test_id = $_GET['test_id'];
?>
  
<div class="container-fluid w-50" style="margin-top:1%; margin-bottom:15%;">
    <div class="card card-light">
        <div class="card-header text-center">
            <h2 style='display:inline-block'>
            <?php
                $sql = "SELECT * FROM test INNER JOIN post ON test.post_id = post.post_id WHERE test.post_id = '$post_id' AND test.test_id = '$test_id' AND post.teacher_id = '$teacher_id'";
                $result = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_array($result))
                {
                    $test_title = $row['test_title'];
                    $test_description = $row['test_description'];
                }
                    echo $test_title;
            ?>
            </h2>
            <button class='btn btn-warning float-right' style='display:inline-block' data-toggle='modal' data-target='#editTest'>Edit</button> 
        </div>
        <div class="card-body">
            <?php
                echo $test_description;
            ?>
        </div>
    </div>
    <br/>
    <?php
        if(isset($_GET['group_id']))
        {
            $group_id = $_GET['group_id'];
    ?>
            <center><button class='btn btn-success w-25' onclick="location.href='teacher_edit_question.php?group_id=<?php echo $group_id ?>&post_id=<?php echo $post_id ?>&test_id=<?php echo $test_id ?>'">Edit Questions</button></center>
    <?php
        }
        else
        {
    ?>
    <center><button class='btn btn-success w-25' onclick="location.href='teacher_edit_question.php?post_id=<?php echo $post_id ?>&test_id=<?php echo $test_id ?>'">Edit Questions</button></center>
    <?php } ?>
</div>
    
    <!-- The Modal -->
  <div class="modal fade" id="editTest">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit test Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method='post' action='back/edit_test_info.php'>
                <input type='hidden' value='<?php echo $post_id ?>' name='post_id'/>
                <input type='hidden' value='<?php echo $test_id ?>' name='test_id'/>
                <label>test Title</label>
                <input type='text' required='required' name='test_title' class='form-control' value='<?php echo $test_title ?>'/><br/>
                <label>test Description</label>
                <textarea required='required' name='test_description' class='form-control'><?php echo $test_description ?></textarea><br/>
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