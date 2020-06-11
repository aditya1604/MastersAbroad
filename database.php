<?php
$dsn = 'mysql:host=localhost;dbname=Q14980258'; //Data source Name
$username = 'Q14980258';
$password = 'aetoorau';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

 $conn = new PDO($dsn, $username, $password,$options);
 ?>