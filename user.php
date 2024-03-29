<?php
session_start();

if(isset($_SESSION['username'])) {
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
    #s {
      width: 20%;
      padding-top: 1%;
      margin-right: 2%;
      border-style: ridge;
      font-size: x-large;
    }

    #ar {
      padding-top: 2%;
      padding-left: 10%;
    }
  </style>
<title>Welcome </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>

<body style="background-image: none;">
<nav class="navbar navbar-expand-lg navbar-light" id="header">
    <h1>
      <a id="masters" href="user.php" style="color:wheat;">Masters Abroad</a>
    </h1>
    <div class="topnav" id="myTopnav">
        <a href="user.php" class="active">Home</a>
        <a class="nav-link" href="universities.html">UNIVERSITIES</a>
        <a class="nav-link" href="articles.html">ARTICLES</a>
        <a class="nav-link" href="update_password.html">Update Password</a>
        <a class="nav-link" href="update_email.html">Update Email</a>
        <a class="nav-link" href="logout.php" >SIGN OUT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
  </nav>
   <main class="row" id="ar">
      <div>
        <img src="img/trenduni.png" alt="university" class="img-fluid" /><span
          style="font-size:large; margin-left: 1%;">TRENDING
          UNIVERSITIES</span>
      </div><br>
    
    <section class="col-12 col-md-4 col-lg-3" id="s">
      <a href="coventry.php">
      <img  alt="coventry" class="img-fluid" src="img/15.png" />
      <h2 >Coventry University</h2></a>
    </section>
    <section class="col-12 col-md-4 col-lg-3" id="s">
      <a href="psu.php">
      <img  alt="psu" class="img-fluid" src="img/7.png" />
      <h2 >Portland State University</h2></a>
    </section>
    <section class="col-12 col-md-4 col-lg-3" id="s">
      <a href="umbc.php">
      <img  alt="umbc" class="img-fluid" src="img/10.jpeg" />
      <h2 >University Of Marlyland Baltimore County</h2></a>
    </section>
    <section class="col-12 col-md-4 col-lg-3" id="s">
      <a href="ut.php">
      <img  alt="texas" class="img-fluid" src="img/11.png" />
      <h2 >University Of Texas</h2></a>
    </section>

    </main>
    <main class="row" id="ar">
    
    <section class="col-12 col-md-4 col-lg-3" id="s">
    <a href="mit.php">
        <img class="img-fluid" alt="mit" src="img/1.png" />
        <h2>MIT</h2>
      </a>
    </section>
    <section class="col-12 col-md-4 col-lg-3" id="s">
    <a href="nyu.php">
        <img class="img-fluid" alt="nyu" src="img/2.png" />
        <h2>NYU</h2>
      </a>
    </section>
    <section class="col-12 col-md-4 col-lg-3" id="s">
    <a href="oxford.php">
        <img class="img-fluid" alt="oxford" src="img/3.png" />
        <h2>Oxford University</h2><br>
      </a>
    </section>
    <section class="col-12 col-md-4 col-lg-3" id="s">
    <a href="cambridge.php">
        <img class="img-fluid" alt="cambridge uni" src="img/4.png" />
        <h2>Cambridge University</h2>
      </a>
    </section>

    </main>
    <div id="uni" style="margin-left: 8%;">
  
      <img alt="article" src="img/articlefront.png" class="img-fluid" /><span style="font-size:large; color:black; margin-left: 1%;">TRENDING
        ARTICLES</span>
    </div>
    <div class="row" id="article">

      <section class="col-12 col-md-4 col-lg-3">
        <a href="gre.html">
        <img alt="gre" class="img-fluid" src="img/gre1.jpeg" />
        <h2>Graduate Record Examination</h2></a>
      </section>
      <section class="col-12 col-md-4 col-lg-3">
            <a href="ambi.html">
                <img style="col-sm-1;" alt="ambitious" class="img-fluid" src="img/ambi.jpeg" />
                <h2>Ambitious, Moderate or Safe University</h2>
            </a>
        </section>
        <section class="col-12 col-md-4 col-lg-3">
      <a href="sop.html">
      <img alt="sop and essay" class="img-fluid" src="img/sop1.jpeg" />
      <h2>Mistakes in Writing SOP & Essays</h2></a>
    </section>
    </div>
    <div class="row" id="article">
    <section class="col-12 col-md-4 col-lg-3">
      <a href="lor.html">
      <img alt="lor" class="img-fluid" src="img/lor.png" />
      <h2>Letter Of Recommendation</h2></a>
    </section>

  </div><br>
  
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
  
<script src = "navbar.js"></script>
</body>

</html>