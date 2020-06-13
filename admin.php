<?php
session_start();

if(isset($_SESSION['username'])) {
          
} 
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
float : center;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-image:none;">
<nav class="navbar navbar-expand-lg navbar-light" id="header">
    <h1>
      <a id="masters" href="admin.php" style="color:wheat;">Masters Abroad</a>
    </h1>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="admin.php">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="adminlogout.php" >SIGN OUT</a></li>
         </ul>
      </div>
  </nav>
  <main class="conatiner">
<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";

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
    
    $stmt = $conn->prepare("SELECT firstname, lastname, email FROM signup");
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
</main>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
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
