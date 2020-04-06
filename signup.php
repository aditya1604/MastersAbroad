<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
    echo "<h1>$firstname $lastname $email $pass</h1>";
    $conn = new PDO("mysql:host=localhost;dbname=Q14980258;", "Q14980258", "aetoorau");
    if($conn->connect_error) {
        die('Connection Failed :'.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into signup (firstname, lastname, email, pass)
         values(?, ?, ?, ?)");

        $stmt->execute([$firstname, $lastname, $email, $pass]);
        header("Location:user.html");
       
    }
  
?>