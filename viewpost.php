<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="viewpost.css" rel="stylesheet" type="text/css"/>


<head>
<link rel = "stylesheet" href="template/main.css"/>

  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'/>
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous">
  </script>

  <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Forcefully remove bootstrap default bg color -->
<style type="text/css">
   body { background: #FAFAFA !important; }
</style>

<script src="template/main.js"></script>


</head>

<body>
<?php session_start();
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3 " style="background-color:#3A3837;font-family:Roboto;">
  <a class="navbar-brand" href="#">History</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family:Roboto;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Discover</a>
      </li>
    </ul>
    <?php if(empty($_SESSION['username'])){ ?>
      <a class="nav-link" href="/SDP/login_page.php" style="text-decoration: none;color:#FFFFFF;">LOGIN</a>
      <a href="/SDP/signup_page.php" class="btn btn-danger btn-rounded">SIGN UP</a>
    <?php }else{ ?>
      <button type="button" name="button" class="btn btn-danger btn-rounded" onclick="logout()">LOGOUT</button>
    <?php } ?>

  </div>
 </nav>
<script type="text/javascript" src="/SDP/javascripts/main.js"></script>



<?php

      $id = $_GET['id'];
      
      include "conn.php";
      
      $sql = "Select * from post where post_id = $id";
      
      $result = mysqli_query($conn, $sql);
      
      /* if(mysqli_num_rows($result<=0))
       {
         echo"<script>alert('No data found in the DB!');</script>";
         die("<script>window.history.go(-1);</script>");
       }
       */
       if($rows = mysqli_fetch_array($result))
       {
         $posttitle = $rows['post_title'];
         $postdesc = $rows['post_description'];
         $postdate = $rows['post_date'];
         $posttype = $rows['post_type'];
          
       }
    /* //<!--Post Image--> 
        echo"<div class='col-lg-6'>";
         echo"<div class='details_image'>";
           echo"<div class='details_image_large'><img src='".$rows['post_file']."' width='100%'/>"; */
       
       //<!--Post Detail-->
       echo"<div id='container'>";
	    echo"<div id='header'>";
	      echo $posttitle;
          echo"</div>";
	      echo"<br/>";
          echo"<div id='content-area'>";
          echo"</div>";
          echo"<br/>";
          echo"<div id='page-content'>";
          echo $postdesc;
          echo "<br/>";
          echo "<br/>";
          echo "<hr />";
          echo $postdate;
          echo"</div>";
          echo"</div>";


            
        



?>
</body>

<!-- Footer -->
<footer class="page-footer font-small unique-color-light pt-4" style="background-color:#3A3837;">

    <!-- Footer Elements -->
    <div class="container">
        <ul class="list-unstyled list-inline text-center py-2">
          <li class="list-inline-item">
            <h5 class="mb-1" style="color:#FFFFFF;">Register for free</h5>
          </li>
          <li class="list-inline-item">
              <a href="/SDP/signup_page.php" class="btn btn-danger btn-rounded">SIGN UP</a>
          </li>
        </ul>
    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color:#FFFFFF;">© 2019 Copyright:
      <a href=""> IMRAN's Group.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


</html>
