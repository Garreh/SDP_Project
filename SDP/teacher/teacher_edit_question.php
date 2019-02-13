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
?>
    
    <div class='container-fluid w-50' style='margin-top:2%;margin-bottom: 12%'>
        <div class='card'>
            <div class='card-header'>Edit Questions</div>
            <div class='card-body'>
<?php
if(isset($_GET['post_id']))
{
    $post_id = $_GET['post_id'];
    
    if(isset($_GET['quiz_id']))
    {
        $quiz_id = $_GET['quiz_id'];
        
        $i = 1;
        $sql = "SELECT * FROM question INNER JOIN quiz ON question.quiz_id = quiz.quiz_id WHERE question.quiz_id = '$quiz_id' AND quiz.post_id = '$post_id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)<=0)
        {
        ?>
            <h2>Add Question</h2>
        <form method="post" action="back/insert_more_quiz_question.php">
            <?php
            if(isset($_GET['group_id']))
            {
                $group_id = $_GET['group_id'];
                echo "<input type='hidden' name='group_id' value='$group_id'/>";
            }
            ?>
            <input type="hidden" name="post_id" value="<?php echo $post_id ?>"/>
            
            <input type="hidden" name="quiz_id" value="<?php echo $quiz_id ?>"/>
            <div class="container">
            <label>Question <?php echo $i ?></label>
            <textarea class='form-control' name='question[1]' required="required" placeholder='Enter your question'></textarea>
            <br/>
            <label>Correct Answer</label>
            <input type='text' class='form-control' name='correct[1]' required="required" placeholder='Enter the correct answer'/>
            <br/>
            <label>Answer B</label>
            <input type='text' class='form-control' name='ans[1]' required="required" placeholder='Enter the false answer'/>
            <br/>
            <label>Answer C</label>
            <input type='text' class='form-control' name='ans[2]' required="required" placeholder='Enter the false answer'/>
            <br/>
            <label>Answer D</label>
            <input type='text' class='form-control' name='ans[3]' required="required" placeholder='Enter the false answer'/>
            <br/>
            </div>
            
            <center>
                <input type="submit" name="submit" value="Create" class="btn btn-success" style="width:10vw;"/>
            </center>
        </form>   
        <?php
        }
        else
        {
            while($row = mysqli_fetch_array($result))
            {
                $question_id = $row['question_id'];
                $question_topic = $row['question_topic'];
            ?>
            <form method='post' action='back/edit_question.php'>
            <?php
            if(isset($_GET['group_id']))
            {
                $group_id = $_GET['group_id'];
                echo "<input type='hidden' name='group_id' value='$group_id'/>";
            }
            ?>
            <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
            <input type='hidden' name='quiz_id' value='<?php echo $quiz_id ?>'/>
            <label>Question <?php echo $i ?></label>
            <input type='hidden' name='question_id' value='<?php echo $question_id ?>'/>
            <textarea class='form-control' name='question' required="required"><?php echo $question_topic ?></textarea>
            <br/>
            <?php
                $sql1 = "SELECT * FROM answer INNER JOIN question ON answer.question_id = question.question_id INNER JOIN quiz ON question.quiz_id = quiz.quiz_id WHERE answer.question_id = '$question_id' AND answer.answer_correct = 1 AND question.quiz_id = '$quiz_id' AND quiz.post_id = '$post_id'";  
                $result1 = mysqli_query($conn,$sql1);
                while($rows = mysqli_fetch_array($result1))
                {
                    $correct_id = $rows['answer_id'];
                    $correct_description = $rows['answer_description'];
            ?>
            <label>Correct Answer</label>
            <input type='hidden' name='correct_id' value='<?php echo $correct_id ?>'/>
            <input type='text' class='form-control' name='correct' value='<?php echo $correct_description ?>' required="required"/>
            <br/>
            <?php
                }
                $n=1;
                $sql2 = $sql1 = "SELECT * FROM answer INNER JOIN question ON answer.question_id = question.question_id INNER JOIN quiz ON question.quiz_id = quiz.quiz_id WHERE answer.question_id = '$question_id' AND answer.answer_correct = 0 AND question.quiz_id = '$quiz_id' AND quiz.post_id = '$post_id'";
                $result2 =mysqli_query($conn,$sql2);
                while($rows = mysqli_fetch_array($result2))
                {
                    $wrong_id = $rows['answer_id'];
                    $wrong_description = $rows['answer_description'];
                    
            ?>
                <label>Wrong Answer <?php echo $n ?></label>
                <input type='hidden' name='wrong_id[<?php echo $n ?>]' value='<?php echo $wrong_id ?>'/>
                <input type='text' class='form-control' name='wrong[<?php echo $n ?>]' value='<?php echo $wrong_description ?>' required="required"/>
                <br/>
            <?php   
                $n++;
                }
            ?>
            <center>
            <button type='button' class='btn btn-warning float-left' onclick="location.href='back/delete_question.php?post_id=<?php echo $post_id ?>&quiz_id=<?php echo $quiz_id ?>&question_id=<?php echo $question_id ?>'">Delete</button>
            <input type='submit' class='btn btn-success' name='edit' value='Edit Question'/>
            </center>
                </form>
            <hr/>
            <?php
                $i++;
            }
        ?>
            <h2>Add Question</h2>
        <form method="post" action="back/insert_more_quiz_question.php">
            <?php
            if(isset($_GET['group_id']))
            {
                $group_id = $_GET['group_id'];
                echo "<input type='hidden' name='group_id' value='$group_id'/>";
            }
            ?>
            <input type="hidden" name="post_id" value="<?php echo $post_id ?>"/>
            <input type="hidden" name="quiz_id" value="<?php echo $quiz_id ?>"/>
            <div class="container">
            <label>Question <?php echo $i ?></label>
            <textarea class='form-control' name='question[1]' required="required" placeholder='Enter your question'></textarea>
            <br/>
            <label>Correct Answer</label>
            <input type='text' class='form-control' name='correct[1]' required="required" placeholder='Enter the correct answer'/>
            <br/>
            <label>Answer B</label>
            <input type='text' class='form-control' name='ans[1]' required="required" placeholder='Enter the false answer'/>
            <br/>
            <label>Answer C</label>
            <input type='text' class='form-control' name='ans[2]' required="required" placeholder='Enter the false answer'/>
            <br/>
            <label>Answer D</label>
            <input type='text' class='form-control' name='ans[3]' required="required" placeholder='Enter the false answer'/>
            <br/>
            </div>
            
            <center>
                <input type="submit" name="submit" value="Create" class="btn btn-success" style="width:10vw;"/>
            </center>
        </form>
        <?php
        }
    }
    else if(isset($_GET['test_id']))
    {
        $test_id = $_GET['test_id'];
        $i = 1;
        $sql = "SELECT * FROM question INNER JOIN test ON question.test_id = test.test_id WHERE question.test_id = '$test_id' AND test.post_id = '$post_id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)<=0)
        {
            ?>

        <form method="post" action="back/insert_test_question.php">
            <div class="container-fluid">
            <input type="hidden" name="post_id" value="<?php echo $post_id ?>"/>
            <?php
                if(isset($_GET['group_id']))
                {
                    $group_id = $_GET['group_id'];
                    echo "<input type='hidden' name='group_id' value='$group_id'/>";
                }
            ?>
            <input type="hidden" name="test_id" value="<?php echo $test_id ?>"/>
            <?php 
                
            $b = 1;
            $c = 2;
            $d = 3;
                
            for($i = 1;$i<=40; $i++)
            {
                echo "<div class='container' style='border-bottom: 2px solid black;'>";
                echo "<label>Question $i</label>";
                echo "<input type='text' class='form-control' name='question[$i]' required='required' placeholder='Enter your question'/>";
                echo "<br/>";
                echo "<label>Correct Answer</label>";
                echo "<input type='text' class='form-control' name='correct[$i]' required='required' placeholder='Enter the correct answer'/>";
                echo "<br/>";
                echo "<label>Answer B</label>";
                echo "<input type='text' class='form-control' name='ans[$b]' required='required' placeholder='Enter the false answer'/>";
                echo "<br/>";
                echo "<label>Answer C</label>";
                echo "<input type='text' class='form-control' name='ans[$c]' required='required' placeholder='Enter the false answer'/>";
                echo "<br/>";
                echo "<label>Answer D</label>";
                echo "<input type='text' class='form-control' name='ans[$d]' required='required' placeholder='Enter the false answer'/>";
                echo "<br/>";
                echo "</div><br/>";
                $b+=3;
                $c+=3;
                $d+=3;
            }
            ?>
            </div>
            <center>
                <input type="submit" name="submit" value="Create Test Question" class="btn w-25  btn-success" style="width:10vw;"/>
            </center>
        </form>
        <br/>
        
 
            <?php
        }
        else
        {
            while($row = mysqli_fetch_array($result))
            {
                $question_id = $row['question_id'];
                $question_topic = $row['question_topic'];
            ?>
            <form method='post' action='back/edit_question.php'>
            <?php
            if(isset($_GET['group_id']))
            {
                $group_id = $_GET['group_id'];
                echo "<input type='hidden' name='group_id' value='$group_id'/>";
            }
            ?>
            <input type='hidden' name='post_id' value='<?php echo $post_id ?>'/>
            <input type='hidden' name='test_id' value='<?php echo $test_id ?>'/>
            <label>Question <?php echo $i ?></label>
            <input type='hidden' name='question_id' value='<?php echo $question_id ?>'/>
            <textarea class='form-control' name='question' required="required"><?php echo $question_topic ?></textarea>
            <br/>
            <?php
                $sql1 = "SELECT * FROM answer INNER JOIN question ON answer.question_id = question.question_id INNER JOIN test ON question.test_id = test.test_id WHERE answer.question_id = '$question_id' AND answer.answer_correct = 1 AND question.test_id = '$test_id' AND test.post_id = '$post_id'";  
                $result1 = mysqli_query($conn,$sql1);
                while($rows = mysqli_fetch_array($result1))
                {
                    $correct_id = $rows['answer_id'];
                    $correct_description = $rows['answer_description'];
            ?>
            <label>Correct Answer</label>
            <input type='hidden' name='correct_id' value='<?php echo $correct_id ?>'/>
            <input type='text' class='form-control' name='correct' value='<?php echo $correct_description ?>' required="required"/>
            <br/>
            <?php
                }
                $n=1;
                $sql2 = "SELECT * FROM answer INNER JOIN question ON answer.question_id = question.question_id INNER JOIN test ON question.test_id = test.test_id WHERE answer.question_id = '$question_id' AND answer.answer_correct = 0 AND question.test_id = '$test_id' AND test.post_id = '$post_id'";
                $result2 =mysqli_query($conn,$sql2);
                while($rows = mysqli_fetch_array($result2))
                {
                    $wrong_id = $rows['answer_id'];
                    $wrong_description = $rows['answer_description'];
                    
            ?>
                <label>Wrong Answer <?php echo $n ?></label>
                <input type='hidden' name='wrong_id[<?php echo $n ?>]' value='<?php echo $wrong_id ?>'/>
                <input type='text' class='form-control' name='wrong[<?php echo $n ?>]' value='<?php echo $wrong_description ?>' required="required"/>
                <br/>
            <?php   
                $n++;
                }
            ?>
            <center>
            <input type='submit' class='btn btn-success' name='edit' value='Edit Question'/>
            </center>
                </form>
            <hr/>
            <?php
                $i++;
            }
        }
    }
    else
    {
        die("<script>window.history.go(-1)</script>");
    }
}
else
{
    die("<script>window.history.go(-1)</script>");
}
?>  
                    </div>
                </div>
        <br/>
        <center>
        <?php
            if(isset($_GET['group_id']) && isset($_GET['quiz_id']))
            {
                $group_id = $_GET['group_id'];
                $quiz_id = $_GET['quiz_id'];
                echo "<button class='btn btn-secondary' onclick=\"location.href='teacher_edit_quiz.php?group_id=$group_id&post_id=$post_id&quiz_id=$quiz_id'\">DONE</button>";
            }
            else if(isset($_GET['group_id']) && isset($_GET['test_id']))
            {
                $group_id = $_GET['group_id'];
                $test_id = $_GET['test_id'];
                echo "<button class='btn btn-secondary' onclick=\"location.href='teacher_edit_test.php?group_id=$group_id&post_id=$post_id&test_id=$test_id'\">DONE</button>";
            }
            else if(isset($_GET['quiz_id']))
            {
                $quiz_id = $_GET['quiz_id'];
                echo "<button class='btn btn-secondary' onclick=\"location.href='teacher_edit_quiz.php?post_id=$post_id&quiz_id=$quiz_id'\">DONE</button>";
            }
            else if(isset($_GET['test_id']))
            {
                $test_id = $_GET['test_id'];
                echo "<button class='btn btn-secondary' onclick=\"location.href='teacher_edit_quiz.php?post_id=$post_id&test_id=$test_id'\">DONE</button>";
            }
            
        ?>
        </center>
            </div>
        
<?php include "css/footer.php" ?>
</body>
</html>