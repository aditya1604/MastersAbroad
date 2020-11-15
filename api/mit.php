<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <title>Masters Abroad</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-image: none;">
    <nav class="navbar navbar-expand-lg navbar-light" id="header">
        <h1>
          <a id="masters" href="index.php" style="color:wheat;">Masters Abroad</a>
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
   
    <main class="container">
        <h2 style="font-size: xx-large;">Massachusetts Institute of Technology(MIT)</h2><br><br>
    <div class="col-md-6">
        <p style="font-size:20px; color:#03225C; text-align: justify;">
            <span style="font-size: larger; color: black;">About Massachusetts Institute of Technology </span><br><br>
            Although it’ll no doubt be fascinating and highly inspiring to read about MIT, it could also give
            you a serious inferiority complex because Massachusetts Institute of Technology is perhaps the best overall
            college in the world. It makes sure its students are no less. To get into MIT, you need to be excellent in
            everything, and even that probably won’t be enough. MIT is absolutely top-notch in everything, from
            infrastructure to faculty to extracurriculars to
            placements to alumni. An interesting bit of trivia: the aggregated revenues of companies founded by MIT
            alumni
            would rank as the eleventh largest economy in the world. Now, that's MIT.<br>
        </p>
    </div>
    <div>
        <img src="img/MITimage.jpg" alt="mit" style="height:350px;" />
    </div><br>

    <br><br>

    <h3>Engineering graduate courses offered at MIT</h3><br>
<?php
echo "<table style='border: solid 1px black; width:80%'>";
 echo "<tr><th>Courses</th><th>Description</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

require 'database.php';

try {
    
    $stmt = $conn->prepare("SELECT courses, description FROM mit");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
<hr>
<h2>Comments</h2>
<?php
    require 'database.php';
    try {
    
        $query = $conn->prepare("SELECT username, comment FROM mit_comments");
        $query->execute();
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $name =  $row['username'];
        $comment = $row['comment'];
       
        echo "<p style= 'font-size: 25px;'>".$name."</p>";
       
        echo "<p style= 'font-size: 20px;'>".$comment."</p>"; 
        }
        }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>
<form action="mit_comments.php" method= "POST">
    <input type="text" placeholder="Type a comment" name="comment" style= "width: 80%"><br><br>
    <div class="input-group-append">
            <button class="btn btn-outline-success" type="submit">Submit</button>
    </div>
</form>
<hr>
    <h3>See where MIT is located</h3> <br>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12075728.377479663!2d-71.09416!3d42.360091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0e08ea5b308203c!2sMassachusetts%20Institute%20of%20Technology!5e0!3m2!1sen!2sus!4v1586257436635!5m2!1sen!2sus"
        width="1100" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</main>
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