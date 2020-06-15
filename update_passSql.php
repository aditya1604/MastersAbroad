<?php

require 'database.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

try {
  

  $sql =  'UPDATE signup SET  pass = "' . $pass . '"  WHERE email = "' . $email . '" ';


  $stmt = $conn->prepare($sql);


  $stmt->execute();

  
  echo $stmt->rowCount() . " records UPDATED successfully";
  session_start();
session_destroy();

header('location: login.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>