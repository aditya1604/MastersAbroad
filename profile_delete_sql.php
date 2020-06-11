<?php

require 'database.php';
$id = $_POST['email'];
try {
 
  $sql = 'DELETE FROM signup WHERE email = "' . $id . '" ';

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

