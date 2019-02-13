<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="viewpostlist.css" rel="stylesheet" type="text/css"/>
<head>
<?php 
    session_start();
    include "css/header.php"; 
?>
<link href="viewpostlist.css" rel="stylesheet" type="text/css"/>
<title>Post List</title>
</head>

<body>
<?php 
    
    $page = "post";
    include "css/navbar.php";
    
    if(!isset($_SESSION['student']))
    {
        echo "<script>alert('You did not login yet! Student')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        include "back/conn.php";
        $student = $_SESSION['student'];
        $query = "SELECT * FROM student WHERE student_username = '$student'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $student_id = $row['student_id'];
        }
    }
?>

<script type="text/javascript" src="/SDP/javascripts/main.js"></script>

<!--Post -->
 <div class="post">
  <div class="container" style='margin-top: 2%;margin-bottom:15%'>
			<center><h1>Post List</h1></center>
			<div class="row">
				<div class="col">
					
					<div class="product_griqd">
				<center>	
		

               <?php 
                
                  include "back/conn.php";
                  
                  
                  
                  $sql = "Select * from post WHERE post_type = 'PUBLIC' ORDER BY post_id DESC";
                  
         
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
                                echo"<div class='post'>";
                                echo"<div class='post_desc'>";
                                echo "<div class='product_title'><a href='post_detail.php?post_id=".$rows['post_id']."'><img src='../post_img/default.png' width='20%' height='10%'/><br/>".$rows['post_title']."</a></div>";
                                echo"</div>";
                                echo"</div><hr/>";
                            }
                            else
                            {
                                echo"<div class='post'>";
                                echo"<div class='post_desc'>";
                                echo "<div class='product_title'><a href='post_detail.php?post_id=".$rows['post_id']."'><img src='".$rows['post_picture']."' width='20%' height='10%'/><br/>".$rows['post_title']."</a></div>";
                                echo"</div>";
                                echo"</div><hr/>";
                            }
					  }
				 ?>
   
        </center>
     </div>
    </div> 
   </div>
  </div>
 </div>
    
    <?php
        include "css/footer.php";
    ?>
</body>

</html>
