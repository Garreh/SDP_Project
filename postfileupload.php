<?php
    //step 1: read the file name(optional)
    $filename = basename($_FILES['uploadpostfile']['name']); //result = abc.jpg
    
    //step 2: get the file size
    $checkfilesize = $_FILES['uploadpostfile']['size'];
    
    //step 3:get the file type
    $getFileType = pathinfo($filename,PATHINFO_EXTENSION); //abc.jpg become jpg
    
    //step 4: set the destination path for your file upload
    $destination = "createpost/".$filename;  //follow the previous item name
    
    //extra: if you want to change the item name:
    //e.g. $destination = "profile/".$ic.".".$getFileType;
    
    //check for filesize whether more than 1MB
    if($checkfilesize > 100000000)
    {
         echo"<script>alert('Sorry file more than 10MB. Please choose others pic!');</script>";
         die("<script>window.history.go(-1);</script>");
    }
    
    //check for the file type
    if($getFileType != "jpg" && $getFileType !="jpeg" && $getFileType !="JPG" && $getFileType != "PNG"
    && $getFileType != "png" && $getFileType !="gif" && $getFileType !="docx" && $getFileType !="pptx" && $getFileType !="pdf")
    {
         echo"<script>alert('Sorry file is not correct. Please choose other pic!');</script>";
         //die("<script>window.history.go(-1);</script>");
         echo $sql;
    }
    
    //move the file with the function called move_uploaded_file('$source','$destination')
    if(!move_uploaded_file($_FILES['uploadpostfile']['tmp_name'], $destination))
    {
         echo"<script>alert('Technical Problem, Please choose another picture!');</script>";
         die("<script>window.history.go(-1);</script>");
    }
         
    echo"<script>alert('Congratz, file is uploaded');</script>";
?>