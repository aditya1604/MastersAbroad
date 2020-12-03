<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

    require 'database.php';
    if($conn->connect_error) {
        die('Connection Failed :'.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into signup (firstname, lastname, email, pass)
        values(?, ?, ?, ?)");
        $stmt->bindParam(1, $firstname);
        $stmt->bindParam(2, $lastname);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $pass);
        $stmt->execute();

        header('location: user.php');
  
    }
  
?>
