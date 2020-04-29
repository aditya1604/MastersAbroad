<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pass'];
    echo "<h1>$firstname $lastname $email $pass</h1>";
    $conn = new PDO("mysql:host=localhost;dbname=Q14980258;", "Q14980258", "aetoorau");
    if($conn->connect_error) {
        die('Connection Failed :'.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into signup (firstname, lastname, email, pass)
         values(?, ?, ?, ?)");

        $stmt->execute([$firstname, $lastname, $email, $password]);
        header("Location:user.html");
       
    }
  
?>
<?php
/*  
$conn = new PDO("mysql:host=localhost;dbname=Q14980258;", "Q14980258", "aetoorau");

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $myusername = mysqli_real_escape_string($conn,$_POST['email']);
  $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
  
  $sql = "SELECT FROM signup WHERE email = '$myusername' and pass = '$mypassword'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];
  
  $count = mysqli_num_rows($result);
  
  // If result matched $myusername and $mypassword, table row must be 1 row
    
  if($count == 1) {
     session_register("myusername");
     $_SESSION['login_user'] = $myusername;
     
     header("location: user.html");
  }else {
     $error = "Your Login Name or Password is invalid";
     header("location: login.html");
  }
}
*/
?>