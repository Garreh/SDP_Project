<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
session_start();
if(!isset($_SESSION['admin']))//admin must always login first
{
	echo "<script>alert('You have not login yet, admin')</script>";
	die("<script>window.location.href='admin_login.php'</script>");
}
?>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="css/admin.css" rel="stylesheet" type="text/css"/>
<title>Are you sure?</title>
</head>

<body>
<center>
<div class="confirm">
<h1>Are You Sure?</h1>
<?php
	//this is the confirmation page when admin want to delete something
	
	//delete the class of the coach in-charging of
	if(isset($_GET['teacher_id']))
	{
		$teacher_id = $_GET['teacher_id'];
		echo "<button onclick=\"window.history.go(-1)\">No</button>";
		echo "<button onclick=\"window.location.href='delete_teacher.php?teacher_id=$teacher_id'\">Yes</button>";
	}
?>
</div>