<?php
  session_start();
  if(!empty($_SESSION['username'])) {
  header('location:user.php');
  }
  require 'database.php';

  if(isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

  if(empty($user) || empty($pass)) {
    $message = 'All field are required';
  } 
  else {
    $query = $conn->prepare("SELECT email, pass FROM signup WHERE 
    email=? AND pass=? ");
    $query->execute(array($user,$pass));
    $row = $query->fetch(PDO::FETCH_BOTH);

  if($query->rowCount() > 0) {
    $_SESSION['username'] = $user;
    header('location:user.php');
  } else {
        echo "Username/Password is wrong";
        }
  }
}
?>