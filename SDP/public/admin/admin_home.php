<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Homepage</title>
<?php include('../../template/header.php');?>
</head>

<body>

<?php include('../../template/adminnav.php');?>
    <center>
      <div class="" style="height:580px; margin-top:10%">
        <div class="home">
          <h1>Welcome Back Admin</h1>
          <div class="container" style="display:table-cell;vertical-align:middle; ">
            <div class="row justify-content-center mt-5">
              <a class="parentid" href="admin_manage_post.php" style="text-decoration:none;">
                <div class="menuitem mr-5" style="vertical-align:middle;height:200px;width:300px;background-color:#212529;border:3px solid #212529;position:relative;border-radius:3px;">
                  <!-- <p><i id="" class="" style="letter-spacing:5px;font-size:3em;color:#fafafa;margin-top:67px;margin-top:2.5em;" ></i></p> -->
                <div id="" style="" class="mt-5">
                  <p style="letter-spacing:5px;margin-top:3.2em;font-size:1.5em;color:#fafafa;">Post </p>
                </div>
                </div>
              </a>
              <a class="parentid" href="admin_manage_teacher.php" style="text-decoration:none;">
                <div class="menuitem ml-5" style="vertical-align:middle;height:200px;width:300px;background-color:#212529;border:3px solid #212529;position:relative;border-radius:3px;">
                  <!-- <p><i id="" class="" style="letter-spacing:5px;font-size:3em;color:#fafafa;margin-top:2.5em;" ></i></p> -->
                <div id="" style="" class="mt-5">
                  <p style="letter-spacing:5px;margin-top:3.2em;font-size:1.5em;color:#fafafa;">Teacher</p>
                </div>
                </div>
              </a>
            </div>
          </div>



        </div>
      </div>

    </center>

<?php include('../../template/adminfooter.php');?>
</body>

</html>
