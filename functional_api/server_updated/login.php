<?php

$uname=$_POST["username"];
$upass=$_POST["userpass"];


$servername = "mysqlcluster23.registeredsite.com";
$username = "asn4dlogon";
$password = "Xforce86!";
$dbname = "asn4dlogon";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select * from users where username='$uname' and password='$upass';"; 
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 
if (!$row['username']) {
   echo("noID");
}

$conn->close();
?>


