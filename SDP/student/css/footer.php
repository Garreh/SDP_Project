<!-- Footer -->
<footer class="page-footer font-small unique-color-light pt-4" style="background-color:#3A3837;">

    <!-- Footer Elements -->
    <div class="container">
      <?php if(isset($_SESSION['student'])){ ?>
        <center>
        <p class="text-primary" style="display:inline-block; font-size:24px;">Welcome Back! Student </p>
        <strong>
            <p class="text-muted" style="display:inline-block; text-decoration:underline; font-size:24px;"><?php echo $_SESSION['student'] ?></p>
        </strong>
        </center>
      <?php }else{ ?>
        <ul class="list-unstyled list-inline text-center py-2">
          <li class="list-inline-item">
            <h5 class="mb-1" style="color:#FFFFFF;">Register for free</h5>
          </li>
          <li class="list-inline-item">
              <a href="/SDP/signuppage.php" class="btn btn-danger btn-rounded">SIGN UP</a>
          </li>
        </ul>
      <?php } ?>
    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color:#FFFFFF;">© 2019 Copyright:
      <a href=""> IMRAN's Group.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
