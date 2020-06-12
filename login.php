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
} else {
$query = $conn->prepare("SELECT email, pass FROM signup WHERE 
email=? AND pass=? ");
$query->execute(array($user,$pass));
$row = $query->fetch(PDO::FETCH_BOTH);

if($query->rowCount() > 0) {
  $_SESSION['username'] = $user;
  header('location:user.php');
} else {
  $message = "Username/Password is wrong";
}


}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" id="header">
    <h1>
      <a id="masters" href="index.php" style="color:wheat;">Masters Abroad</a>
    </h1>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a href="index.php">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="universities.html">UNIVERSITIES</a></li>
        <li class="nav-item"><a class="nav-link" href="articles.html">ARTICLES</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>
        <li class="nav-item"><a class="nav-link" href="signup.html">SIGNUP</a></li>
      </ul>
    </div>
  </nav><br><br>
  <br><br><br>
<?php
if(isset($message)) {
echo $message;
}
?>
<form id="lg" action="#" method="post">
<h1>Login</h1><br>
<label for="email"><b>Username</b></label><br>
<input type="text" name="username" placeholder="email" required><br><br>

<label for="password"><b>Password</b></label><br>
<input type="password" name="password" placeholder="password" require><br><br>

<input type="checkbox"> Remeber Me <br><br>

<input id="button" type="submit" name="login" value="Login">

</form><br>

<img src="img/lg.png" alt="universities" width="600" height="500" id="img">
<div class="footer row">

    <div class="siteinfo col-md-4">
      <p>Masters Abroad<br>Created by <a href="mailto:4surya58@solent.ac.uk">Aditya Suryawanshi &copy;</a></p>
    </div>

    <div class="socialmedia col-md-8">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
  </div>
</body>
</html>