<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Comments</title>
</head>

<body>
<h1>Comments</h1>
<?php /*

$id = $_GET['id'];

include "conn.php";
      
 $sql = "Select * from comemnt where post_id = $id";
      
 $result = mysqli_query($conn, $sql);


if($rows = mysqli_fetch_array($result))
{       

?>
<div class="comment">
By: <?php 

/*if ($rows['student_id'] )
{
echo"<p>";
echo $rows['comment']; 
echo"</p>"; }


if ($rows['teacher_id'] )
{
echo"<p>";
echo $rows['comment']; 
echo"</p>"; } 

echo "</div>";
} */
?>
<h1>Leave a comment:</h1>
<form action="uploadcomment.php" method="post">
<table align="center">

 <textarea name="comment" placeholder="Write..." rows="4" cols="50"></textarea>
 <br/>
<input type="submit" />
</table>
</form>
</div>
</body>

</html>
