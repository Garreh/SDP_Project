<?php

session_start();
if(!isset($_SESSION['admin']))//admin must always login first
{
	echo "<script>alert('You have not login yet, admin')</script>";
	die("<script>window.location.href='admin_login.php'</script>");
}

if(!isset($_GET['teacher_id']))//to check if the admin has chosen a coach
{
	echo "<script>alert('You did not select a teacher!')</script>";
	die("<script>window.location.href='admin_manage_teacher.php'</script>");
}
else
{	
	include "conn.php";
	$teacher_id = $_GET['teacher_id']; //delete coach from database
	$sql = "DELETE FROM teacher WHERE teacher_id = '$teacher_id'";
	mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('The teacher details cannot be deleted!')</script>";
		die("<script>window.history.go(-2)</script>");
	}
	else
	{
		die("<script>window.location.href='admin_manage_teacher.php'</script>");
	}
}
?>