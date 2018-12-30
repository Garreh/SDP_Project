<!-- Footer -->
<footer class="page-footer font-small unique-color-light pt-4" style="background-color:#3A3837;">

    <!-- Footer Elements -->
    <div class="container">
      <?php if(isset($_SESSION['id'])){ ?>
        <a href="#!" class="btn btn-danger btn-rounded" onclick="">LOGOUT</a>
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
