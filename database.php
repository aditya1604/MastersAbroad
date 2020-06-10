
<?php 
try {
  $db = new PDO('mysql:host=localhost;dbname=Q14980258;charset=utf8mb4', 'Q14980258', 'aetoorau');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
} catch (PDOException $e) {
  echo "Connection failed : ". $e->getMessage();
}
?>
