<?php
$db = mysqli_connect('localhost', 'root', '', 'historydb');

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
$answer_description_correct_10= mysqli_real_escape_string($db, $_POST['answer_description_correct_10']);
$answer_description_correct_11= mysqli_real_escape_string($db, $_POST['answer_description_correct11']);
$answer_description_correct_12= mysqli_real_escape_string($db, $_POST['answer_description_correct_12']);
$answer_description_correct_13= mysqli_real_escape_string($db, $_POST['answer_description_correct_13']);
$answer_description_correct_14= mysqli_real_escape_string($db, $_POST['answer_description_correct_14']);
$answer_description_correct_15= mysqli_real_escape_string($db, $_POST['answer_description_correct_15']);
$answer_description_correct_16= mysqli_real_escape_string($db, $_POST['answer_description_correct_16']);
$answer_description_correct_17= mysqli_real_escape_string($db, $_POST['answer_description_correct_17']);
$answer_description_correct_18= mysqli_real_escape_string($db, $_POST['answer_description_correct_18']);
$answer_description_correct_19= mysqli_real_escape_string($db, $_POST['answer_description_correct_19']);
$answer_description_correct_20= mysqli_real_escape_string($db, $_POST['answer_description_correct_20']);
$answer_description_correct_21= mysqli_real_escape_string($db, $_POST['answer_description_correct_21']);
$answer_description_correct_22= mysqli_real_escape_string($db, $_POST['answer_description_correct_22']);
$answer_description_correct_23= mysqli_real_escape_string($db, $_POST['answer_description_correct_23']);
$answer_description_correct_24= mysqli_real_escape_string($db, $_POST['answer_description_correct_24']);
$answer_description_correct_25= mysqli_real_escape_string($db, $_POST['answer_description_correct_25']);
$answer_description_correct_26= mysqli_real_escape_string($db, $_POST['answer_description_correct_26']);
$answer_description_correct_27= mysqli_real_escape_string($db, $_POST['answer_description_correct_27']);
$answer_description_correct_28= mysqli_real_escape_string($db, $_POST['answer_description_correct_28']);
$answer_description_correct_29= mysqli_real_escape_string($db, $_POST['answer_description_correct_29']);
$answer_description_correct_30= mysqli_real_escape_string($db, $_POST['answer_description_correct_30']);
$answer_description_correct_31= mysqli_real_escape_string($db, $_POST['answer_description_correct_31']);
$answer_description_correct_32= mysqli_real_escape_string($db, $_POST['answer_description_correct_32']);
$answer_description_correct_33= mysqli_real_escape_string($db, $_POST['answer_description_correct_33']);
$answer_description_correct_34= mysqli_real_escape_string($db, $_POST['answer_description_correct_34']);
$answer_description_correct_35= mysqli_real_escape_string($db, $_POST['answer_description_correct_35']);
$answer_description_correct_36= mysqli_real_escape_string($db, $_POST['answer_description_correct_36']);
$answer_description_correct_37= mysqli_real_escape_string($db, $_POST['answer_description_correct_37']);
$answer_description_correct_38= mysqli_real_escape_string($db, $_POST['answer_description_correct_38']);
$answer_description_correct_39= mysqli_real_escape_string($db, $_POST['answer_description_correct_39']);
$answer_description_correct_40= mysqli_real_escape_string($db, $_POST['answer_description_correct_40']);



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
$answer_description_31= mysqli_real_escape_string($db, $_POST['answer_description_31']);
$answer_description_32= mysqli_real_escape_string($db, $_POST['answer_description_32']);

$answer_description_33= mysqli_real_escape_string($db, $_POST['answer_description_33']);
$answer_description_34= mysqli_real_escape_string($db, $_POST['answer_description_34']);
$answer_description_35= mysqli_real_escape_string($db, $_POST['answer_description_35']);
$answer_description_36= mysqli_real_escape_string($db, $_POST['answer_description_36']);

$answer_description_37= mysqli_real_escape_string($db, $_POST['answer_description_37']);
$answer_description_38= mysqli_real_escape_string($db, $_POST['answer_description_38']);
$answer_description_39= mysqli_real_escape_string($db, $_POST['answer_description_39']);
$answer_description_40= mysqli_real_escape_string($db, $_POST['answer_description_40']);
    
    $answer_description_41= mysqli_real_escape_string($db, $_POST['answer_description_41']);
