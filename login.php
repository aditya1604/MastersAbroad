<?php

// Grab User submitted information
$email = $_POST["email"];
$pass = $_POST["pass"];
echo "$email $pass";
// Connect to the database
$conn = new PDO("mysql:host=localhost;dbname=Q14980258;", "Q14980258", "aetoorau");


$result = "SELECT email, pass FROM signup WHERE email = $email and pass = $pass";
$stmt = $conn->prepare($result);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':pass', $pass);
    
    $stmt->execute();

       $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if($row["email"]==$email && $row["pass"]==$pass) {
   header("Location: user.html");
   }
   else {
    echo"Sorry, your credentials are not valid, Please try again.";
   }
?>
<?php
