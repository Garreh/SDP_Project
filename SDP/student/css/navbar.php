<nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3 " style="background-color:#3A3837;font-family:Roboto;">
  <a class="navbar-brand" href="home_page.php">History</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family:Roboto;">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo ($page == "home" ? "active" : "")?>">
            <a class="nav-link" href="home_page.php">Home</a>
        </li>
        <li class="nav-item">
            <div class="btn-group">
              <button type="button" style="background-color:inherit; border:none;" class="btn btn-primary nav-link <?php echo ($page == "post" ? "active" : "")?>" onclick="location.href='viewpostlist.php'">Post</button>
              <button type="button" style="background-color:inherit; border:none;" class="btn btn-primary dropdown-toggle dropdown-toggle-split nav-link" data-toggle="dropdown">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item <?php echo ($page == "accessed" ? "active" : "")?>" href="student_view_accessed_post.php">Accessed</a>
                <!-- <a class="dropdown-item <?php echo ($page == "result" ? "active" : "")?>" href="student_view_result.php">My Result</a> -->
              </div>
            </div>
        </li>
        <li class="nav-item <?php echo ($page == "group" ? "active" : "")?>">
            <a class="nav-link" href="student_view_group.php">Private Group</a>
        </li>
        <li class="nav-item <?php echo ($page == "discover" ? "active" : "")?>">
            <a class="nav-link" href="discover.php">Discover</a>
        </li>
    </ul>

        <?php if(empty($_SESSION['student'])){ ?>
      <a class="nav-link" href="/SDP/login_page.php" style="text-decoration: none;color:#FFFFFF;">LOGIN</a>
      <a href="/SDP/signup_page.php" class="btn btn-danger btn-rounded">SIGN UP</a>
    <?php }else{ ?>
      <button type="button" class="btn text-white" style="background-color: inherit" onclick="location.href='student_profile.php'">User Profile</button>
      <button type="button" class="btn btn-danger btn-rounded" onclick="location.href='../logout.php'">LOGOUT</button>
    <?php } ?>

  </div>

</nav>
