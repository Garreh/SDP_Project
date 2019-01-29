<!DOCTYPE html>
<html lang="en">
    
<head>
    
  <title>Create Question</title>
   <?php
    $page = "post";
    include ("css/header.php") ?>
  

    </head>
<body>
     <?php include ("css/navbar.php") ?>
    
<div class="container" id="quizContainer">
<form method="post" action="back/insert_question_topic_answer.php">
    <div class="title" style="margin-bottom: 50px; font-size:30px; padding-top:20px;"><strong>Create Quiz</strong></div>
    
    <input type="text" class="form-control" name="quiz_title" style="margin-bottom: 50px;" placeholder="Quiz Title">
    
    <input type="text" class="form-control" name="quiz_description" style="margin-bottom: 40px;" placeholder="Quiz Description">

    
    <!-- Question 1 !-->
     <div class="form-group">
      <label for="question1" style="font-size:25px;"><strong>Question 1 :</strong></label>
      
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description_correct">
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
  
    
    
    <!-- Question 2 !
    <div class="form-group">
        <label for="question1" style="font-size:25px;"><strong>Question 2 :</strong></label>

      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?" name="question1">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text" style="margin-bottom: 50px;" class="form-control" id="answer_description" placeholder="Answer 4" name="ans4">
         
    </div>
    
        <!-- Question 3 !
    <div class="form-group">
        <label for="question1" style="font-size:25px;"><strong>Question 3 :</strong></label>
             <input type="text" class="form-control" id="quiz_title" name="quiz_title" placeholder="Quiz Title">
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?" name="question1">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="answer_description" placeholder="Answer 4" name="ans4">
    </div>
    
    
        <!-- Question 4 !

    <div class="form-group">
        <label for="question1" style="font-size:25px;"><strong>Question 4 :</strong></label>
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?" name="question1">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 4" name="answer_description">
    </div>
    
        <!-- Question 5 !

    <div class="form-group">
        <label for="question1" style="font-size:25px;"><strong>Question 5 :</strong></label>
           
      <input type="text" class="form-control" id="qtion" name="question_topic" placeholder="What is your question?" name="question1">
    </div>
    <div class="form-group">
      <label for="ans">Answer A</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 1" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer B</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 2" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer C</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 3" name="answer_description">
    </div>
    
     <div class="form-group">
      <label for="ans">Answer D</label>
      <input type="text" class="form-control" id="ans" placeholder="Answer 4" name="answer_description">
    </div>
    -->
        <button type="submit" style="margin-bottom: 50px;" name="submit_question" class="btn btn-primary">Submit</button>
</form>  
  
</div>
    <?php include ("css/footer.php") ?>
</body>
</html>





<!-- <div class="form-group">
      <label for="ans">Correct Answer :</label>
      <input type="text"  style="margin-bottom: 50px;" class="form-control" id="ans" placeholder="Answer" name="real_ans_5">
    </div> !-->

  <!--<label class="option"><input type="radio" name="option" value="1" />Feel in the answer <span id="option1"></span></label>
    <label class="option"><input type="radio" name="option" value="1" /> <span id="option2"></span></label>
    <label class="option"><input type="radio" name="option" value="1" /> <span id="option3"></span></label>
    <label class="option"><input type="radio" name="option" value="1" /> <span id="option4"></span></label> !-->



<!--<div id="result" class="container result" style="display:none"
 ></div> !-->