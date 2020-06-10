<?php

$username = $_POST['email'];
$password = $_POST['pass'];

  $conn = new PDO("mysql:host=localhost;dbname=Q14980258;", "Q14980258", "aetoorau");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id FROM signup WHERE email = $username and pass = $password");
  $stmt->execute($stmt);

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  if($result["email"]==$username && $result["pass"]==$password) {
    header("Location: user.html");
    
    }
    else {
     echo"Sorry, your credentials are not valid, Please try again.";
    }


?>