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
    <title>masters Abroad</title>
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
        <a class="nav-link" href="logout.php" >SIGN OUT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
  </nav><br><br>

    <main class="container">
        <h1 style="font-size: xx-large;">Coventry University</h1><br><br>
        <div class="col-md-6">
            <p style="font-size:20px; color:#03225C; text-align: justify;">
                <span style="font-size: larger; color: black;"> Coventry University </span><br><br>
                CU Coventry was set up nearby in 2012 and is a branch of Coventry University, giving full-time and low
                maintenance proficient courses, for example, bookkeeping, legitimate examinations and showcasing. CU
                Coventry is free from the college with its own staff and offices, however its projects are approved and
                granted by the university. Courses offered are adaptable, implying that education costs at the
                organization are regularly lower than the most extreme £9,250 colleges in the UK can charge for
                full-time
                courses. The low maintenance nature of a large number of the courses conveyed implies classes can
                run at
                atypical occasions, for example, nighttimes and ends of the week. </p>
        </div>
        <div>
            <img alt="coventry" src="img/coventry.jpeg" style="height:350px;" />
        </div><br><br>
        
        <hr>

        <h3>Engineering graduate courses offered at Coventry University</h3>
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
    
    $stmt = $conn->prepare("SELECT courses, description FROM coventry");
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
    
        $query = $conn->prepare("SELECT username, comment FROM coventry_comments");
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
<form action="comment.php" method= "POST">
    <input type="text" placeholder="Type a comment" name="comment" style= "width: 80%"><br><br>
    <div class="input-group-append">
            <button class="btn btn-outline-success" type="submit">Submit</button>
    </div>
</form>
<hr>
    <h3>See where Coventry University is located</h3> <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9969551.272751248!2d-1.503746!3d52.407175!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ecadf971e952708!2sCoventry%20University!5e0!3m2!1sen!2sus!4v1589198647076!5m2!1sen!2sus"
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