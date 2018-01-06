<?php

$servername = "mysqlcluster24.registeredsite.com";
$username = "asnitems";
$password = "Xforce86!";
$dbname = "asnitems";

$id=$_GET["id"];

$conn = new mysqli($servername, $username, $password,$dbname);

	$sql = "select * from PO".$id;

$result = $conn->query($sql);
 
while ($row = $result->fetch_assoc()) {
     $row_array[] = $row;
}
echo json_encode($row_array); 
$conn->close();
 
?>


