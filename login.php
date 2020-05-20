<?php


$email = $_POST['email'];
$pass = $_POST['pass'];


$conn = new PDO("mysql:host=localhost;dbname=Q14980258;", "Q14980258", "aetoorau");


$result = "SELECT email, pass FROM signup WHERE email = $email and pass = $pass";
$stmt = $conn->prepare($result);

    
    $stmt->execute([$email, $pass]);

       $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if($row["email"]==$email && $row["pass"]==$pass) {
   header("Location: user.html");
   }
   else {
    echo"Sorry, your credentials are not valid, Please try again.";
   }
?>
<?php
