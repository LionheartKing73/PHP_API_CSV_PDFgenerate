<?php

$servername = "mysqlcluster24.registeredsite.com";
$username = "asnuser";
$password = "Xforce86!";
$dbname = "asn";

$id=$_GET["id"];

$conn = new mysqli($servername, $username, $password,$dbname);

if ($id==null) {
	$sql = "select * from asn";
} else{
	$sql = "select * from asn where id='$id';";
}



$result = $conn->query($sql);
   
 
while ($row = $result->fetch_assoc()) {
     $row_array[] = $row;
}
echo json_encode($row_array); 
$conn->close();
 
?>


