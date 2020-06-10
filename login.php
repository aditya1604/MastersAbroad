
<?php
$username = $_POST["email"];
$password = $_POST["pass"];
if ($username != "" && $password != "") {
require_once("database.php");
$sql = "SELECT id FROM signup
 WHERE email='$username'
 AND pass='$password'";
$result = $db->query($sql);
if ($result->rowCount() > 0) {
session_start();
$_SESSION["uid"] = $result["id"];
header("Location: user.html");
}
else {
    echo"Sorry, your credentials are not valid, Please try again.";
   }
}
?>
