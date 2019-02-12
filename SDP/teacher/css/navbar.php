
<nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3 " style="background-color:#3A3837;font-family:Roboto;">
  <a class="navbar-brand" href="#">History</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family:Roboto;">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo ($page == "home" ? "active" : "")?>">
            <a class="nav-link" href="home_page.php">Home</a>
        </li>
        <li class="nav-item <?php echo ($page == "post" ? "active" : "")?>">
            <a class="nav-link" href="teacher_view_post.php">Post</a>
        </li>
        <li class="nav-item <?php echo ($page == "my_post" ? "active" : "")?>">
             <a class="nav-link" href="teacher_my_post.php">My Post</a>
        </li>
        <li class="nav-item <?php echo ($page == "group" ? "active" : "")?>">
            <a class="nav-link" href="teacher_view_group.php">Private Group</a>
        </li>
    </ul>
    
        <?php if(empty($_SESSION['teacher'])){ ?>
      <a class="nav-link" href="/SDP/login_page.php" style="text-decoration: none;color:#FFFFFF;">LOGIN</a>
      <a href="/SDP/signup_page.php" class="btn btn-danger btn-rounded">SIGN UP</a>
    <?php }else{ ?>
      <button type="button" class="btn text-white" style="background-color: inherit" onclick="location.href='teacher_profile.php'">User Profile</button>
      <button type="button" name="button" class="btn btn-danger btn-rounded" onclick="location.href='../logout.php'">LOGOUT</button>
    <?php } ?>

  </div>

</nav>
