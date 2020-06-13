<?php
session_start();

if(isset($_SESSION['username'])) {
          
} 
?>
<!DOCTYPE html>
<html>

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


<body style="background-image:none;" >
   <nav class="navbar navbar-expand-lg navbar-light" id="header">
      <h1>
         <a id="masters" href="user.php" style="color:wheat;">Masters Abroad</a>
       </h1>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="user.php">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="universities.html">UNIVERSITIES</a></li>
            <li class="nav-item"><a class="nav-link" href="articles.html">ARTICLES</a></li>
            <li class="nav-item"><a class="nav-link" href="update_password.html">Update Password</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php" >SIGN OUT</a></li>
         </ul>
      </div>
   </nav>
   <main class="row" id="ar">
      <div>
        <img src="img/trenduni.png" alt="university" class="img-fluid" /><span
          style="font-size:large; margin-left: 1%;">TRENDING
          UNIVERSITIES</span>
      </div><br>

    <section class="col-12 col-md-4 col-lg-3" id="s">
      <a href="coventry.html">
      <img  alt="coventry" class="img-fluid" src="img/15.png" />
      <h2 >Coventry University</h2></a>
    </section>
    <section class="col-12 col-md-4 col-lg-3" id="s">
      <a href="psu.html">
      <img  alt="psu" class="img-fluid" src="img/7.png" />
      <h2 >Portland State University</h2></a>
    </section>
    <section class="col-12 col-md-4 col-lg-3" id="s">
      <a href="umbc.html">
      <img  alt="umbc" class="img-fluid" src="img/10.jpeg" />
      <h2 >University Of Marlyland Baltimore County</h2></a>
    </section>
    <section class="col-12 col-md-4 col-lg-3" id="s">
      <a href="ut.html">
      <img  alt="texas" class="img-fluid" src="img/11.png" />
      <h2 >University Of Texas</h2></a>
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
                <img style="col-sm-1;" class="img-fluid" src="img/ambi.jpeg" />
                <h2>Ambitious, Moderate or Safe University</h2>
            </a>
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
  

</body>

</html>