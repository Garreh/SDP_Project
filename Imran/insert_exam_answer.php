<?php
$db = mysqli_connect('localhost', 'root', '', 'elearning');

if (isset($_POST['submit_question_test'])) {
    


$test_title = mysqli_real_escape_string($db, $_POST['test_title']);
$test_description = mysqli_real_escape_string($db, $_POST['test_description']);
$question_topic = mysqli_real_escape_string($db, $_POST['question_topic']);
//this is to insert the description of the test title     
$answer_description_correct_1= mysqli_real_escape_string($db, $_POST['answer_description_correct_1']);
$answer_description_correct_2= mysqli_real_escape_string($db, $_POST['answer_description_correct_2']);
$answer_description_correct_3= mysqli_real_escape_string($db, $_POST['answer_description_correct_3']);
$answer_description_correct_4= mysqli_real_escape_string($db, $_POST['answer_description_correct_4']);
$answer_description_correct_5= mysqli_real_escape_string($db, $_POST['answer_description_correct_5']);
$answer_description_correct_6= mysqli_real_escape_string($db, $_POST['answer_description_correct_6']);
$answer_description_correct_7= mysqli_real_escape_string($db, $_POST['answer_description_correct_7']);
$answer_description_correct_8= mysqli_real_escape_string($db, $_POST['answer_description_correct_8']);
$answer_description_correct_9= mysqli_real_escape_string($db, $_POST['answer_description_correct_9']);
$answer_description_correct_10= mysqli_real_escape_string($db, $_POST['answer_description_correct_9']);



// this is to insert multiple answer into 4 answers in 1 question
$answer_description_1= mysqli_real_escape_string($db, $_POST['answer_description_1']);
$answer_description_2= mysqli_real_escape_string($db, $_POST['answer_description_2']);
$answer_description_3= mysqli_real_escape_string($db, $_POST['answer_description_3']);
$answer_description_4= mysqli_real_escape_string($db, $_POST['answer_description_4']);
    
$answer_description_5= mysqli_real_escape_string($db, $_POST['answer_description_5']);
$answer_description_6= mysqli_real_escape_string($db, $_POST['answer_description_6']);
$answer_description_7= mysqli_real_escape_string($db, $_POST['answer_description_7']);
$answer_description_8= mysqli_real_escape_string($db, $_POST['answer_description_8']);
    
$answer_description_9= mysqli_real_escape_string($db, $_POST['answer_description_9']);
$answer_description_10= mysqli_real_escape_string($db, $_POST['answer_description_10']);
$answer_description_11= mysqli_real_escape_string($db, $_POST['answer_description_11']);
$answer_description_12= mysqli_real_escape_string($db, $_POST['answer_description_12']);
    
$answer_description_13= mysqli_real_escape_string($db, $_POST['answer_description_13']);
$answer_description_14= mysqli_real_escape_string($db, $_POST['answer_description_14']);
$answer_description_15= mysqli_real_escape_string($db, $_POST['answer_description_15']);
$answer_description_16= mysqli_real_escape_string($db, $_POST['answer_description_16']);
    
$answer_description_17= mysqli_real_escape_string($db, $_POST['answer_description_17']);
$answer_description_18= mysqli_real_escape_string($db, $_POST['answer_description_18']);
$answer_description_19= mysqli_real_escape_string($db, $_POST['answer_description_19']);
$answer_description_20= mysqli_real_escape_string($db, $_POST['answer_description_20']);
    
$answer_description_21= mysqli_real_escape_string($db, $_POST['answer_description_21']);
$answer_description_22= mysqli_real_escape_string($db, $_POST['answer_description_22']);
$answer_description_23= mysqli_real_escape_string($db, $_POST['answer_description_23']);
$answer_description_24= mysqli_real_escape_string($db, $_POST['answer_description_24']);
    
$answer_description_25= mysqli_real_escape_string($db, $_POST['answer_description_25']);
$answer_description_26= mysqli_real_escape_string($db, $_POST['answer_description_26']);
$answer_description_27= mysqli_real_escape_string($db, $_POST['answer_description_27']);
$answer_description_28= mysqli_real_escape_string($db, $_POST['answer_description_28']);
    
$answer_description_29= mysqli_real_escape_string($db, $_POST['answer_description_29']);
$answer_description_30= mysqli_real_escape_string($db, $_POST['answer_description_30']);
/*$answer_description_31= mysqli_real_escape_string($db, $_POST['answer_description_31']);
$answer_description_32= mysqli_real_escape_string($db, $_POST['answer_description_32']);
    
$answer_description_33= mysqli_real_escape_string($db, $_POST['answer_description_33']);
$answer_description_34= mysqli_real_escape_string($db, $_POST['answer_description_34']);
$answer_description_35= mysqli_real_escape_string($db, $_POST['answer_description_35']);
$answer_description_36= mysqli_real_escape_string($db, $_POST['answer_description_36']);
    
$answer_description_37= mysqli_real_escape_string($db, $_POST['answer_description_37']);
$answer_description_38= mysqli_real_escape_string($db, $_POST['answer_description_38']);
$answer_description_39= mysqli_real_escape_string($db, $_POST['answer_description_39']);
$answer_description_40= mysqli_real_escape_string($db, $_POST['answer_description_40']);

*/





    /* Insert quiz data to database  */
    	
  
	  $sql = "select * from question where question_topic = '$question_topic'";
	  $result = mysqli_query($db, $sql); 
	
	while($rows = mysqli_fetch_array($result)) // mmaybe will have more than 1 data
	{
	$haha = $rows['question_id'];
    //$quiz_id = $rows['quiz_id'];
    $test_id = $rows['test_id'];  
     //$post_id = $rows['post_id'];
	}
    //Insert data into question table
    $query_1 = "INSERT INTO question (question_topic) VALUES('$question_topic')";
  	mysqli_query($db, $query_1);
    
        //Insert data into  answer(1 to 4) table
    $query_2 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_1', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_2);
    
  	//Insert data into  answer table
  	 $query_3 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_1', 'FALSE', '$haha')";
  	mysqli_query($db, $query_3);

//Insert data into  answer table
 $query_4 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_2', 'FALSE', '$haha')";
  	mysqli_query($db, $query_4);

//Insert data into  answer table
 $query_5 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_3', 'FALSE', '$haha')";
  	mysqli_query($db, $query_5);
    
    //Insert data into  test table
    $query_6 =  "INSERT INTO test (test_title, test_description, post_id ) VALUES ('$test_title', '$test_description' , '$test_description', '1')";
  	mysqli_query($db, $query_6);
    ///////////////////////////////////////////////////////////
    
    
        //Insert data into  answer(5-8) table
    $query_7 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_2', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_7);
    
  	//Insert data into  answer table
  	 $query_8 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_4', 'FALSE', '$haha')";
  	mysqli_query($db, $query_8);

//Insert data into  answer table
 $query_9 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_5', 'FALSE', '$haha')";
  	mysqli_query($db, $query_9);

//Insert data into  answer table
 $query_10 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_6', 'FALSE', '$haha')";
  	mysqli_query($db, $query_10);
    
///////////////////////////////////////////////////////////
    
         //Insert data into  answer(9-12) table
    $query_11 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_3', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_11);
    
  	//Insert data into  answer table
  	 $query_12 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_7', 'FALSE', '$haha')";
  	mysqli_query($db, $query_12);

//Insert data into  answer table
 $query_13 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_8', 'FALSE', '$haha')";
  	mysqli_query($db, $query_13);

//Insert data into  answer table
 $query_14 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_9', 'FALSE', '$haha')";
  	mysqli_query($db, $query_14);
    
///////////////////////////////////////////////////////////
     //Insert data into  answer(13-16) table
     $query_15 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_3', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_11);
    
  	//Insert data into  answer table
  	 $query_16 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_10', 'FALSE', '$haha')";
  	mysqli_query($db, $query_12);

//Insert data into  answer table
 $query_17 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_11', 'FALSE', '$haha')";
  	mysqli_query($db, $query_13);

//Insert data into  answer table
 $query_18 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_12', 'FALSE', '$haha')";
  	mysqli_query($db, $query_14);
    
//////////////////////////////////////////////////////////
     //Insert data into  answer(16-20) table
     $query_19 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_4', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_19);
    
  	//Insert data into  answer table
  	 $query_20 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_13', 'FALSE', '$haha')";
  	mysqli_query($db, $query_20);

    //Insert data into  answer table
    $query_21 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_14', 'FALSE', '$haha')";
  	mysqli_query($db, $query_21);

    //Insert data into  answer table
    $query_22 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_15', 'FALSE', '$haha')";
  	mysqli_query($db, $query_22);
    
    //////////////////////////////////////////////////////////
     //Insert data into  answer(21-24) table
     $query_23 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_5', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_23);
    
  	//Insert data into  answer table
  	 $query_24 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_16', 'FALSE', '$haha')";
  	mysqli_query($db, $query_24);

    //Insert data into  answer table
    $query_25 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_17', 'FALSE', '$haha')";
  	mysqli_query($db, $query_25);

    //Insert data into  answer table
    $query_26 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_18', 'FALSE', '$haha')";
  	mysqli_query($db, $query_26);
    
    
    //////////////////////////////////////////////////////////
     //Insert data into  answer(25-28) table
    $query_27 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_6', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_27);
    
  	//Insert data into  answer table
  	 $query_28 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_19', 'FALSE', '$haha')";
  	mysqli_query($db, $query_28);

    //Insert data into  answer table
    $query_29 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_20', 'FALSE', '$haha')";
  	mysqli_query($db, $query_29);

    //Insert data into  answer table
    $query_30 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_21', 'FALSE', '$haha')";
  	mysqli_query($db, $query_30);
    
    //////////////////////////////////////////////////////////
     //Insert data into  answer(29-32) table
     $query_27 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_7', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_27);
    
  	//Insert data into  answer table
  	 $query_28 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_22', 'FALSE', '$haha')";
  	mysqli_query($db, $query_28);

    //Insert data into  answer table
    $query_29 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_23', 'FALSE', '$haha')";
  	mysqli_query($db, $query_29);

    //Insert data into  answer table
    $query_30 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_24', 'FALSE', '$haha')";
  	mysqli_query($db, $query_30);
    
     ////////////////////////////////////////////////////////////
    //Insert data into  answer(33-36) table
    $query_31 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_8', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_31);
    
  	//Insert data into  answer table
  	 $query_32 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_25', 'FALSE', '$haha')";
  	mysqli_query($db, $query_32);

    //Insert data into  answer table
    $query_33 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_26', 'FALSE', '$haha')";
  	mysqli_query($db, $query_33);

    //Insert data into  answer table
    $query_34 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_27', 'FALSE', '$haha')";
  	mysqli_query($db, $query_34);
    
     ////////////////////////////////////////////////////////////
    //Insert data into  answer(37-40) table
     $query_35 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_9', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_35);
    
  	//Insert data into  answer table
  	 $query_36 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_28', 'FALSE', '$haha')";
  	mysqli_query($db, $query_36);

    //Insert data into  answer table
    $query_37 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_29', 'FALSE', '$haha')";
  	mysqli_query($db, $query_37);

    //Insert data into  answer table
    $query_38 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_30', 'FALSE', '$haha')";
  	mysqli_query($db, $query_38);
    
   }


?>
