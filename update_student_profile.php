<?php
    //step 1:connection
include  "conn.php";


//step 2: retieve all data from edit_profile_student.php


$student_username = mysqli_real_escape_string($conn, $_POST['student_username']);
$student_email = $_POST['student_email'];
$first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name = mysqli_real_escape_string($conn,$_POST['last_name']);

//step 3: sql
                                 
    $sql = "Update student SET student_username = '$student_username',   student_email = '$student_email',first_name = '$first_name', last_name = '$last_name', WHERE student_username = '$student_username'";


 //step 4: run the query
                                 
    mysqli_query($conn, $sql);
                                     
      //step 5: check the query got any error or not
         if(mysqli_affected_rows($conn) <=0)
             {
                 echo "<script>alert('No data updated in DB');</script>";
                die("<script>window.location.href='edit_profile_student.php?id=$student_id</script>");
                                     }
                                     
                 echo "<script>alert('Data updated in DB');</script>";
                die("<script>window.location.href='student_profile_student.php'</script>");
?>