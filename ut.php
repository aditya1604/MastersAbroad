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
    <h2 style="font-size: xx-large;">University of Texas At Dallas</h2><br><br>
    <div class="col-md-6">
        <p style="font-size:20px; color:#03225C; text-align: justify;">
            <span style="font-size: larger; color: black;">About University of Texas At Dallas </span><br><br>
            University of Texas - Dallas is a Tier 1 open research college began in the year 1969. Disregarding being
            moderately 'youthful', UTD has just become well known and is thought of, as perhaps the best college for
            designing and the board. UTD positions #21 on the planet and #1 in US under Times Higher Education Young
            University rankings. It positions #260 as per U.S. News' 'Best Global Universities Ranking' list. The low
            expenses, phenomenal research offices, and energizing occupation prospects together make it a perfect goal
            for Indians, which is the reason they apply in such enormous numbers.
            <br>
        </p>
    </div>
    <div>
        <img src="img/utd.jpeg" alt="utd" style="height:350px;" />
    </div><br>

    <hr>

    <h3>Engineering graduate courses offered at UTD</h3>
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
    
    $stmt = $conn->prepare("SELECT courses, description FROM ut");
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
    
        $query = $conn->prepare("SELECT username, comment FROM ut_comments");
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
<form action="ut_comments.php" method= "POST">
    <input type="text" placeholder="Type a comment" name="comment" style= "width: 80%"><br><br>
    <div class="input-group-append">
            <button class="btn btn-outline-success" type="submit">Submit</button>
    </div>
</form>
<hr>
    <h3>See where UTD is located</h3> <br>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13708013.922458371!2d-96.750099!3d32.985762!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9098b32e9aa1331!2sThe%20University%20of%20Texas%20at%20Dallas!5e0!3m2!1sen!2sus!4v1589197071442!5m2!1sen!2sus"
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