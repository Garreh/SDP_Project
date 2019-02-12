<?php

//$title = $_POST['title'];
/* if(!isset($_SESSION['user']))
  {
     
   <li><a href="login.php">Login</a></li>
									 
  } 
									 
 elseif(isset($_SESSION['user'])) { */
$comment = $_POST['comment'];

include "conn.php";

$sql = "INSERT INTO comment(comment) VALUES".
"('$comment');";

mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)<= 0)
{
 die("<script>alert('error in db connection!');window.history.go(-1);</script>");
}

echo"<script>alert('insert success!');window.location.href='comment.php';</script>";
//}
?>
