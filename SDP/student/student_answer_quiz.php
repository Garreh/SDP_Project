<!DOCTYPE html>
<html>

<head>
<title>Quiz Answering</title> 
<?php
    session_start();
    include "css/header.php";
?>
<script type="text/javascript">
$(document).ready(function(){  //declare the page document for a function
    $("button#answer1").click(function(){ 	//get the id from the select option, if changed option, do the ajax
        var ans = $(this).val(); //declare the variable for the value to be posted to the ajax php file
        var ques = $("#question").val();
        $.post("back/get_quiz_answer.php", {answer: ans, question: ques}, function(data) //use for posting data without using any form and without changing the page
        {
            if(data.status == true)
            {  
                $('#result').html(data.msg).css('color','green');//message color=green  
                $("button#answer1").addClass('btn-success');
                $("button#answer1").attr("disabled",true);
                $("button#answer2").attr("disabled",true);
                $("button#answer3").attr("disabled",true);
                $("button#answer4").attr("disabled",true);
            }
            else
            {
                $('#result').html(data.msg).css('color','red');	//message color=red
                $("button#answer1").addClass('btn-danger');
                $("button#answer1").attr("disabled",true);
                $("button#answer2").attr("disabled",true);
                $("button#answer3").attr("disabled",true);
                $("button#answer4").attr("disabled",true);
            }
        }, 'json');
    });
    $("button#answer2").click(function(){ 	//get the id from the select option, if changed option, do the ajax
        var ans = $(this).val(); //declare the variable for the value to be posted to the ajax php file
        var ques = $("#question").val();
        $.post("back/get_quiz_answer.php", {answer: ans, question: ques}, function(data) //use for posting data without using any form and without changing the page
        {
            if(data.status == true)
            {  
                $('#result').html(data.msg).css('color','green');//message color=green  
                $("button#answer2").addClass('btn-success');
                $("button#answer1").attr("disabled",true);
                $("button#answer2").attr("disabled",true);
                $("button#answer3").attr("disabled",true);
                $("button#answer4").attr("disabled",true);
            }
            else
            {
                $('#result').html(data.msg).css('color','red');	//message color=red
                $("button#answer2").addClass('btn-danger');
                $("button#answer1").attr("disabled",true);
                $("button#answer2").attr("disabled",true);
                $("button#answer3").attr("disabled",true);
                $("button#answer4").attr("disabled",true);
            }
        }, 'json');
    });
    $("button#answer3").click(function(){ 	//get the id from the select option, if changed option, do the ajax
        var ans = $(this).val(); //declare the variable for the value to be posted to the ajax php file
        var ques = $("#question").val();
        $.post("back/get_quiz_answer.php", {answer: ans, question: ques}, function(data) //use for posting data without using any form and without changing the page
        {
            if(data.status == true)
            {  
                $('#result').html(data.msg).css('color','green');//message color=green 
                $("button#answer3").addClass('btn-success');
                $("button#answer1").attr("disabled",true);
                $("button#answer2").attr("disabled",true);
                $("button#answer3").attr("disabled",true);
                $("button#answer4").attr("disabled",true);
            }
            else
            {
                $('#result').html(data.msg).css('color','red');	//message color=red
                $("button#answer3").addClass('btn-danger');
                $("button#answer1").attr("disabled",true);
                $("button#answer2").attr("disabled",true);
                $("button#answer3").attr("disabled",true);
                $("button#answer4").attr("disabled",true);
            }
        }, 'json');
    });
    $("button#answer4").click(function(){ 	//get the id from the select option, if changed option, do the ajax
        var ans = $(this).val(); //declare the variable for the value to be posted to the ajax php file
        var ques = $("#question").val();
        $.post("back/get_quiz_answer.php", {answer: ans, question: ques}, function(data) //use for posting data without using any form and without changing the page
        {
            if(data.status == true)
            {  
                $('#result').html(data.msg).css('color','green');//message color=green  
                $("button#answer4").addClass('btn-success');
                $("button#answer1").attr("disabled",true);
                $("button#answer2").attr("disabled",true);
                $("button#answer3").attr("disabled",true);
                $("button#answer4").attr("disabled",true);
            }
            else
            {
                $('#result').html(data.msg).css('color','red');	//message color=red
                $("button#answer4").addClass('btn-danger');
                $("button#answer1").attr("disabled",true);
                $("button#answer2").attr("disabled",true);
                $("button#answer3").attr("disabled",true);
                $("button#answer4").attr("disabled",true);
            }
        }, 'json');
    });
});
</script>
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
if(isset($_GET['post_id']))
{
    if(!isset($_GET['quiz_id']) && !isset($_GET['question_id']))
    {
        echo "<script>alert('The question doesn't exist')</script>";
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        $post_id = $_GET['post_id'];
        $quiz_id = $_GET['quiz_id'];
        $question_id = $_GET['question_id'];
    ?>
        <div class='container-fluid w-50 h-75' >
            <div class='card' style='margin-top: 3%; margin-bottom: 2%;'>
                <div class='card-header' style='height:17vh'>
    <?php

        $sql1 = "SELECT COUNT(*) AS total FROM question INNER JOIN quiz ON question.quiz_id = quiz.quiz_id INNER JOIN post ON quiz.post_id = post.post_id WHERE question.quiz_id = '$quiz_id'";
        $result1 = mysqli_query($conn,$sql1);
        while($rows = mysqli_fetch_array($result1))
        {
            $total = $rows['total'];
        }
        $sql2 = "SELECT * FROM question INNER JOIN quiz ON question.quiz_id = quiz.quiz_id INNER JOIN post ON quiz.post_id = post.post_id WHERE question.quiz_id = '$quiz_id' AND question.question_id = '$question_id'";
        $result2 = mysqli_query($conn,$sql2);
        while($rows = mysqli_fetch_array($result2))
        {
            $question_id = $rows['question_id'];
            $question_topic = $rows['question_topic'];
        }
        ?>
                    <input type='hidden' name='question_id' id='question' value='<?php echo $question_id ?>'/>
                    <h5><?php echo $question_topic ?></h5>
                </div>
                <div class='card-body'>
        <?php
        $i = 1;
        
        $sql3 = "SELECT * FROM answer INNER JOIN question ON answer.question_id = question.question_id INNER JOIN quiz ON question.quiz_id = quiz.quiz_id WHERE answer.question_id = '$question_id' AND question.quiz_id='$quiz_id' ORDER BY RAND()";
        $result3 = mysqli_query($conn,$sql3);
        while($rows = mysqli_fetch_array($result3))
        {
            $answer_id = $rows['answer_id'];
            $answer_description = $rows['answer_description'];
            $correct = $rows['answer_correct'];

            $sql = "SELECT * FROM student_answer WHERE student_id = '$student_id' AND question_id='$question_id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)<=0)
            {
                echo "<button class='btn w-100' id='answer".$i."' value='".$answer_id."'>$answer_description</button><br/><br/>";
                $i++;
            }
            else
            {
                while($row = mysqli_fetch_array($result))
                {
                    $student_answer = $row['answer_id'];

                    if($student_answer == $answer_id && $correct == 0)
                    {
                        echo "<button class='btn btn-danger w-100' style='border:double 5px black;' id='answer' disabled='true' value='".$answer_id."'>$answer_description</button><br/><br/>";
                    }
                    else if($student_answer == $answer_id && $correct == 1)
                    {
                        echo "<button class='btn btn-success w-100' style='border:double 5px black;' id='answer' disabled='true' value='".$answer_id."'>$answer_description</button><br/><br/>";
                    }
                    else if($correct == 1)
                    {
                        echo "<button class='btn btn-success w-100' id='answer' disabled='true' value='".$answer_id."'>$answer_description</button><br/><br/>";
                    }
                    else
                    {
                        echo "<button class='btn w-100' id='answer' disabled='true' value='".$answer_id."'>$answer_description</button><br/><br/>";
                    }
                }


            }

        }
    ?>
       <center><span id='result'></span></center> 




                </div>
                <div class='card-footer'>
                    <div class='container' style='overflow-x:auto; max-width: 100vw; max-height:7.5vw'>
                    <center>
                        <?php
                            $i = 1;
                            $sql4 = "SELECT * FROM question INNER JOIN quiz ON question.quiz_id = quiz.quiz_id WHERE question.quiz_id = '$quiz_id'";
                            $result4 = mysqli_query($conn,$sql4);
                            while($rows = mysqli_fetch_array($result4))
                            {
                                $id = $rows['question_id'];

                                if($question_id == $id)
                                {
                                    echo "<button class='btn btn-outline-info active' onclick=\"location.href='student_answer_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."&question_id=".$id."'\">$i</button>";
                                }
                                else
                                {
                                    echo "<button class='btn btn-outline-info' onclick=\"location.href='student_answer_quiz.php?post_id=".$post_id."&quiz_id=".$quiz_id."&question_id=".$id."'\">$i</button>";
                                }
                                $i++;
                            }
                        ?>
                    </center>
                    </div>
                </div>
            </div>
            <center><button class='btn btn-warning w-25' style='margin-bottom: 5%;' onclick="location.href='student_view_quiz.php?post_id=<?php echo $post_id ?>&quiz_id=<?php echo $quiz_id ?>'">Back</button></center>
        </div>
    <?php
    }
    
}
else
{
    echo "<script>alert('The question doesn't exist')</script>";
    die("<script>window.history.go(-1)</script>");
}

?>
<?php
    include "css/footer.php";  
?>
</body>



</html>