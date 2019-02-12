<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Create Post</title>
<?php include "css/header.php"; session_start(); ?>
<style type="text/css">
    .file-this:hover{
        cursor: pointer;
    } 
</style>
</head>

<body>

    
<?php 
    $page = "my_post";
    include "css/navbar.php";    
?>

<center>
<div class="container-fluid w-50" style="margin-top:3%;margin-bottom:10%;">

    <form method="post" action="back/insert_post.php" enctype="multipart/form-data">

        <label>Post Title</label>
        <input type="text" name="post_title" class="form-control w-50" placeholder="Enter Post Title..." required="required"/>
        <br/>
        
        <label>Post description</label>
        <textarea name="post_desc" required="required" class="form-control w-50" placeholder="Write..." rows="4" cols="50"></textarea>
        <br/>
        <input type="file" class="w-25 file-this small" name="upload_post_file"/>
        <br/>
        <br/>
    
        <input type="submit" class="btn btn-success w-25" value="Create"/>
        
    </form>
    
</div>
</center>
<?php include "css/footer.php" ?>
</body>

</html>
