<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="viewpostlist.css" rel="stylesheet" type="text/css"/>



<head>
<?php include "css/header.php"; ?>
<link href="viewpostlist.css" rel="stylesheet" type="text/css"/>
<title>Post List</title>
</head>

<body>
<?php 
    
    $page = "post";
    include "css/navbar.php";
?>

<script type="text/javascript" src="/SDP/javascripts/main.js"></script>

<!--Post -->
 <div class="post">
  <div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Product Sorting -->
					<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
						<div class="results">Showing <span></span> results</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_griqd">
				<center>	
		

               <?php 
                
                  include "back/conn.php";
                  
                  
                  
                  $sql = "Select * from post WHERE post_type = 'PUBLIC' ORDER BY post_id";
                  
         
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
                                  echo "<div class='post_image'><img src='../post_img/default.png' width='20%' height='10%'/></div>";
                                    echo"<div class='post_desc'>";
                                      echo "<div class='product_title'><a href='viewpost.php?id=".$rows['post_id']."'>".$rows['post_title']."</a></div>";
                                     echo"</div>";
                                 echo"</div>";
                            }
                            else
                            {
                                 echo"<div class='post'>";
                                  echo "<div class='post_image'><img src='".$rows['post_picture']."' width='100%'/></div>";
                                    echo"<div class='post_desc'>";
                                      echo "<div class='product_title'><a href='viewpost.php?id=".$rows['post_id']."'>".$rows['post_title']."</a></div>";
                                     echo"</div>";
                                 echo"</div>";
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
