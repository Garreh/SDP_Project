<!DOCTYPE html>
<html>

<head>
<title>Test Answering</title> 
<?php
    session_start();
    include "css/header.php";
?>
</head>

<body>
<?php
    $page = "post";
    include "css/navbar.php";
    
    include "back/conn.php";
    if(!isset($_SESSION['student']))
    {
        echo "<script>alert('You did not login yet! Student')</script>";
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
if(isset($_GET['post_id']) && isset($_GET['test_id']))
{
        $post_id = $_GET['post_id'];
        $test_id = $_GET['test_id'];
    ?>
    <button class='btn btn-warning float-left' style='margin: 2%;' onclick="location.href='post_detail.php?post_id=<?php echo $post_id ?>'">Back</button>
        <div class='container-fluid w-50 h-75' style='margin-top:2%; margin-bottom:15%;'>
            <div class='card' style='margin-top: 3%; margin-bottom: 2%;'>
                <form method="post" action="back/insert_student_test_answer.php">
                    <input type='hidden' name='post_id' value='<?php echo $post_id ?>' />
                    <input type='hidden' name='test_id' value='<?php echo $test_id ?>' />
                <div class='card-header'>
                    Answer Test
                </div>
                <div class='card-body'>
                
                
    <?php
        $i = 1;
        $a = 1;
        $sql2 = "SELECT * FROM question INNER JOIN test ON question.test_id = test.test_id WHERE question.test_id = '$test_id' ORDER BY question.question_id";
        $result2 = mysqli_query($conn,$sql2);
        while($rows = mysqli_fetch_array($result2))
        {
            $question_id = $rows['question_id'];
            $question_topic = $rows['question_topic'];
        ?>
        <div class='container w-100'>
            <input type='hidden' name='question_id[<?php echo $i ?>]' value='<?php echo $question_id ?>'/>
            <h5 style='text-decoration:underline;'>Question <?php echo $i ?>: <?php echo $question_topic ?></h5>   
        <?php
            $sql3 = "SELECT * FROM answer INNER JOIN question ON answer.question_id = question.question_id INNER JOIN test ON question.test_id = test.test_id WHERE answer.question_id = '$question_id' AND question.test_id='$test_id' ORDER BY RAND()";
            $result3 = mysqli_query($conn,$sql3);
            while($rows = mysqli_fetch_array($result3))
            {
                $answer_id = $rows['answer_id'];
                $answer_description = $rows['answer_description'];
                echo "<input type='radio' required='required' id='answer".$a."' name='answer[".$i."]' value='".$answer_id."'/> ";
                echo "<label for='answer".$a."'>".$answer_description."</label><br/>";
                $a++;
            }
        ?>
            </div><hr/>
        <?php
            $i++;
        }
        ?>
               </div>    
            
                <div class='card-footer'>
                    <center>
                    <input type='submit' class='btn btn-success w-25' value='Submit'/>
                    </center>
                </div>
            
            </form>
        </div>
    </div>
    <?php
    
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>
<?php
    include "css/footer.php";  
?>
</body>



</html>