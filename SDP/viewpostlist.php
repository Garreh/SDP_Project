<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "template/header.php"; ?>
<link href="viewpostlist.css" rel="stylesheet" type="text/css"/>
<title>Post List</title>
</head>

<body>
<?php
    include "conn.php";
    session_start();
    $page = "post";
    include "template/navbar.php";
?>

<script type="text/javascript" src="/SDP/javascripts/main.js"></script>

<!--Post -->
 <div class="post">
  <div class="container" style='margin-top: 2%;margin-bottom:15%;width:35%;color:black;'>
      <center><h1>Post List</h1></center>
      <br>
			<div class="row">
				<div class="col">

					<div class="product_griqd">



               <?php


                  $sql = "Select * from post inner join teacher on post.teacher_id = teacher.teacher_id WHERE post_type = 'PUBLIC' ORDER BY post_id DESC";


                  $result = mysqli_query($conn, $sql);

                   if(mysqli_num_rows($result) <= 0)
                    {
                      die("<script>alert('No result from table package');</script>");

                    }

                    while($rows = mysqli_fetch_array($result))
                     {
                        $post_file = $rows['post_picture'];

                            if(is_null($post_file))
                            {
                              echo"<div class='row p-2 pt-3' style='background-color:#f8f9fa;border-radius:5px;color:black'>";
                              echo"<div class='col-6'style='width:100%;height:200px'>";
                              echo"<a href='student/post_detail.php?post_id=".$rows['post_id']."'><img src='post_img/default.png' width='290' height='190'style=' border-radius:5px;padding-top:3px;' /></a>";
                              echo"</div>";
                              echo"<div class='col p-3' style='color:white;' >";
                              echo"<i class='text-muted' >".$rows['post_date']."</i>";
                              echo"<br><br>";
                              echo"<b style='color:black'>".$rows['post_title']."</b>";
                              echo"<br><br><br><br>";
                              echo"<i class='text-muted'>".$rows['first_name']." ".$rows['last_name']."</i>";
                              echo"</div>";
                              echo"</div><br />";



                            }
                            else
                            {
                              echo"<div class='row p-2 pt-3' style='background-color:#f8f9fa;border-radius:5px;color:black '>";
                              echo"<div class='col-6'style='width:100%;height:200px'>";
                              echo"<a href='student/post_detail.php?post_id=".$rows['post_id']."'><img src='".substr($rows['post_picture'],3)."' width='290' height='190'style=' border-radius:5px;padding-top:3px;' /></a>";
                              echo"</div>";
                              echo"<div class='col p-3' style='color:white;' >";
                              echo"<i class='text-muted' >".$rows['post_date']."</i>";
                              echo"<br><br>";
                              echo"<b style='color:black'>".$rows['post_title']."</b>";
                              echo"<br><br><br><br>";
                              echo"<i class='text-muted'>".$rows['first_name']." ".$rows['last_name']."</i>";
                              echo"</div>";
                              echo"</div><br />";

                            }
					  }
				 ?>


     </div>
    </div>
   </div>
  </div>
 </div>

    <?php
        include "template/footer.php";
    ?>
</body>

</html>
