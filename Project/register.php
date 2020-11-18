<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leon";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$uname = $_POST['Name']; 
$email = $_POST['Email'];

$psw = $_POST['Password'];
    
$sql = "INSERT INTO register (uname,email,psw)
VALUES ('$uname','$email','$psw')";

if ($conn->query($sql) === TRUE) {
    header('location: login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

