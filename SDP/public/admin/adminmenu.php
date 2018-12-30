
<html lang="en" dir="ltr">
  <head>
    <?php include('../../template/header.php');?>
    <meta charset="utf-8">
    <title>Admin Menu</title>
    <style media="screen">
    .button
    {
      background-color: #3A3837;
      border: 2px solid #3A3837;
      color: #FFFFFF;
      padding: 10px 24px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius: 3px;
      border:none;
    }

    .button:hover {
      background-color: #FFFFFF;
      color: #3A3837;
    }

    .title
    {
      color: #47525E;
      font-family: Roboto;
      font-size: 40px;
      font-weight: 900;
      line-height: 50px;
      text-align: center;
    }

    </style>
  </head>
  <body>
    <?php include('../../template/navbar.php');?>
    <div class="" style="height:900px; background-color:#F4F4F4; padding-top:5%;">
      <center>
        <div class="container pt-5">
          <div class="row justify-content-around">
            <div class="col">
              <a href="#">
                <img src="../../img/like.png" class="rounded" alt="..." style="  width: 246.13px; height: 246.13px;" >
              </a>
               <br>
               <button type="button" class="button mt-5" style="width:200px">Create New Teacher</button>
            </div>
            <div class="col">
              <a href="#">
                <img src="../../img/like.png" class="rounded" alt="..." style="  width: 246.13px; height: 246.13px;" >
              </a>
               <br>
               <button type="button" class="button mt-5" style="width:200px">Edit or Delete</button>
            </div>
          </div>
        </div>
      </center>
    </div>
  </body>
    <?php include('../../template/footer.php');?>
    <script type="text/javascript" src="javascripts/basic.js"></script>
</html>
