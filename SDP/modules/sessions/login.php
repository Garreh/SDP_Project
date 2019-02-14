<?php
include('conn.php');
session_start();
$username = mysqli_real_escape_string($con, $_POST['txt1']);
$password = hash("sha256", mysqli_real_escape_string($con, $_POST['txt2']));
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
$data = mysqli_fetch_assoc($result);
if ($count) {
  $_SESSION['user_id'] = $data['user_id'];
  $_SESSION['username'] = $data['username'];
  $_SESSION['name'] = $data['name'];
  $_SESSION['role'] = $data['role'];
  if ($_SESSION['role'] == "1") {
    echo "1"; //Employee Output
  } else {
    echo "0"; //Admin Output
  }
} else {
  echo "miss"; //Mismatch
}
 ?>
