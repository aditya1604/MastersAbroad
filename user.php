<?php
session_start();

if(isset($_SESSION['username'])) {
          
} else {
header('location: login.php');
}

?>
<!DOCTYPE html>
<html>

<head>
   <title>Welcome </title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="style.css">
</head>


<body background="img/home.jpeg">
   <nav class="navbar navbar-expand-lg navbar-light" id="header">
      <h1>
         <a id="masters" href="index.html" style="color:wheat;">Masters Abroad</a>
       </h1>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="index.html">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="universities.html">UNIVERSITIES</a></li>
            <li class="nav-item"><a class="nav-link" href="articles.html">ARTICLES</a></li>
            <li class="nav-item"><a class="nav-link" href="update_password.html">Update Password</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php" >SIGN OUT</a></li>
         </ul>
      </div>
   </nav><br><br>
   <br><br><br><br><br>
   <main class="row">
      <div style="margin-left: 5%;">
        <img src="img/trenduni.png" alt="university" class="img-fluid" /><span
          style="font-size:large; margin-left: 1%;">TRENDING
          UNIVERSITIES</span>
      </div>
  
      <div class="col-2 col-md-4 col-lg-2" id="article">
        <a href="mit.html">
          <img class="img-fluid" alt="mit" src="img/1.png" />
          <h2>MIT</h2>
        </a>
  
      </div>
  
      <div class="col-2 col-md-4 col-lg-2" id="article">
        <a href="nyu.html">
          <img class="img-fluid" alt="nyu" src="img/2.png" />
          <h2>NYU</h2>
        </a>
  
      </div>
  
      <div class="col-2 col-md-4 col-lg-2" id="article">
        <a href="oxford.html">
          <img class="img-fluid" alt="oxford" src="img/3.png" />
          <h2>Oxford University</h2><br>
        </a>
  
      </div>
  
      <div class="col-2 col-md-4 col-lg-2" id="article">
        <a href="cambridge.html">
          <img class="img-fluid" alt="cambridge uni" src="img/4.png" />
          <h2>Cambridge University</h2>
        </a>
  
      </div>
    </main>
    
    <div id="uni" style="margin-left: 5%;">
  
      <img alt="article" src="img/articlefront.png" class="img-fluid" /><span style="font-size:large; color:black; margin-left: 1%;">TRENDING
        ARTICLES</span>
    </div>
    <div class="row" id="article">
      <section class="col-12 col-md-4 col-lg-3">
        <a href="sop.html">
        <img alt="sop and essay" class="img-fluid" src="img/sop.png" />
        <h2>Mistakes in Writing SOP & Essays</h2></a>
      </section>
      <section class="col-12 col-md-4 col-lg-3">
        <a href="lor.html">
        <img alt="lor" class="img-fluid" src="img/lor.png" />
        <h2>Letter Of Recommendation</h2></a>
      </section>
      <section class="col-12 col-md-4 col-lg-3">
        <a href="gre.html">
        <img alt="gre" class="img-fluid" src="img/gre.jpg" />
        <h2>Graduate Record Examination</h2></a>
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