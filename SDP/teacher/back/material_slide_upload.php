<?php
    //step 1: read the file name(optional)
if(!empty($_FILES['material_side']['name']))
{
	$filename = basename($_FILES['material_slide']['name']); //result = abc.jpg

	//second: get the filesize
	$checkfilesize = $_FILES['material_slide']['size'];

	//third info: getthe file type
	$getFileType = pathinfo($filename, PATHINFO_EXTENSION); // abc.jpg become jpg

	//fourth: set the destination_slide pathfor yourfile upload
	$destination_slide = "../../material_img/".$filename; // follow the previous item name

	//check for file size whether more than 1MB
	if($checkfilesize > 10000000)
	{
		echo "<script>alert('Sorry slide size more than 10MB. Please choose another slide!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	//check for file type
	if($getFileType != "pptx" && $getFileType != "pptm" && $getFileType != "ppt" && $getFileType != "pdf" && $getFileType != "xps")
	{
		echo "<script>alert('Sorry slide format is not correct. Please choose another pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}

	//move the file with the function called move_uploaded_file('$source','$destination_slide')
	if(!move_uploaded_file($_FILES['material_slide']['tmp_name'],$destination_slide))
	{
		echo "<script>alert('Technical Problem: slide not uploaded!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
}
else
{
	echo "<script>alert('The slide is not uploaded!')</script>";
	die("<script>window.history.go(-1);</script>");
}
?>
