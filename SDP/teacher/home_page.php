<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <?php
    session_start();
    include "css/header.php";
    ?>
    
</head>

<body>
    <?php
    $page = "home";
    include "css/navbar.php";
    
    if(!isset($_SESSION['teacher']))
    {
        echo "<script>alert('You did not login yet! Teacher')</script>";
        die("<script>window.location.href='../login_page.php'</script>");
    }
    else
    {
        include "back/conn.php";
        $teacher = $_SESSION['teacher'];
        $query = "SELECT * FROM teacher WHERE teacher_username = '$teacher'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $teacher_id = $row['teacher_id'];
        }
    }
    ?>
    
    <?php include "css/footer.php"; ?>
</body>
    
</html>