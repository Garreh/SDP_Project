<!DOCTYPE html>
<html lang="en">
    
<head>
<?php 
    session_start(); 
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
  <title>About Us</title>
    <link rel="stylesheet" href="aboutus.css">

  <?php include "css/header.php"; ?>

    </head>
<body>
    <?php $page = "discover"; include "css/navbar.php"; ?>
<style>
 body {
  background-color: rgb(107, 185, 240);
}
    </style>    
        <section class="team">
        <div class="container" style="margin-bottom: 10%;">
            <h1>SPONSORED BY</h1>
            <div class="row">
                <div class="col-md-3  profile text-center">
                    <div class="img-box">
                    <img src="mahathir.jpg" class="img-responsive">
                        <ul>
                       <a href="https://www.facebook.com/TunDrMahathir/?ref=br_rs"><li> <i class="fab fa-facebook"></i></li></a>
                       <a href="https://twitter.com/chedetofficial"><li> <i class="fab fa-twitter"></i></li></a>
                        </ul>
                    </div>
                <h2>Tun Dr. Mahathir bin Mohamad</h2>
                <h3>Prime Minister </h3>
                <p>Tun Dr. Mahathir bin Mohamad is the Prime Minister of Malaysia. He previously served as Prime Minister from 1981 to 2003, making him the office's longest-serving holder. He is chairman of the Pakatan Harapan coalition, as well as a member of the Parliament of Malaysia for the Langkawi constituency in Kedah. </p> 
                </div>
            
            <div class="col-md-3  profile text-center">
                    <div class="img-box">
                    <img src="najib.jpg" class="img-responsive">
                        <ul>
                       <a href="https://www.facebook.com/najibrazak/"><li> <i class="fab fa-facebook"></i></li></a>
                       <a href="https://twitter.com/NajibRazak"><li> <i class="fab fa-twitter"></i></li></a>
                        </ul>
                    </div>
                 
                  <h2>Yang Amat Berhormat Dato’ Sri Mohd Najib bin Tun Haji Abdul Razak</h2>
                <h3>Prime Minister </h3>
                <p>He was the former President of the United Malays National Organisation (UMNO), the leading party in Malaysia's Barisan Nasional (BN) coalition, which maintained control of Malaysia's government as a parliamentary majority for more than sixty years until the coalition's defeat in the 2018 general election.  </p> 
                </div>
                
                <div class="col-md-3  profile text-center">
                    <div class="img-box">
                    <img src="syed.png" class="img-responsive">
                        <ul>
                       <a href="https://www.facebook.com/syed.saddiq.1"><li> <i class="fab fa-facebook"></i></li></a>
                       <a href="https://twitter.com/SyedSaddiq"><li> <i class="fab fa-twitter"></i></li></a>
                        </ul>
                    </div>
                 
                  <h2>Syed Saddiq Syed Abdul Rahman</h2>
                <h3>Minister of Youth and Sports </h3>
                <p>Syed Saddiq is a Malaysian politician and activist. He is the current Minister of Youth and Sports, the Member of Parliament of Muar and the Youth Chief of the Malaysian United Indigenous Party or Parti Pribumi Bersatu Malaysia (BERSATU), a component of Pakatan Harapan (PH) coalition. He is also the youngest ever federal minister in 2018 since Malaysia's independence </p> 
                </div>
                
                
                <div class="col-md-3  profile text-center">
                    <div class="img-box">
                    <img src="sabusabu.jpg" class="img-responsive">
                        <ul>
                       <a href="https://www.facebook.com/mohdsabu1954/"><li> <i class="fab fa-facebook-square"></i></li></a>
                       <a href="https://twitter.com/MSabu_Official"><li> <i class="fab fa-twitter-square"></i></li></a>
                        </ul>
                    </div>
                 
                  <h2>Mohamad bin Sabu</h2>
                <h3>Minister of Defence </h3>
                <p>Mat Sabu was formerly the deputy president of the Pan-Malaysian Islamic Party (PAS). He was elected to the post in 2011, running on a moderate platform against the conservative incumbent Nasharudin Mat Isa. He had previously served as one of the party's vice-presidents.[1] He was the first non-alim elected to the party's leadership or deputy leadership in over 25 years </p> 
                </div>
            
            
            </div>
        </div>
    </section>
    <?php include "css/footer.php"; ?>
</body>
</html>