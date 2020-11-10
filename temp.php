<?php

require 'database.php';

$email = $_POST['email'];
$newmail = $_POST['newmail'];
$pass = $_POST['pass'];

try {
  

  $sql =  'UPDATE signup SET  email = "' . $newmail . '"  WHERE email = "' . $email . '" and pass = "' . $pass . '" ';


  $stmt = $conn->prepare($sql);


  $stmt->execute();

  
  echo $stmt->rowCount() . " records UPDATED successfully";
  session_start();

header('location: user.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>