<?php

//$title = $_POST['title'];
$info = $_POST['info'];

include "postfileupload.php";

include "conn.php";

$sql = "INSERT INTO posts(post_title,post_description,post_file) VALUES".
"('$postitle','$postdesc','$destination');";

mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)<= 0)
{
 die("<script>alert('error in db connection!');window.history.go(-1);</script>");
}

echo"<script>alert('insert success!');window.location.href='viewproduct.php';</script>";
?>
 