<!DOCTYPE html>
<html lang="en">
    
<head>
    
  <title>Create Test Question</title>
   <?php
    $page = "post";
    include ("header.php") ?>
  

    </head>
<body>
     <?php include ("footer.php") ?>
     <?php include ("navbar.php") ?>
    
<div class="container" id="quizContainer">
<form method="post" action="insert_exam_answer.php">
    <div class="title" style="margin-bottom: 50px; font-size:30px; padding-top:20px;"><strong>Create Test</strong></div>
    
    <input type="text" class="form-control" name="test_title" style="margin-bottom: 50px;" placeholder="Test Title">
    
    <input type="text" class="form-control" name="test_description" style="margin-bottom: 40px;" placeholder="Test Description">

    
    <!-- Question 1 !-->
     <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 1 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
    
    <!-- Question 2 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 2 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_4">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_5">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_6">
    </div>
    
    <!-- Question 3 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 3 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_3">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_7">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_8">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_9">
    </div>
    
    <!-- Question 4 !-->
    
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 4 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_4">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_10">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_11">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_12">
    </div>
    
    <!-- Question 5 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 5 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_5">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_13">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_14">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_15">
    </div>
    
    <!-- Question 6 !-->
    
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 6 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_6">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_16">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_17">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_18">
    </div>
    
    <!-- Question  7 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 7 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_7">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_19">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_20">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_21">
    </div>
    
    <!-- Question 8 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 8 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_8">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_22">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_23">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_24">
    </div>
    
     <!-- Question 9 !-->
    
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 9 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_9">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_25">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_26">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_27">
    </div>
     <!-- Question 10 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 10 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_10">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_28">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_29">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_30">
    </div>
     <!-- Question 11 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 11 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_11">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_31">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_32">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_33">
    </div>
     <!-- Question 12 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 12 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_12">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_34">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_35">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_36">
    </div>
     <!-- Question 13 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 13 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_13">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_37">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_38">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_39">
    </div>
     <!-- Question 14 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 14 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_14">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_41">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_42">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_43">
    </div>
     <!-- Question 15 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 15 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_15">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_44">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_45">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_46">
    </div>
     <!-- Question 16 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 16 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_16">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 17 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 17 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_17">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 18 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 18 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_18">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 19 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 19 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_19">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 20 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 20 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_20">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 21 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 21 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_21">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 22 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 22 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_22">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 23 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 23 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_23">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 24 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 24 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_24">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 25 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 25 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_25">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 26 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 26 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_26">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 27 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 27 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_27">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 28 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 28 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_28">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 29 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 29 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_29">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 30 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 30 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_30">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 31 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 31 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_31">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 32 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 32 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_32">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 33 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 33 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_33">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 34 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 34 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_34">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 35 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 35 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_35">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 36 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 36 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_36">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 37 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 37 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_37">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 38 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 38 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_38">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 39 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 39 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_39">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
     <!-- Question 40 !-->
    <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 40 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct_40">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description_1">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description_2">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer 4" name="answer_description_3">
    </div>
  
    
    <button type="submit" style="margin-bottom: 50px;" name="submit_question_test" class="btn btn-primary">Submit</button>
</form>  
  
</div>
    
</body>
</html>
