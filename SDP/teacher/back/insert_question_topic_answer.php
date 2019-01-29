<?php
include "conn.php";

if (isset($_POST['submit_question'])) {
    
$question_topic = mysqli_real_escape_string($conn, $_POST['question_topic']);

//$quiz_title = mysqli_real_escape_string($db, $_POST['question_title']);

$answer_description_correct= mysqli_real_escape_string($conn, $_POST['answer_description_correct']);
$answer_description_1= mysqli_real_escape_string($conn, $_POST['answer_description_1']);
$answer_description_2= mysqli_real_escape_string($conn, $_POST['answer_description_2']);
$answer_description_3= mysqli_real_escape_string($conn, $_POST['answer_description_3']);


$quiz_title = mysqli_real_escape_string($conn, $_POST['quiz_title']);
$quiz_description = mysqli_real_escape_string($conn, $_POST['quiz_description']);


    /* Insert quiz data to database  */
    	
  
	  $sql = "select * from question where question_topic = '$question_topic'";
	  $result = mysqli_query($conn, $sql); 
	
	while($rows = mysqli_fetch_array($result)) // mmaybe will have more than 1 data
	{
	$haha = $rows['question_id'];
    $quiz_id = $rows['quiz_id'];
    //$post_id = null;//$rows['post_id'];
	}
    //Insert data into question table
    $query_1 = "INSERT INTO question (question_topic) VALUES('$question_topic')";
  	mysqli_query($conn, $query_1);
    
        //Insert data into  answer table
    $query_2 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct', 'CORRECT', '$haha')";
  	mysqli_query($conn, $query_2);
    
  	//Insert data into  answer table
  	 $query_3 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_1', 'FALSE', '$haha')";
  	mysqli_query($conn, $query_3);

//Insert data into  answer table
 $query_4 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_2', 'FALSE', '$haha')";
  	mysqli_query($conn, $query_4);

//Insert data into  answer table
 $query_5 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_3', 'FALSE', '$haha')";
  	mysqli_query($conn, $query_5);
    
    //Insert data into  quiz table
    $query_6 =  "INSERT INTO quiz (quiz_title, quiz_description, post_id) VALUES ('$quiz_title', '$quiz_description' , '1')";
  	mysqli_query($conn, $query_6);

    
   }


?>
