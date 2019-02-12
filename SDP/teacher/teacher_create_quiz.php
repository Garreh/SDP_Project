<!DOCTYPE html>
<html>
<head>
<title>Create Quiz</title>   
<?php
    include "css/header.php"; 
    session_start();
?>   

        
<script type="text/javascript">
    $(document).ready(function(){
        var i = 1;
        var q = 1;
        var a = 1;
        var i2 = parseInt($("#q").val());
        var q2 = parseInt($("#q").val());
        var a2 = parseInt($("#a").val());
        $("#add").click(function(){
            i++
            q++; 
            a+=3;
            $("#dynamic_field").append("<div id='row"+i+"' class='container'><hr/><label>Question "+q+"</label><textarea class='form-control' name='question["+q+"]' required='required' placeholder='Enter your question'></textarea><br/><label>Correct Answer</label><input type='text' class='form-control' name='correct["+q+"]' required='required' placeholder='Enter the correct answer'/><br/><label>Answer B</label><input type='text' class='form-control' name='ans["+a+"]' required='required' placeholder='Enter the false answer'/><br/><label>Answer C</label><input type='text' class='form-control' name='ans["+(a+1)+"]' required='required' placeholder='Enter the false answer'/><br/><label>Answer D</label><input type='text' class='form-control' name='ans["+(a+2)+"]' required='required' placeholder='Enter the false answer'/><br/><center id='rmv"+i+"'><button class='btn btn-danger btn_remove' type='button' style='width:10vw' name='remove' id='remove"+i+"'>Remove</button></center><br/></div>");
            $("#remove"+(i-1)+"").remove();
        });
        $("#editAdd").click(function(){
            i2++
            q2++; 
            a2+=3;
            $("#dynamic_field").append("<div id='row"+i2+"' class='container'><hr/><label>Question "+q2+"</label><textarea class='form-control' name='question["+q2+"]' required='required' placeholder='Enter your question'></textarea><br/><label>Correct Answer</label><input type='text' class='form-control' name='correct["+q2+"]' required='required' placeholder='Enter the correct answer'/><br/><label>Answer B</label><input type='text' class='form-control' name='ans["+a2+"]' required='required' placeholder='Enter the false answer'/><br/><label>Answer C</label><input type='text' class='form-control' name='ans["+(a2+1)+"]' required='required' placeholder='Enter the false answer'/><br/><label>Answer D</label><input type='text' class='form-control' name='ans["+(a2+2)+"]' required='required' placeholder='Enter the false answer'/><br/><center id='rmv"+i2+"'><button class='btn btn-danger btnremove' type='button' style='width:10vw' name='remove' id='remove"+i2+"'>Remove</button></center><br/></div>");
            $("#remove"+(i2-1)+"").remove();
        });
        $(document).on('click','.btn_remove',function(){
            i--;
            q--;
            a-=3;
            var button_id = $(this).attr("id");
            button_id = button_id.charAt(6);
            $("#row"+button_id+"").remove();
            $("#rmv"+i+"").append("<button class='btn btn-danger btn_remove' type='button' style='width:10vw' name='remove' id='remove"+i+"'>Remove</button>");
        });
        $(document).on('click','.btnremove',function(){
            i2--;
            q2--;
            a2-=3;
            var button_id = $(this).attr("id");
            button_id = button_id.charAt(6);
            $("#row"+button_id+"").remove();
            $("#rmv"+i2+"").append("<button class='btn btn-danger btnremove' type='button' style='width:10vw' name='remove' id='remove"+i2+"'>Remove</button>");
        });
        
    });    
