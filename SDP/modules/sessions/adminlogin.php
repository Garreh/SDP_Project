
//
// include "conn.php";
//
// $username = mysqli_real_escape_string($con,$_POST['username']);
// $password = mysqli_real_escape_string($con,$_POST['password']);
//
// if ($username != "" && $password != ""){
//
//     $sql_query = "select count(*) as cntUser from admin where admin_username='".$username."' and admin_password='".$password."'";
//     $result = mysqli_query($con,$sql_query);
//     $row = mysqli_fetch_array($result);
//     $data = mysqli_fetch_assoc($result);
//     $count = $row['cntUser'];
//
//     if($count > 0){
//         $_SESSION['username'] = $username;
//         $_SESSION['start'] = time();	//set the start time to the login moment
//         $_SESSION['expire'] = $_SESSION['start'] + (60 * 60); //set the time limit for login
//         echo 1;
//     }else{
//         echo 0;
//     }
// }


<?php

include "conn.php";

$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);

if ($username != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from admin where admin_username='".$username."' and admin_password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);
    $data = mysqli_fetch_assoc($result);
    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['admin'] = $username;
        $_SESSION['role'] = $data['role'];
        $_SESSION['start'] = time();	//set the start time to the login moment
        $_SESSION['expire'] = $_SESSION['start'] + (60 * 60); //set the time limit for login
        echo 1;
    }else{
        echo 0;
    }
}

 ?>


 
