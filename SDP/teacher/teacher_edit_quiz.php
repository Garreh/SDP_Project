<!DOCTYPE html>
<html>
<head>
<title>Edit Quiz</title>    
<?php include "css/header.php"; session_start(); ?>
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
?>
    
<div class="container-fluid w-75" style="margin-top:1%; margin-bottom:15%;">
    <h2>
    <?php
        $sql = "SELECT * FROM quiz INNER JOIN post ON quiz.post_id = post.post_id WHERE post.teacher_id = '$teacher_id'";
        $result = mysqli_query($conn,$sql);
    
        while($row = mysqli_fetch_array($result))
        {
            $quiz_title = $row['quiz_title'];
        }
        echo $quiz_title;
    ?>
    </h2>
    <div class="card card-light">
        <div class="card-body"></div>
    </div>
</div>
    
<?php include "css/footer.php"; ?>
    
</body>

</html>