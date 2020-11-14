<?php
session_start();
if(isset($_SESSION['username'])){
header("location: user.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Masters Abroad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo {
    font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
</head>

<body >
  <nav class="navbar navbar-expand-lg navbar-light" id="header">
    <h1>
      <a id="masters" href="index.php" style="color:wheat;">Masters Abroad</a>
    </h1>
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="login.html">Login</a>
        <a href="signup.html">SIGNUP</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
  </nav>

  <main class="row" id = "article">
    <div style="margin-left: -4%;">
      <img src="img/trenduni.png" alt="university" class="img-fluid" /><span
        style="font-size:large; margin-left: 1%;">TRENDING
        UNIVERSITIES</span>
    </div><br>

    <div class="col-2 col-md-4 col-lg-2">
      <a href="home_mit.html">
        <img class="img-fluid" alt="mit" src="img/1.png" />
        <h2>MIT</h2>
      </a>

    </div>

    <div class="col-2 col-md-4 col-lg-2">
      <a href="home_nyu.html">
        <img class="img-fluid" alt="nyu" src="img/2.png" />
        <h2>NYU</h2>
      </a>

    </div>

    <div class="col-2 col-md-4 col-lg-2">
      <a href="home_oxford.html">
        <img class="img-fluid" alt="oxford" src="img/3.png" />
        <h2>Oxford University</h2><br>
      </a>

    </div>

    <div class="col-2 col-md-4 col-lg-2">
      <a href="home_cambridge.html">
        <img class="img-fluid" alt="cambridge uni" src="img/4.png" />
        <h2>Cambridge University</h2>
      </a>
    </div>
  </main>
  <hr>
  <div class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education" style="font-size:36px;"></span>
      <h4>Grad School Finder</h4>
      <p>Try our smart software and see a list of safe, realistic & ambitious universities.</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-binoculars" style="font-size:36px;"></span>
      <h4>Undergrad College Finder</h4>
      <p>Let us help to find best Undergrad School for you!</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-bookmark" style="font-size:36px;"></span>
      <h4>Articles</h4>
      <p>Learn from the articles, whether you are writinh your sop or lor..</p>
    </div>
  </div>
  <br><br>
</div>
  <div class="footer row">

    <div class="siteinfo col-md-4">
      <p>Masters Abroad<br>Created by <a href="mailto:4surya58@solent.ac.uk">Aditya Suryawanshi &copy;</a></p><br>
      <a href="adminlogin.html">Admin Login</a>
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
<script src = "navbar.js"></script>
</body>

</html>