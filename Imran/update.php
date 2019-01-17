<?php
    //step 1:connection
include  "connection.php";


//step 2: retieve all data from edit_profile.php


 $student_username = mysqli_real_escape_string($db, $_POST['student_username']);
  $student_email = mysqli_real_escape_string($db, $_POST['student_email']);
  $student_password = mysqli_real_escape_string($db, $_POST['student_password']);
  $first_name =  mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  



// update the data to database by looking at the position from the database and the 'name' input from html    
    
    $sql = "Update student SET student_username = '$student_username',  student_email = '$student_email', student_password = '".md5($student_password)."', first_name = '$first_name', last_name = '$last_name' WHERE student_username = '$student_username'";
                                
    
     //step 4: run the query
                                 
    mysqli_query($connection, $sql);
                                     
      //step 5: check the query got any error or not
         if(mysqli_affected_rows($connection) <=0)
                                    {
                                         echo "<script>alert('No data updated in DB');</script>";
                                         die("<script>window.location.href='edit_profile.php?name=$student_username</script>");
                                     }
                                     
                                     echo "<script>alert('Data updated in DB');</script>";
                                     die("<script>window.location.href='edit_profile.php'</script>");
    

?>