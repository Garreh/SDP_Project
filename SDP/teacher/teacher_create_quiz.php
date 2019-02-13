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
        $("#add").click(function(){
            i++
            q++; 
            a+=3;
            $("#dynamic_field").append("<div id='row"+i+"' class='container'><hr/><label>Question "+q+"</label><textarea class='form-control' name='question["+q+"]' required='required' placeholder='Enter your question'></textarea><br/><label>Correct Answer</label><input type='text' class='form-control' name='correct["+q+"]' required='required' placeholder='Enter the correct answer'/><br/><label>Answer B</label><input type='text' class='form-control' name='ans["+a+"]' required='required' placeholder='Enter the false answer'/><br/><label>Answer C</label><input type='text' class='form-control' name='ans["+(a+1)+"]' required='required' placeholder='Enter the false answer'/><br/><label>Answer D</label><input type='text' class='form-control' name='ans["+(a+2)+"]' required='required' placeholder='Enter the false answer'/><br/><center id='rmv"+i+"'><button class='btn btn-danger btn_remove' type='button' style='width:10vw' name='remove' id='remove"+i+"'>Remove</button></center><br/></div>");
            $("#remove"+(i-1)+"").remove();
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

<div class="container-fluid w-75" style="margin-top:1%; margin-bottom:15%;">
    <center><h1>Create Quiz Question</h1></center>
    <div class="card card-light">
        <div class="card-body">
        <form method="post" action="back/insert_quiz_question.php">
            <div class="container-fluid" id="dynamic_field">
            <?php
            if(isset($_GET['group_id']))
            {
                $group_id = $_GET['group_id'];
                echo "<input type='hidden' name='group_id' value='".$group_id."'/>";
            }
            ?>
            <input type="hidden" name="post_id" value="<?php echo $post_id ?>"/>
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
        die("<script>window.history.go(-1)</script>");
    }
?>
<?php include "css/footer.php" ?>   
</body>    
    
</html>