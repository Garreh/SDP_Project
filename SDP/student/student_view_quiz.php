<!DOCTYPE html>
<html>
<head>
    <title>View Quiz</title> 
    <?php 
    session_start();
    include "css/header.php"; 
    ?>
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
    
    if(isset($_GET['post_id']) && isset($_GET['quiz_id']))
    {
        $post_id = $_GET['post_id'];
        $quiz_id = $_GET['quiz_id'];
        
        $sql = "SELECT * FROM quiz WHERE quiz_id = '$quiz_id' AND post_id = '$post_id'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result))
        {
            $quiz_title = $row['quiz_title'];
            $quiz_description = $row['quiz_description'];
        }
?>
    <div class='container-fluid w-50' style='margin-top:2%;margin-bottom:12%;'>
        <div class="card">
            <div class="card-body">
                <h3>
                    <?php echo $quiz_title ?>
                </h3>
                <h5>
                    <?php echo $quiz_description ?>
                </h5>
                <center>
                <?php
                    $sql = "SELECT COUNT(*) AS total_q FROM question WHERE quiz_id = '$quiz_id'";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        $total_q = $row['total_q'];
                    }
                    $sql = "SELECT * FROM question WHERE quiz_id = '$quiz_id' ORDER BY quiz_id LIMIT 1";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)<=0)
                    {
                        echo "<p>There is no question for the quiz</p";
                    }
                    else
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $question_id = $row['question_id'];
                        }
                        $sql = "SELECT COUNT(*) AS total FROM student_answer AS sa INNER JOIN question AS qu ON sa.question_id = qu.question_id INNER JOIN quiz AS qz ON qu.quiz_id = qz.quiz_id WHERE sa.student_id = '$student_id' AND qu.quiz_id = '$quiz_id'";
                        $result = mysqli_query($conn,$sql);
                        
                            while($row = mysqli_fetch_array($result))
                            {
                                $total = $row['total'];
                            }
                        
                            if($total != 0 && $total != $total_q)
                            {
                                echo "<h5 class='text-warning'>You did not finish your quiz! Continue?</h5>";
                                echo "<button class='btn btn-success w-25' onclick=\"location.href='student_answer_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."&question_id=".$question_id."'\">Start Answering</button>";
                            }
                            else if($total == $total_q)
                            {
                                echo "<h5 class='text-success'>You finished the quiz! Want to View Result?</h5>";
                                echo "<button class='btn btn-success w-25' onclick=\"location.href='student_quiz_result.php?post_id=".$post_id."&quiz_id=".$quiz_id."'\">My Result</button>";
//                                echo "<button class='btn btn-warning w-25' onclick=\"location.href='back/student_reset_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."'\">Reset</button>";  
                            }
                            else if($total == 0)
                            {
                                echo "<button class='btn btn-success w-25' onclick=\"location.href='student_answer_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."&question_id=".$question_id."'\">Start Answering</button>";
                            }
                    
                    }
                    
                ?>
                </center>
            </div>
        </div>    
    </div>
<?php } ?>
    
<?php include "css/footer.php" ?>
</body>
</html>

