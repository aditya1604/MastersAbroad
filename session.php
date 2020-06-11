<?php
    $dbhost     = "localhost";
    $dbname     = "Q14980258";
    $dbuser     = "Q14980258";
    $dbpass     = "aetoorau";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    session_start();
    $user_check=$_SESSION['email'];

    $result = $conn->prepare("SELECT * FROM signup WHERE email= :$user_check");
    $result->execute(array(":email"=>$user_check));

    $row = $result->fetch(PDO::FETCH_ASSOC);

    $login_session =$row['email'];
    $user_id =$row['userId'];
    $user_passwords = $row['pass'];

    if(!isset($login_session))
        {
            $conn = null; 
            header('Location: login.html');
        }
?>