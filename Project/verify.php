<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$ux = $_POST['Email']; 
$lx = $_POST['Password'];

$query="SELECT * from register where email='$ux' and psw='$lx'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION['auth'] = 'leon';
    header('location: index.php');
}
else{
    $message = "INVALID USER";
    header('location: login.php');
    echo "Wrong Email or Password";
}
?>