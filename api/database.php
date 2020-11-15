<?php
$source = 'mysql:host=localhost;dbname=Q14980258';
$userid = 'Q14980258';
$password = 'aetoorau';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

 $conn = new PDO($source, $userid, $password,$options);
 ?>