$answer_description_42= mysqli_real_escape_string($db, $_POST['answer_description_42']);
$answer_description_43= mysqli_real_escape_string($db, $_POST['answer_description_43']);
$answer_description_44= mysqli_real_escape_string($db, $_POST['answer_description_44']);
    
    $answer_description_45= mysqli_real_escape_string($db, $_POST['answer_description_45']);
$answer_description_46= mysqli_real_escape_string($db, $_POST['answer_description_46']);
$answer_description_47= mysqli_real_escape_string($db, $_POST['answer_description_47']);
$answer_description_48= mysqli_real_escape_string($db, $_POST['answer_description_48']);
    
    $answer_description_49= mysqli_real_escape_string($db, $_POST['answer_description_49']);
$answer_description_50= mysqli_real_escape_string($db, $_POST['answer_description_50']);
$answer_description_51= mysqli_real_escape_string($db, $_POST['answer_description_51']);
$answer_description_52= mysqli_real_escape_string($db, $_POST['answer_description_52']);
    
    $answer_description_53= mysqli_real_escape_string($db, $_POST['answer_description_53']);
$answer_description_54= mysqli_real_escape_string($db, $_POST['answer_description_54']);
$answer_description_55= mysqli_real_escape_string($db, $_POST['answer_description_55']);
$answer_description_56= mysqli_real_escape_string($db, $_POST['answer_description_56']);
    
    $answer_description_57= mysqli_real_escape_string($db, $_POST['answer_description_57']);
$answer_description_58= mysqli_real_escape_string($db, $_POST['answer_description_58']);
$answer_description_59= mysqli_real_escape_string($db, $_POST['answer_description_59']);
$answer_description_60= mysqli_real_escape_string($db, $_POST['answer_description_60']);

