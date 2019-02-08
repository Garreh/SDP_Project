<!DOCTYPE html>
<html>
<head>
<title>Create Test</title>   
<?php
    include "css/header.php";  
?>   
    
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
    <center><h1>Create Test Question</h1></center>
    <div class="card card-light">
        <div class="card-body">
        <form method="post" action="back/insert_test_question.php">
            <div class="container-fluid" id="dynamic_field">
            <input type="hidden" name="test_id" value="1"/>
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
        
        </div>
    </div>
</div>
<?php include "css/footer.php" ?>   
</body>    
    
</html>