<?php
$firstname = $_POST['fristname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($password)) {
    $host = "localhost";
    $dbUsername = "Q14980258";
    $dbPassword = "aetoorau";
    $dbname = "Q14980258";   

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')' . mysqli_connect_error());
    }
    else {
        $select = "SELECT email From signup Where email = ? Limit 1";
        $insert = "INSERT Into signup (firstname, lastname, email, password) values (?, ?, ?, ?)";
        
        $stmt = $conn-> prepare($select);
        $stmt->bind_param("s", $email);
        $stmt-> execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $colnum = $stmt->num_column;

        if($colnum == 0) {
            $stmt = $conn-> prepare($insert);
            $stmt-> bind_param("ssss", $firstname, $lastname, $email, $password);
            $stmt-> execute();
            header('user.html');      
        }
        else {
            echo "Email is already registered";
        }
        $stmt->close();
        $conn->close();       
    }
}
else {
    echo "All fiels are required";
    die();
}
?>