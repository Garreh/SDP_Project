<!DOCTYPE html>
<html>
    
<head>
    <title>Create Quiz</title>
    <?php
    include "css/header.php";  
    ?>
</head>
    
<body>
<?php
    include "back/conn.php";
    $page = "group";
    include "css/navbar.php";
    
    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>../../login_page.php</script>");
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
?>
    
<?php
    $sql = "SELECT * FROM post WHERE post_id = '1' AND post_type = 'PUBLIC'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<=0)
    {
        
    }
    else
    {
        while($row = mysqli_fetch_array($result))
        {
            $post_title = $row['post_title'];
            $post_description = $row['post_description'];
            $post_date = $row['post_date'];
            $issuer = $row['teacher_id'];
        }
    
        
?>
<div class="container-fluid w-75" style="margin-top: 1%;margin-bottom: 12%;">
    <div class="card bg-light text-dark" style="min-height:60vh;">
        <div class="card-header text-center" style="min-height:10vh;">
            <h2></h2>
        </div>
        <div class="card-body bg-light text-justify">
            <p>
                
            </p>
        </div>
        <?php 
        if($issuer == $teacher_id)
        {
        ?>
        <div class="card-footer bg-light" style="padding-top: 5px; padding-bottom: 5px; min-height:8vh">
            <center>
                <div class="row">
                    <div class="col-4">
                        <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#manageMaterial">Manage Material</button>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-lg btn-info" data-toggle="modal" data-target="#manageQuiz">Manage Quiz</button>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#manageTest">Manage Test</button>
                    </div>
                </div>
            </center> 
        </div>
        <?php
            }
        }
        ?>
    </div>
</div>
<?php
  include "css/footer.php";  
?>
</body>
    
</html>