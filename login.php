<?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
if ($user != "" && $pass != "") {
require 'database.php';
$sql = "SELECT userid FROM signup WHERE email='$user'
 AND pass ='$pass'";
$result = $conn->query($sql);
if($result->rowCount() > 0) {
  session_start();
  $_SESSION['username'] = $user;
  header('location:user.php');
} else {
      echo "Username/Password is wrong";
      }

}
?>