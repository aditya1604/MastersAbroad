<?php
$firstname = $_POST['fristname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

    $conn = new mysqli('localhost', 'Q14980258', 'aetoorau', 'Q14980258');
    if($conn->connect_error) {
        die('Connection Failed :'.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into signup (firstname, lastname, email, pass)
         values(?, ?, ?, ?)");
    
        $stmt->bind_param('ssss', $firstname, $lastname, $email, $pass);
        $stmt->execute();
        echo "Data entered successfully";
        $stmt->close();
        $conn->close();    
    }
?>