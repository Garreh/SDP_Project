<?php
    //step 1: read the file name(optional)
if(!empty($_FILES['upload_post_file']['name']))
{
	$filename = basename($_FILES['upload_post_file']['name']); //result = abc.jpg
	
	//second: get the filesize
	$checkfilesize = $_FILES['upload_post_file']['size'];
	
	//third info: getthe file type
	$getFileType = pathinfo($filename, PATHINFO_EXTENSION); // abc.jpg become jpg
	
	//fourth: set the destination pathfor yourfile upload
	$destination = "../../post_img/".$filename; // follow the previous item name
		
	//check for file size whether more than 1MB
	if($checkfilesize > 2000000)
	{
		echo "<script>alert('Sorry image size more than 2MB. Please choose another pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}	
	//check for file type
	if($getFileType != "jpg" && $getFileType != "jpeg" && $getFileType != "png" && $getFileType != "gif" && $getFileType != "JPG" && $getFileType != "JPEG" && $getFileType != "PNG" && $getFileType != "GIF")
	{
		echo "<script>alert('Sorry image format is not correct. Please choose another pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	
	//move the file with the function called move_uploaded_file('$source','$destination')
	if(!move_uploaded_file($_FILES['upload_post_file']['tmp_name'],$destination))
	{
		echo "<script>alert('Technical Problem: Image not uploaded!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
}
else
{
	echo "<script>alert('The image is not uploaded!')</script>";
	die("<script>window.history.go(-1);</script>");
}
?>