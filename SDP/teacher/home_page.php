<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <?php
    session_start();
    include "css/header.php";
    ?>

</head>

<body>
    <?php
    $page = "home";
    include "css/navbar.php";

    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        include "back/conn.php";
        $teacher = $_SESSION['teacher'];
        $query = "SELECT * FROM teacher WHERE teacher_username = '$teacher'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $teacher_id = $row['teacher_id'];
        }
    }
    ?>

    <br>
    <div class="container">
      <div class="card" style="background-color:transparent;border:none;">
        <div class="card-body text-center title">
          Learn History
        </div>
      </div>
      <div class="" style="height:400px;background-color:black">
        <img src="../post_img/default.png" width="100%" height="400px"alt="">
      </div>
    </div>


    <div class="container " style="height:500px;">




  <br>

  <div class="card-deck">
    <?php

       include "back/conn.php";



       $sql = "Select * from post WHERE post_type = 'PUBLIC' ORDER BY RAND() LIMIT 3 ";


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

                     echo"<div class='card'style='background-color:transparent;margin-right:180px;'>";
                     echo"<a href='post_detail.php?post_id=".$rows['post_id']."'><img src='../post_img/default.png' width='350' height='200' /><a/>";
                     echo"</div>";
                 }
                 else
                 {
                     echo"<div class='card'style='height:200px;width:200px; margin-right:180px;border:none;background-color:transparent;'>";
                     echo"<a href='post_detail.php?post_id=".$rows['post_id']."'><img src='".$rows['post_picture']."' width='350' height='200'  /><a/>";
                     echo"</div>";

                 }
  }
  ?>
</div>

</div>

<div class="" style="background-color:#3A3837;padding:15px">
  <center>
    <div class="title" style="color:#f8f9fa;">
      Latest Posts
    </div>
    <br>
    <div class='container' style="width:80%">
      <div class='card-deck'>
        <?php

           include "back/conn.php";



           $sql = "Select * from post inner join teacher on post.teacher_id = teacher.teacher_id WHERE post_type = 'PUBLIC' ORDER BY post_id DESC LIMIT 4 ";


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
                      echo"<div class='card'>";
                      echo"<a href='post_detail.php?post_id=".$rows['post_id']."'><img class='card-img-top' src='../post_img/default.png'  width='200' height='150'  ><a/>";
                      echo"<div class='card-body'>";
                      echo"<p style='color:#6c757d!important'>".$rows['post_date']."</p>";
                      echo"<p><b>".$rows['post_title']."</b></p>";
                      echo"<br><br>";
                      echo"<p style='color:#6c757d!important'>".$rows['first_name']." ".$rows['last_name']."</p>";
                      echo"</div>";
                      echo"</div>";
                     }
                     else
                     {
                         echo"<div class='card'>";
                         echo"<a href='post_detail.php?post_id=".$rows['post_id']."'><img class='card-img-top' src='".$rows['post_picture']."'  width='200' height='150' ><a/>";
                         echo"<div class='card-body'>";
                         echo"<p style='color:#6c757d!important'>".$rows['post_date']."</p>";
                         echo"<p><b>".$rows['post_title']."</b></p>";
                         echo"<br><br>";
                         echo"<p style='color:#6c757d!important'>".$rows['first_name']." ".$rows['last_name']."</p>";
                         echo"</div>";
                         echo"</div>";
                     }
      }
      ?>

      </div>
      <br>
      <br>
    </div>
  </center>
</div>
<!--Post -->
 <div class="post">
  <div class="container" style='margin-top: 2%;margin-bottom:15%;width:35%; color:black;'>

      <br>
			<div class="row">
				<div class="col">

					<div class="product_griqd">



               <?php


                  $sql = "Select * from post inner join teacher on post.teacher_id = teacher.teacher_id WHERE post_type = 'PUBLIC' ORDER BY post_id DESC Limit 5";


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
                              echo"<div class='row p-2 pt-3' style='background-color:#f8f9fa;border-radius:5px;'>";
                              echo"<div class='col-6'style='width:100%;height:200px'>";
                              echo"<a href='post_detail.php?post_id=".$rows['post_id']."'><img src='../post_img/default.png' width='290' height='190'style=' border-radius:5px;padding-top:3px;border:1px solid #f8f9fa' /></a>";
                              echo"</div>";
                              echo"<div class='col p-3' style='color:white;' >";
                              echo"<i class='text-muted' >".$rows['post_date']."</i>";
                              echo"<br><br>";
                              echo"<b style='color:black;'>".$rows['post_title']."</b>";
                              echo"<br><br><br><br>";
                              echo"<i class='text-muted'>".$rows['first_name']." ".$rows['last_name']."</i>";
                              echo"</div>";
                              echo"</div><br />";



                            }
                            else
                            {
                              echo"<div class='row p-2 pt-3' style='background-color:#f8f9fa;border-radius:5px;'>";
                              echo"<div class='col-6'style='width:100%;height:200px'>";
                              echo"<a href='post_detail.php?post_id=".$rows['post_id']."'><img src='".$rows['post_picture']."' width='290' height='190'style=' border-radius:5px;padding-top:3px;border:1px solid #f8f9fa' /></a>";
                              echo"</div>";
                              echo"<div class='col p-3' style='color:white;' >";
                              echo"<i class='text-muted' >".$rows['post_date']."</i>";
                              echo"<br><br>";
                              echo"<b style='color:black;'>".$rows['post_title']."</b>";
                              echo"<br><br><br><br>";
                              echo"<i class='text-muted'>".$rows['first_name']." ".$rows['last_name']."</i>";
                              echo"</div>";
                              echo"</div><br />";

                            }
					  }
				 ?>
         <!-- echo"<div class='post'>";
         echo"<div class='post_desc'>";
         echo "<div class='product_title'><a href='post_detail.php?post_id=".$rows['post_id']."'><img src='../post_img/default.png' width='20%' height='10%'/><br/>".$rows['post_title']."</a></div>";
         echo"</div>";
         echo"</div><hr/>"; -->

         <!-- echo"<div class='post'>";
         echo"<div class='post_desc'>";
         echo "<div class='product_title'><a href='post_detail.php?post_id=".$rows['post_id']."'><img src='".$rows['post_picture']."' width='20%' height='10%'/><br/>".$rows['post_title']."</a></div>";
         echo"</div>";
         echo"</div><hr/>"; -->

     </div>
    </div>
   </div>
  </div>
 </div>

    <?php include "css/footer.php"; ?>
</body>

</html>
