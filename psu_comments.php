<?php
   
    session_start();

    if(isset($_SESSION['username'])) {
    $id = $_SESSION['username'];
    $comment = $_POST['comment'];
    require 'database.php';
    $query = $conn->prepare("SELECT firstname FROM signup WHERE email=? ");
    $query->execute(array($id));
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $name =  $row['firstname'];
    echo $name;

    if($conn->connect_error) {
        die('Connection Failed :'.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into psu_comments (username, comment)
         values(?, ?)");

         $stmt->bindParam(1, $name);
         $stmt->bindParam(2, $comment);
         $stmt->execute();
        header('Location: psu.php');
    }
}
?>