$answer_description_61= mysqli_real_escape_string($db, $_POST['answer_description_61']);
$answer_description_62= mysqli_real_escape_string($db, $_POST['answer_description_62']);
$answer_description_63= mysqli_real_escape_string($db, $_POST['answer_description_63']);
$answer_description_64= mysqli_real_escape_string($db, $_POST['answer_description_64']);
$answer_description_66= mysqli_real_escape_string($db, $_POST['answer_description_65']);
$answer_description_66= mysqli_real_escape_string($db, $_POST['answer_description_66']);
$answer_description_67= mysqli_real_escape_string($db, $_POST['answer_description_67']);
$answer_description_68= mysqli_real_escape_string($db, $_POST['answer_description_68']);
$answer_description_69= mysqli_real_escape_string($db, $_POST['answer_description_69']);
$answer_description_70= mysqli_real_escape_string($db, $_POST['answer_description_70']);
$answer_description_71= mysqli_real_escape_string($db, $_POST['answer_description_71']);
$answer_description_72= mysqli_real_escape_string($db, $_POST['answer_description_72']);
$answer_description_73= mysqli_real_escape_string($db, $_POST['answer_description_73']);
$answer_description_74= mysqli_real_escape_string($db, $_POST['answer_description_74']);
$answer_description_75= mysqli_real_escape_string($db, $_POST['answer_description_75']);
$answer_description_76= mysqli_real_escape_string($db, $_POST['answer_description_76']);
$answer_description_77= mysqli_real_escape_string($db, $_POST['answer_description_77']);
$answer_description_78= mysqli_real_escape_string($db, $_POST['answer_description_78']);
$answer_description_79= mysqli_real_escape_string($db, $_POST['answer_description_79']);
$answer_description_80= mysqli_real_escape_string($db, $_POST['answer_description_80']);
$answer_description_81= mysqli_real_escape_string($db, $_POST['answer_description_81']);
$answer_description_82= mysqli_real_escape_string($db, $_POST['answer_description_82']);
$answer_description_83= mysqli_real_escape_string($db, $_POST['answer_description_83']);
$answer_description_84= mysqli_real_escape_string($db, $_POST['answer_description_84']);
$answer_description_85= mysqli_real_escape_string($db, $_POST['answer_description_85']);
$answer_description_86= mysqli_real_escape_string($db, $_POST['answer_description_86']);
$answer_description_87= mysqli_real_escape_string($db, $_POST['answer_description_87']);
$answer_description_88= mysqli_real_escape_string($db, $_POST['answer_description_88']);
$answer_description_89= mysqli_real_escape_string($db, $_POST['answer_description_89']);
$answer_description_90= mysqli_real_escape_string($db, $_POST['answer_description_90']);
$answer_description_91= mysqli_real_escape_string($db, $_POST['answer_description_91']);
$answer_description_92= mysqli_real_escape_string($db, $_POST['answer_description_92']);
$answer_description_93= mysqli_real_escape_string($db, $_POST['answer_description_93']);
$answer_description_94= mysqli_real_escape_string($db, $_POST['answer_description_94']);
$answer_description_95= mysqli_real_escape_string($db, $_POST['answer_description_95']);
$answer_description_96= mysqli_real_escape_string($db, $_POST['answer_description_96']);
$answer_description_97= mysqli_real_escape_string($db, $_POST['answer_description_97']);
$answer_description_98= mysqli_real_escape_string($db, $_POST['answer_description_98']);
$answer_description_99= mysqli_real_escape_string($db, $_POST['answer_description_99']);
$answer_description_100= mysqli_real_escape_string($db, $_POST['answer_description_100']);
$answer_description_101= mysqli_real_escape_string($db, $_POST['answer_description_101']);
$answer_description_102= mysqli_real_escape_string($db, $_POST['answer_description_102']);
$answer_description_103= mysqli_real_escape_string($db, $_POST['answer_description_103']);
$answer_description_104= mysqli_real_escape_string($db, $_POST['answer_description_104']);
$answer_description_105= mysqli_real_escape_string($db, $_POST['answer_description_105']);
$answer_description_106= mysqli_real_escape_string($db, $_POST['answer_description_106']);
$answer_description_107= mysqli_real_escape_string($db, $_POST['answer_description_107']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_108']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_109']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_110']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_111']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_112']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_113']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_114']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_115']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_116']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_117']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_118']);
$answer_description_108= mysqli_real_escape_string($db, $_POST['answer_description_119']);
$answer_description_100= mysqli_real_escape_string($db, $_POST['answer_description_120']);
$answer_description_100= mysqli_real_escape_string($db, $_POST['answer_description_121']);



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
    //Insert data into question 1 table
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
    
    
        //Insert data into  answer  question 2 table
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
    
         //Insert data into  answer   question 3 table
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
     //Insert data into  answer  question 4 table
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
     //Insert data into  answer  question 5 table
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
     //Insert data into  answer table
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
     //Insert data into  answer  question 6 table
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
     //Insert data into  answer   question 7 table
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
    //Insert data into  answer  question 8 table
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
    //Insert data into  answer  question 9 table
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
 
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 10 table
      $query_39 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_10', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_39);
    
  	//Insert data into  answer table
  	 $query_40 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_31', 'FALSE', '$haha')";
  	mysqli_query($db, $query_40);

    //Insert data into  answer table
    $query_41 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_32', 'FALSE', '$haha')";
  	mysqli_query($db, $query_41);

    //Insert data into  answer table
    $query_42 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_32', 'FALSE', '$haha')";
  	mysqli_query($db, $query_42);
    
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 11 table
    $query_43 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_11', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_43);
    
  	//Insert data into  answer table
  	 $query_44 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_33', 'FALSE', '$haha')";
  	mysqli_query($db, $query_44);

    //Insert data into  answer table
    $query_44 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_34', 'FALSE', '$haha')";
  	mysqli_query($db, $query_45);

    //Insert data into  answer table
    $query_45 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_35', 'FALSE', '$haha')";
  	mysqli_query($db, $query_45);
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 12 table
     $query_46 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_12', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_46);
    
  	//Insert data into  answer table
  	 $query_47 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_36', 'FALSE', '$haha')";
  	mysqli_query($db, $query_47);

    //Insert data into  answer table
    $query_48 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_37', 'FALSE', '$haha')";
  	mysqli_query($db, $query_48);

    //Insert data into  answer table
    $query_49 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_38', 'FALSE', '$haha')";
  	mysqli_query($db, $query_49);
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 13 table
     $query_50 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_13', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_51);
    
  	//Insert data into  answer table
  	 $query_52 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_39', 'FALSE', '$haha')";
  	mysqli_query($db, $query_52);

    //Insert data into  answer table
    $query_53 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_40', 'FALSE', '$haha')";
  	mysqli_query($db, $query_54);

    //Insert data into  answer table
    $query_54 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_41', 'FALSE', '$haha')";
  	mysqli_query($db, $query_54;
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 14 table
     $query_55 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_14', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_55);
    
  	//Insert data into  answer table
  	 $query_56 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_42', 'FALSE', '$haha')";
  	mysqli_query($db, $query_56);

    //Insert data into  answer table
    $query_57 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_43', 'FALSE', '$haha')";
  	mysqli_query($db, $query_57);

    //Insert data into  answer table
    $query_58 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_44', 'FALSE', '$haha')";
  	mysqli_query($db, $query_58);
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 15 table
    
 $query_59 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_15', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_59);
    
  	//Insert data into  answer table
  	 $query_60 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_42', 'FALSE', '$haha')";
  	mysqli_query($db, $query_60);

    //Insert data into  answer table
    $query_61 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_43', 'FALSE', '$haha')";
  	mysqli_query($db, $query_62);

    //Insert data into  answer table
    $query_62= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_44', 'FALSE', '$haha')";
  	mysqli_query($db, $query_62);                 
    
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 16 table
    $query_63 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_16', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_63);
    
  	//Insert data into  answer table
  	 $query_64 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_45', 'FALSE', '$haha')";
  	mysqli_query($db, $query_64);

    //Insert data into  answer table
    $query_65 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_46', 'FALSE', '$haha')";
  	mysqli_query($db, $query_65);

    //Insert data into  answer table
    $query_66= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_47', 'FALSE', '$haha')";
  	mysqli_query($db, $query_66);   
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 17 table
     $query_67 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_17', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_67);
    
  	//Insert data into  answer table
  	 $query_68 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_48', 'FALSE', '$haha')";
  	mysqli_query($db, $query_68);

    //Insert data into  answer table
    $query_69 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_49', 'FALSE', '$haha')";
  	mysqli_query($db, $query_69);

    //Insert data into  answer table
    $query_70= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_50', 'FALSE', '$haha')";
  	mysqli_query($db, $query_70);   
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 18 table
      $query_71 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_18', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_71);            
    //Insert data into  answer table
  	 $query_72 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_51', 'FALSE', '$haha')";
  	mysqli_query($db, $query_72);

    //Insert data into  answer table
    $query_73 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_52', 'FALSE', '$haha')";
  	mysqli_query($db, $query_73);

    //Insert data into  answer table
    $query_74= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_53', 'FALSE', '$haha')";
  	mysqli_query($db, $query_75);   
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 19 table
     $query_75 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_19', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_75);  
    //Insert data into  answer table
  	 $query_76 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_54', 'FALSE', '$haha')";
  	mysqli_query($db, $query_76);

    //Insert data into  answer table
    $query_77 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_55', 'FALSE', '$haha')";
  	mysqli_query($db, $query_78);

    //Insert data into  answer table
    $query_78= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_56', 'FALSE', '$haha')";
  	mysqli_query($db, $query_78);   
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 20 table
     $query_79 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_20', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_79); 
     //Insert data into  answer table
  	 $query_80 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_57', 'FALSE', '$haha')";
  	mysqli_query($db, $query_76);

    //Insert data into  answer table
    $query_81 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_58', 'FALSE', '$haha')";
  	mysqli_query($db, $query_78);

    //Insert data into  answer table
    $query_82= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_59', 'FALSE', '$haha')";
  	mysqli_query($db, $query_82);  
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 21 table
     $query_83 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_21', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_83); 
     //Insert data into  answer table
  	 $query_84 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_60', 'FALSE', '$haha')";
  	mysqli_query($db, $query_84);

    //Insert data into  answer table
    $query_85 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_61', 'FALSE', '$haha')";
  	mysqli_query($db, $query_85);

    //Insert data into  answer table
    $query_86= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_62', 'FALSE', '$haha')";
  	mysqli_query($db, $query_86);  
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 22 table
    
     $query_87 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_22', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_87); 
     //Insert data into  answer table
  	 $query_88 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_63', 'FALSE', '$haha')";
  	mysqli_query($db, $query_88);

    //Insert data into  answer table
    $query_89 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_64', 'FALSE', '$haha')";
  	mysqli_query($db, $query_89);

    //Insert data into  answer table
    $query_90= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_65', 'FALSE', '$haha')";
  	mysqli_query($db, $query_90);               
     ////////////////////////////////////////////////////////////
    //Insert data into  answer  question 23 table
      $query_99 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_23', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_99); 
     //Insert data into  answer table
  	 $query_100 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_66', 'FALSE', '$haha')";
  	mysqli_query($db, $query_100);

    //Insert data into  answer table
    $query_101 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_67', 'FALSE', '$haha')";
  	mysqli_query($db, $query_101);

    //Insert data into  answer table
    $query_102= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_68', 'FALSE', '$haha')";
  	mysqli_query($db, $query_102);
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 24 table
    
    $query_103 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_24', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_103); 
     //Insert data into  answer table
  	 $query_104 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_69', 'FALSE', '$haha')";
  	mysqli_query($db, $query_104);

    //Insert data into  answer table
    $query_105 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_70', 'FALSE', '$haha')";
  	mysqli_query($db, $query_105);

    //Insert data into  answer table
    $query_106= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_71', 'FALSE', '$haha')";
  	mysqli_query($db, $query_106);
                 
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 25 table
    
     $query_107 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_25', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_107); 
     //Insert data into  answer table
  	 $query_108 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_72', 'FALSE', '$haha')";
  	mysqli_query($db, $query_108);

    //Insert data into  answer table
    $query_109 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_73', 'FALSE', '$haha')";
  	mysqli_query($db, $query_109);

    //Insert data into  answer table
    $query_110= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_74', 'FALSE', '$haha')";
  	mysqli_query($db, $query_110);
    
                 
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 26 table
    $query_111 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_26', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_111); 
     //Insert data into  answer table
  	 $query_112 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_75', 'FALSE', '$haha')";
  	mysqli_query($db, $query_112);

    //Insert data into  answer table
    $query_113 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_76', 'FALSE', '$haha')";
  	mysqli_query($db, $query_113);

    //Insert data into  answer table
    $query_114= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_77', 'FALSE', '$haha')";
  	mysqli_query($db, $query_114);
    
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 27 table
          $query_115 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_27', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_115); 
     //Insert data into  answer table
  	 $query_116 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_78', 'FALSE', '$haha')";
  	mysqli_query($db, $query_116);

    //Insert data into  answer table
    $query_117 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_79', 'FALSE', '$haha')";
  	mysqli_query($db, $query_117);

    //Insert data into  answer table
    $query_118= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_80', 'FALSE', '$haha')";
  	mysqli_query($db, $query_118);
           
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 28 table
          $query_119 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_28', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_119); 
     //Insert data into  answer table
  	 $query_120 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_81', 'FALSE', '$haha')";
  	mysqli_query($db, $query_120);

    //Insert data into  answer table
    $query_121 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_82', 'FALSE', '$haha')";
  	mysqli_query($db, $query_121);

    //Insert data into  answer table
    $query_122= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_83', 'FALSE', '$haha')";
  	mysqli_query($db, $query_122);
           
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 29 table
       $query_123 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_29', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_107); 
     //Insert data into  answer table
  	 $query_124 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_84', 'FALSE', '$haha')";
  	mysqli_query($db, $query_124);

    //Insert data into  answer table
    $query_125 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_85', 'FALSE', '$haha')";
  	mysqli_query($db, $query_125);

    //Insert data into  answer table
    $query_126= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_86', 'FALSE', '$haha')";
  	mysqli_query($db, $query_126);
              
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 30 table
        $query_127 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_30', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_127); 
     //Insert data into  answer table
  	 $query_128 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_87', 'FALSE', '$haha')";
  	mysqli_query($db, $query_128);

    //Insert data into  answer table
    $query_129 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_88', 'FALSE', '$haha')";
  	mysqli_query($db, $query_129);

    //Insert data into  answer table
    $query_130= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_89', 'FALSE', '$haha')";
  	mysqli_query($db, $query_130);
             
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 31 table
             $query_131 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_31', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_131); 
     //Insert data into  answer table
  	 $query_132 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_90', 'FALSE', '$haha')";
  	mysqli_query($db, $query_132);

    //Insert data into  answer table
    $query_133 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_91', 'FALSE', '$haha')";
  	mysqli_query($db, $query_133);

    //Insert data into  answer table
    $query_134= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_92', 'FALSE', '$haha')";
  	mysqli_query($db, $query_134);
        
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 32 table
         $query_135 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_32', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_135); 
     //Insert data into  answer table
  	 $query_136 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_93', 'FALSE', '$haha')";
  	mysqli_query($db, $query_136);

    //Insert data into  answer table
    $query_137 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_94', 'FALSE', '$haha')";
  	mysqli_query($db, $query_137);

    //Insert data into  answer table
    $query_138 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_95', 'FALSE', '$haha')";
  	mysqli_query($db, $query_138);
            
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 33 table
          $query_139 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_33', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_139); 
     //Insert data into  answer table
  	 $query_140 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_96', 'FALSE', '$haha')";
  	mysqli_query($db, $query_140);

    //Insert data into  answer table
    $query_141 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_97', 'FALSE', '$haha')";
  	mysqli_query($db, $query_141);

    //Insert data into  answer table
    $query_142= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_98', 'FALSE', '$haha')";
  	mysqli_query($db, $query_142);
           
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 34 table
      $query_143 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_34', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_143); 
     //Insert data into  answer table
  	 $query_144 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_99', 'FALSE', '$haha')";
  	mysqli_query($db, $query_144);

    //Insert data into  answer table
    $query_145 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_100', 'FALSE', '$haha')";
  	mysqli_query($db, $query_145);

    //Insert data into  answer table
    $query_146= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_101', 'FALSE', '$haha')";
  	mysqli_query($db, $query_146);
               
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 35 table
    $query_147 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_35', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_147); 
     //Insert data into  answer table
  	 $query_148 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_102', 'FALSE', '$haha')";
  	mysqli_query($db, $query_148);

    //Insert data into  answer table
    $query_149 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_103', 'FALSE', '$haha')";
  	mysqli_query($db, $query_149);

    //Insert data into  answer table
    $query_150= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_104', 'FALSE', '$haha')";
  	mysqli_query($db, $query_150);
    
                
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 36 table
       $query_151 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_36', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_151); 
     //Insert data into  answer table
  	 $query_152 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_105', 'FALSE', '$haha')";
  	mysqli_query($db, $query_152);

    //Insert data into  answer table
    $query_153 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_106', 'FALSE', '$haha')";
  	mysqli_query($db, $query_153);

    //Insert data into  answer table
    $query_154= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_107', 'FALSE', '$haha')";
  	mysqli_query($db, $query_154);          
                             
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 37 table
        $query_155 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_37', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_155); 
     //Insert data into  answer table
  	 $query_156 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_108', 'FALSE', '$haha')";
  	mysqli_query($db, $query_156);

    //Insert data into  answer table
    $query_157 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_109', 'FALSE', '$haha')";
  	mysqli_query($db, $query_157);

    //Insert data into  answer table
    $query_158= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_110', 'FALSE', '$haha')";
  	mysqli_query($db, $query_158);            
                             
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 38 table
           $query_159 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_38', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_159); 
     //Insert data into  answer table
  	 $query_160 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_111', 'FALSE', '$haha')";
  	mysqli_query($db, $query_160);

    //Insert data into  answer table
    $query_161 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_112', 'FALSE', '$haha')";
  	mysqli_query($db, $query_161);

    //Insert data into  answer table
    $query_162= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_113', 'FALSE', '$haha')";
  	mysqli_query($db, $query_162);        
                             
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 39 table
    $query_163 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_39', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_163); 
     //Insert data into  answer table
  	 $query_164 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_114', 'FALSE', '$haha')";
  	mysqli_query($db, $query_164);

    //Insert data into  answer table
    $query_165 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_115', 'FALSE', '$haha')";
  	mysqli_query($db, $query_165);

    //Insert data into  answer table
    $query_166= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_116', 'FALSE', '$haha')";
  	mysqli_query($db, $query_166);  
    
                
     ////////////////////////////////////////////////////////////
    //Insert data into  answer   question 40 table
    
    $query_167 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_correct_40', 'CORRECT', '$haha')";
  	mysqli_query($db, $query_167); 
     //Insert data into  answer table
  	 $query_168 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_117', 'FALSE', '$haha')";
  	mysqli_query($db, $query_168);

    //Insert data into  answer table
    $query_169 = "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_118', 'FALSE', '$haha')";
  	mysqli_query($db, $query_169);

    //Insert data into  answer table
    $query_170= "INSERT INTO answer (answer_description, answer_correct, question_id) VALUES('$answer_description_119', 'FALSE', '$haha')";
  	mysqli_query($db, $query_170);  
    
    

    
    
   }


?>