</script>
    
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
    
    if(isset($_GET['quiz_id']) && isset($_GET['post_id']))
    {
        $quiz_id = $_GET['quiz_id'];
        $post_id = $_GET['post_id'];
?>
<?php
        $sql1 = "SELECT * FROM question INNER JOIN quiz ON question.quiz_id = quiz.quiz_id INNER JOIN post ON quiz.post_id = post.post_id WHERE question.quiz_id = '$quiz_id' AND quiz.post_id = '$post_id'";
        $result1 = mysqli_query($conn,$sql1);
        
        if(mysqli_num_rows($result1)<=0)
        {
?>
<div class="container-fluid w-75" style="margin-top:1%; margin-bottom:15%;">
    <center><h1>Create Quiz Question</h1></center>
    <div class="card card-light">
        <div class="card-body">
        <form method="post" action="back/insert_quiz_question.php">
            <div class="container-fluid" id="dynamic_field">
            <input type="hidden" name="quiz_id" value="<?php echo $quiz_id ?>"/>
            <div class="container">
            <label>Question 1</label>
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
            
            </div>
            <center>
                <button id="add" name="add" type="button" class="btn btn-info" style="width:10vw">Add Question</button>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <input type="submit" name="submit" value="Create" class="btn btn-success" style="width:10vw;"/>
            </center>
        </form>
        <br/>
        
    </div>
    </div>
</div>
<?php
        }
        else
        {
            $i = 1;
            $a = 1;
?>
<div class="container-fluid w-75" style="margin-top:1%; margin-bottom:15%;">
    <center><h1>Edit Quiz Question</h1></center>
    <div class="card card-light">
        <div class="card-body">
        <form method="post" action="back/edit_quiz_question.php">
            <div class="container-fluid" id="dynamic_field">
            <input type="hidden" name="quiz_id" value="<?php echo $quiz_id ?>"/>
<?php
            while($row = mysqli_fetch_array($result1))
            {
                $question_id = $row['question_id'];
                $question_topic = $row['question_topic'];
                $sql2 = "SELECT * FROM answer WHERE answer_correct = 1 AND question_id = '$question_id'";
                $result2 = mysqli_query($conn,$sql2);
                while($rows = mysqli_fetch_array($result2))
                {
                    $correct_id = $rows['answer_id'];
                    $correct_description = $rows['answer_description']; 
                }
?>

            <div class="container" id="row<?php echo $i ?>">
            <label>Question <?php echo $i ?></label>
                
            <input type="hidden" name="question_id[<?php echo $i ?>]" value="<?php echo $question_id ?>"/>
            <textarea class='form-control' name='question[<?php echo $i ?>]' required="required" placeholder='Enter your question'><?php echo $question_topic ?></textarea>
            <br/>
            <label>Correct Answer</label>
            <input type="hidden" name="correct_id" value="<?php echo $correct_id ?>"/>
            <input type='text' class='form-control' name='correct[<?php echo $i ?>]' value='<?php echo $correct_description ?>' required="required" placeholder='Enter the correct answer'/>
            <br/>
            
<?php
                $sql3 = "SELECT * FROM answer WHERE answer_correct = 0 AND question_id = '$question_id'";
                $result3 = mysqli_query($conn,$sql3);
                while($rows = mysqli_fetch_array($result3))
                {
                    $wrong_id = $rows['answer_id'];
                    $wrong_description = $rows['answer_description'];
                    
?>  
                <label>Wrong Answer</label>
                <input type="hidden" name="wrong_id[<?php echo $a ?>]" value="<?php echo $wrong_id ?>"/>
                <input type='text' class='form-control' name='ans[<?php echo $a ?>]' value='<?php echo $wrong_description ?>' required="required" placeholder='Enter the false answer'/>
                <br/>
<?php
                    
                    $a++;
                    
                }
                echo "<input type='hidden' id='a' value='$a'/>";
?>
                
                <center id='rmv<?php echo $i ?>'>
                
                <button class='btn btn-danger btnremove' type='button' style='width:10vw' name='remove' id='remove<?php echo $i ?>'>Remove</button><br/>
                </center><br/>
                </div>
                
<?php
                    $i++;
                echo "<input type='hidden' id='q' value='$i'/>";
            }
            
?>
            
            
            </div>
            <center>
                
                <button id="editAdd" name="add" type="button" class="btn btn-info" style="width:10vw">Add Question</button>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <input type="submit" name="submit" value="Create" class="btn btn-success" style="width:10vw;"/>
            </center>
        </form>
        <br/>
        
    </div>
    </div>
</div>
<?php
            
        }
    }
    else
    {
        die("<script>window.history.go(-1)</script>");
    }
?>
<?php include "css/footer.php" ?>   
</body>    
    
</html>