<?php

    require 'database.php';

    session_start();
    $user_check=$_SESSION['username'];

    $result = $conn->prepare("SELECT * FROM signup WHERE email= :$user_check");
    $result->execute(array(":email"=>$user_check));

    $row = $result->fetch(PDO::FETCH_ASSOC);

    $login_session =$row['email'];
    
    if(!isset($login_session))
        {
            $conn = null; 
            header('Location: user.php');
        }
?>
