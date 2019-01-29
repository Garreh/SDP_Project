<?php 
session_start();
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3 " style="background-color:#3A3837;font-family:Roboto;">
  <a class="navbar-brand" href="#">History</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family:Roboto;">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo ($page == "home" ? "active" : "")?>">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item <?php echo ($page == "post" ? "active" : "")?>">
            <a class="nav-link" href="#">Post</a>
        </li>
        <li class="nav-item <?php echo ($page == "my_post" ? "active" : "")?>">
             <div class="btn-group">
              <button type="button" style="background-color:inherit; border:none;" class="btn btn-primary nav-link">My Post</button>
              <button type="button" style="background-color:inherit; border:none;" class="btn btn-primary dropdown-toggle dropdown-toggle-split nav-link" data-toggle="dropdown">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Material</a>
                <a class="dropdown-item" href="#">Quiz</a>
                <a class="dropdown-item" href="#">Test</a>
              </div>
            </div>  
        </li>
        <li class="nav-item <?php echo ($page == "group" ? "active" : "")?>">
            <a class="nav-link" href="teacher_view_group.php">Private Group</a>
        </li>
        <li class="nav-item <?php echo ($page == "discover" ? "active" : "")?>">
            <a class="nav-link" href="#">Discover</a>
        </li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" style="margin-right: 10px; border-radius:0;">
           <img src="img/search_icon.png" alt="Search icon" height="22" width="22"/>
          </button>
        </div>
      </div>
    </form> 
        <?php if(empty($_SESSION['teacher'])){ ?>
      <a class="nav-link" href="/SDP/login_page.php" style="text-decoration: none;color:#FFFFFF;">LOGIN</a>
      <a href="/SDP/signup_page.php" class="btn btn-danger btn-rounded">SIGN UP</a>
    <?php }else{ ?>
      <button type="button" name="button" class="btn btn-danger btn-rounded" onclick="location.href='../logout.php'">LOGOUT</button>
    <?php } ?>

  </div>

</nav>
