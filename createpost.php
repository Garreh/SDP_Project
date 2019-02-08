<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="post.css" rel="stylesheet" type="text/css"/>

<head>
</head>

<body>
<center>
<div class="createpost-body">
<!-- <?php echo $_SESSION['user']; ?>  -->
<form method="post" action="uploadpost.php" enctype="multipart/form-data">

     <th>Post Title</th>
     <input type="text" name="posttitle" required="required"/>
     <th>Post description</th>
     <textarea name="postdesc" required="required" placeholder="Write..." rows="4" cols="50"></textarea>
     <br/>
     <td colspan="2"><center><input type="file" name="uploadpostfile"/></center></td>
     
     <td colspan="2"><br/><center><input type="submit" value="Submit"/>
     &nbsp; &nbsp; <input type="reset" value="Reset"/>
     </center></td>

</form>
</div>
</center>
</body>

</html>
