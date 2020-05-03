<?php
$email = $_POST['email'];
$newpass = $_POST['pass'];


    $conn = new PDO("mysql:host=localhost;dbname=Q14980258;", "Q14980258", "aetoorau");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE signup SET pass=$newpass WHERE id= $email";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
   
$conn = null;
?>