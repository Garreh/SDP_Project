<?php
    //step 1: read the file name(optional)
if(!empty($_FILES['material_video']['name']))
{
	$filename = basename($_FILES['material_video']['name']); //result = abc.jpg

	//second: get the filesize
	$checkfilesize = $_FILES['material_video']['size'];

	//third info: getthe file type
	$getFileType = pathinfo($filename, PATHINFO_EXTENSION); // abc.jpg become jpg

	//fourth: set the destination_video pathfor yourfile upload
	$destination_video = "../../material_img/".$filename; // follow the previous item name

	//check for file size whether more than 1MB
	if($checkfilesize > 10000000)
	{
		echo "<script>alert('Sorry video size more than 10MB. Please choose another pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	//check for file type
	if($getFileType != "avi" && $getFileType != "mov" && $getFileType != "mp4" && $getFileType != "mpg" && $getFileType != "wmv" && $getFileType != "asf")
	{
		echo "<script>alert('Sorry video format is not correct. Please choose another pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}

	//move the file with the function called move_uploaded_file('$source','$destination_video')
	if(!move_uploaded_file($_FILES['material_video']['tmp_name'],$destination_video))
	{
		echo "<script>alert('Technical Problem: video not uploaded!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
}
else
{
	echo "<script>alert('The video is not uploaded!')</script>";
	die("<script>window.history.go(-1);</script>");
}
?>
