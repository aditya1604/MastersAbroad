<?php
session_start();

if(isset($_SESSION['username'])) {

} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 2%;
            padding-right: 4%;
        }
    </style>
    <title>EduMaster</title>
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
    <main class="container">
    <h2 style="font-size: xx-large;">University of Oxford</h2><br><br>
    <div class="col-md-6">
        <p style="font-size:20px; color:#03225C; text-align: justify;">
            <span style="font-size: larger; color: black;">About University of Oxford </span><br><br>
            The University of Oxford (informally known as Oxford) is a collegiate research university in Oxford, England
            running 38 constituent colleges majorly teaching Arts and Humanities, Biological Sciences, Clinical
            Medicine, Humanities and Social Sciences, Physical Sciences and Technology. It is the oldest English
            speaking university in the world, whose founding date is not known but there are pieces of evidence of its
            pedagogy dating back to 1096. It is consistently ranked as one of the top 5 universities in the world with a
            motto called ‘The Lord is my Light'.
            <br>
        </p>
    </div>
    <div>
        <img alt = "oxford" src="img/OXFORDimage.jpg" style="height:350px;" />
    </div><br>

    <hr>

    <h3>Engineering graduate courses offered at Oxford</h3>
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
    
    $stmt = $conn->prepare("SELECT courses, description FROM oxford");
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
    
        $query = $conn->prepare("SELECT username, comment FROM ox_comments");
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
<form action="ox_comments.php" method= "POST">
    <input type="text" placeholder="Type a comment" name="comment" style= "width: 80%"><br><br>
    <div class="input-group-append">
            <button class="btn btn-outline-success" type="submit">Submit</button>
    </div>
</form>
<hr>
    <h3>See where Oxford is located</h3> <br>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10116337.684065597!2d-1.254367!3d51.754816!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sus!4v1586283021694!5m2!1sen!2sus"
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