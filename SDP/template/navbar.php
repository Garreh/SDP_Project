<nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3 " style="background-color:#3A3837;font-family:Roboto;">
  <a class="navbar-brand" href="home_page.php">History</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family:Roboto;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home_page.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewpostlist.php">Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="discover.php">Discover</a>
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
