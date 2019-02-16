<?php
// to delete the session.
	session_start();

    if(isset($_SESSION['student']))
    {
        echo "<script>alert('Goodbye, ".$_SESSION['student'].". See you soon!');</script>";
        session_destroy();
        echo "<script>window.location.href='login_page.php';</script>";
    }
	else if(isset($_SESSION['teacher']))
    {
        echo "<script>alert('Goodbye, ".$_SESSION['teacher'].". See you soon!');</script>";
        session_destroy();
        echo "<script>window.location.href='login_page.php';</script>";
    }
    else if(isset($_SESSION['admin']))
    {
        echo "<script>alert('Goodbye, ".$_SESSION['teacher'].". See you soon!');</script>";
        session_destroy();
        echo "<script>window.location.href='home_page.php';</script>";
    }

?>
