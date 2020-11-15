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
  </nav><br><br>

    <main class="container">
        <h2 style="font-size: xx-large;">New York University</h2><br><br>
        <div class="col-md-6">
            <p style="font-size:20px; color:#03225C; text-align: justify;">
                <span style="font-size: larger; color: black;">About New York University </span><br><br>
                Being the alma mater of 36 Nobel Prize winners is no mean feat! New York University has accomplished
                this
                amazing achievement in its 185 years of existence. Not only that, New York University has been attended
                by
                some of the most renowned actors and directors of Hollywood. NYU is a breeding ground of great thinkers
                and
                stars of the future! It ranks #28 according to U.S. News' 'Best Global Universities Ranking' list.

                <br>
            </p>
        </div>
        <div>
            <img src="img/NYUimage.jpeg" alt="nyu" style="height:350px;" />
        </div><br>

        <hr>

        <h3>Engineering graduate courses offered at NYU</h3>
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
    
        $stmt = $conn->prepare("SELECT courses, description FROM nyu");
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
    
        $query = $conn->prepare("SELECT username, comment FROM nyu_comments");
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
<form action="nyu_comments.php" method= "POST">
    <input type="text" placeholder="Type a comment" name="comment" style= "width: 80%"><br><br>
    <div class="input-group-append">
            <button class="btn btn-outline-success" type="submit">Submit</button>
    </div>
</form>
<hr>
        <h3>See where NYU is located</h3> <br>
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