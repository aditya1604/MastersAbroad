<?php

require 'database.php';

$email = $_POST['email'];
$pass = $_POST['email'];

try {
  

  $sql =  'UPDATE signup SET  pass = "' . $pass . '"  WHERE email = "' . $email . '" ';

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>