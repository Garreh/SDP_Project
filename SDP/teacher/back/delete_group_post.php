<?php

session_start();
if(!isset($_SESSION['teacher']))
{
    echo "<script>alert('You did not login yet! Teacher')</script>";
    die("<script>../../login_page.php</script>");
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
if(isset($_GET['group_id']) && isset($_GET['post_id']))
{
    $group_id = $_GET['group_id'];
    $post_id = $_GET['post_id'];
    
    $sql1 = "SELECT * FROM material INNER JOIN post ON material.post_id = post.post_id WHERE material.post_id = '$post_id' AND post.group_id = '$group_id'";
    $result1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0)
    {
        while($row = mysqli_fetch_array($result1))
        {
            $material_id = $row['material_id'];
            
            $sql2 = "SELECT * FROM section INNER JOIN material ON section.material_id  = material.material_id INNER JOIN post ON material.post_id = post.post_id WHERE post.group_id = '$group_id' AND section.material_id = '$material_id' AND material.post_id = '$post_id'";
            $result2 = mysqli_query($conn,$sql2);
            if(mysqli_num_rows($result2)<=0)
            {
                $sql3 = "DELETE material.* FROM material INNER JOIN post ON material.post_id = post.post_id WHERE post.group_id = '$group_id' AND material.post_id = '$post_id' AND material.material_id = '$material_id'";
                mysqli_query($conn,$sql3);
            }
            else
            {
                $sql3 = "DELETE material.* FROM material INNER JOIN post ON material.post_id = post.post_id WHERE post.group_id = '$group_id' AND material.post_id = '$post_id' AND material.material_id = '$material_id'";
                mysqli_query($conn,$sql3);

                $sql4 = "DELETE section.* FROM section INNER JOIN material ON section.material_id = material.material_id INNER JOIN post ON material.post_id = post.post_id WHERE post.group_id = '$group_id' AND material.post_id = '$post_id' AND section.material_id = '$material_id'";
                mysqli_query($conn,$sql4);
            }

        }
    }
    $sql5 = "SELECT * FROM quiz INNER JOIN post ON quiz.post_id = post.post_id WHERE quiz.post_id = '$post_id' AND post.group_id = '$group_id'";
    $result5 = mysqli_query($conn,$sql5);
    if(mysqli_num_rows($result5)>0)
    {
        while($row = mysqli_fetch_array($result5))
        {
            $quiz_id = $row['quiz_id'];
            
            $sql6 = "SELECT * FROM question INNER JOIN quiz ON question.quiz_id  = quiz.quiz_id INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND question.quiz_id = '$quiz_id' AND quiz.post_id = '$post_id'";
            $result6 = mysqli_query($conn,$sql6);
            if(mysqli_num_rows($result6)<=0)
            {
                $sql7 = "DELETE quiz.* FROM quiz INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND quiz.post_id = '$post_id' AND quiz.quiz_id = '$quiz_id'";
                mysqli_query($conn,$sql7);
            }
            else
            {
                $sql7 = "DELETE quiz.* FROM quiz INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND quiz.post_id = '$post_id' AND quiz.quiz_id = '$quiz_id'";
                mysqli_query($conn,$sql7);

                $sql8 = "DELETE question.* FROM question INNER JOIN quiz ON question.quiz_id = quiz.quiz_id INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND quiz.post_id = '$post_id' AND question.quiz_id = '$quiz_id'";
                mysqli_query($conn,$sql8);

                $sql9 = "DELETE answer.* FROM answer INNER JOIN question ON answer.question_id = question.question_id INNER JOIN quiz ON question.quiz_id = quiz.quiz_id INNER JOIN post ON quiz.post_id = post.post_id WHERE post.group_id = '$group_id' AND quiz.post_id = '$post_id' AND question.quiz_id = '$quiz_id'";
                mysqli_query($conn,$sql9);
            }
        }
    }
    $sql10 = "SELECT * FROM test INNER JOIN post ON test.post_id = post.post_id WHERE test.post_id = '$post_id' AND post.group_id = '$group_id'";
    $result10 = mysqli_query($conn,$sql10);
    if(mysqli_num_rows($result10)>0)
    {
        while($row = mysqli_fetch_array($result10))
        {
            $test_id = $row['test_id'];
            
            $sql11 = "SELECT * FROM question INNER JOIN test ON question.test_id  = test.test_id INNER JOIN post ON test.post_id = post.post_id WHERE post.group_id = '$group_id' AND question.test_id = '$test_id' AND test.post_id = '$post_id'";
            $result11 = mysqli_query($conn,$sql11);
            if(mysqli_num_rows($result11)<=0)
            {
                $sql12 = "DELETE test.* FROM test INNER JOIN post ON test.post_id = post.post_id WHERE post.group_id = '$group_id' AND test.post_id = '$post_id' AND test.test_id = '$test_id'";
                mysqli_query($conn,$sql12);

            }
            else
            {
                $sql12 = "DELETE test.* FROM test INNER JOIN post ON test.post_id = post.post_id WHERE post.group_id = '$group_id' AND test.post_id = '$post_id' AND test.test_id = '$test_id'";
                mysqli_query($conn,$sql12);

                $sql13 = "DELETE question.* FROM question INNER JOIN test ON question.test_id = test.test_id INNER JOIN post ON test.post_id = post.post_id WHERE post.group_id = '$group_id' AND test.post_id = '$post_id' AND question.test_id = '$test_id'";
                mysqli_query($conn,$sql13);

                $sql14 = "DELETE answer.* FROM answer INNER JOIN question ON answer.question_id = question.question_id INNER JOIN test ON question.test_id = test.test_id INNER JOIN post ON test.post_id = post.post_id WHERE post.group_id = '$group_id' AND test.post_id = '$post_id' AND question.test_id = '$test_id'";
                mysqli_query($conn,$sql14);

            }
        }
    }
    $sql15 = "SELECT * FROM comment INNER JOIN post WHERE comment.post_id = '$post_id' AND post.group_id = '$group_id'";
    $result15 = mysqli_query($conn,$sql15);
    if(mysqli_num_rows($result15)>0)
    {
        $sql16 = "DELETE comment.* FROM comment INNER JOIN post ON comment.post_id = post.post_id WHERE comment.post_id = '$post_id' AND post.group_id = '$group_id'";
        mysqli_query($conn,$sql16);
    }
    
    $sql17 = "DELETE post.* FROM post WHERE post_id = '$post_id' AND group_id = '$group_id'";
    mysqli_query($conn,$sql17);
    if(mysqli_affected_rows($conn)<=0)
    {
        echo "<script>alert('Post Delete Failed!')</script>";
        die("<script>window.history.go(-1)</script>");
    }
    else
    {
        echo "<script>alert('Post Deleted!')</script>";
        die("<script>window.location.href='../teacher_view_group.php?group=".$group_id."'</script>");
    }
    
}
else
{
    die("<script>window.history.go(-1)</script>");
}

?>