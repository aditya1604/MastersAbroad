<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

    $conn = new PDO("mysql:host=localhost;dbname=Q14980258;", "Q14980258", "aetoorau");
    if($conn->connect_error) {
        die('Connection Failed :'.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into signup (firstname, lastname, email, pass)
         values(?, ?, ?, ?)");

        $stmt->execute(['ssss', $firstname, $lastname, $email, $pass]);
        $stmt->close();
        $conn->close();    
    }
    header("Location: user.html");
?>