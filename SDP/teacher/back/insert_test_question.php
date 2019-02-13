<?php
    session_start();
    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>window.href='../../login_page.php'</script>");
    }
    else
    {
        include "conn.php";
        $teacher = $_SESSION['teacher'];
        $query = "SELECT * FROM teacher WHERE teacher_username = '$teacher'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $teacher_id = $row['teacher_id'];
        }
    }

    if(isset($_POST['question']) && isset($_POST['correct']) && isset($_POST['ans']) && isset($_POST['test_id']) && isset($_POST['post_id']))
    {
        include "conn.php";
        $question = $_POST['question'];
        $ans_correct = $_POST['correct'];
        $ans = $_POST['ans'];
        $test_id = $_POST['test_id'];
        $post_id = $_POST['post_id'];
        
        $a = 1;
        for($i = 1; $i<=40; $i++)
        {
            $sql_q = "INSERT INTO question(question_topic, test_id) VALUES ('$question[$i]', '$test_id')";
            mysqli_query($conn,$sql_q);
            $sql_q_id = "SELECT * FROM question WHERE question_topic = '$question[$i]' AND test_id= '$test_id'";
            $result_id = mysqli_query($conn,$sql_q_id);
            while($row = mysqli_fetch_array($result_id))
            {
                $question_id = $row['question_id'];
            }
            $sql_c = "INSERT INTO answer(answer_description,answer_correct,question_id) VALUES ('$ans_correct[$i]',TRUE,'$question_id')";
            mysqli_query($conn,$sql_c);
            
            
            for($x = 0;$x<3;$x++)
            {
                $n = $a+$x;
                $sql_a = "INSERT INTO answer(answer_description,answer_correct,question_id) VALUES ('$ans[$n]',FALSE,'$question_id')";
                mysqli_query($conn,$sql_a);
            }
            $a+=3;
            
        }
            if(mysqli_affected_rows($conn)<=0)
            {
                echo "<script>alert('Test Question Insertion Failed')</script>";
                die("<script>window.history.go(-1)</script>");
            }
            else
            {
                echo "<script>window.location.href='../post_detail.php?post_id=".$post_id."'</script>";
            }
            
    }
    else
    {
        echo "<script>alert('No question entered')</script>";
        die("<script>window.history.go(-1)</script>");
    }

?>