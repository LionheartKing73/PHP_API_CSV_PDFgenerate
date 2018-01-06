<?php

$ID=$_POST["ID"];
$CTNNo=$_POST["CTNNo"];
$NumberofCTNs=$_POST["NumberofCTNs"];
$Color=$_POST["Color"];
$Size1Label=$_POST["Size1Label"];
$Size2Label=$_POST["Size2Label"];
$Size3Label=$_POST["Size3Label"];
$Size4Label=$_POST["Size4Label"];
$Size5Label=$_POST["Size5Label"];
$Size6Label=$_POST["Size6Label"];
$Size7Label=$_POST["Size7Label"];
$Size8Label=$_POST["Size8Label"];
$Size9Label=$_POST["Size9Label"];
$Size10Label=$_POST["Size10Label"];
$Size1Qty=$_POST["Size1Qty"];
$Size2Qty=$_POST["Size2Qty"];
$Size3Qty=$_POST["Size3Qty"];
$Size4Qty=$_POST["Size4Qty"];
$Size5Qty=$_POST["Size5Qty"];
$Size6Qty=$_POST["Size6Qty"];
$Size7Qty=$_POST["Size7Qty"];
$Size8Qty=$_POST["Size8Qty"];
$Size9Qty=$_POST["Size9Qty"];
$Size10Qty=$_POST["Size10Qty"];
$Packs=$_POST["Packs"];
$CustomerPO=$_POST["CustomerPO"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asnitems";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO PO".$ID." (CTNNo,NumberofCTNs,Color,Size1Label,Size2Label,Size3Label,Size4Label,Size5Label,Size6Label,Size7Label,Size8Label,Size9Label,Size10Label,Size1Qty,Size2Qty,Size3Qty,Size4Qty,Size5Qty,Size6Qty,Size7Qty,Size8Qty,Size9Qty,Size10Qty,Packs,CustomerPO) VALUES (
'$CTNNo',
'$NumberofCTNs',
'$Color',
'$Size1Label',
'$Size2Label',
'$Size3Label',
'$Size4Label',
'$Size5Label',
'$Size6Label',
'$Size7Label',
'$Size8Label',
'$Size9Label',
'$Size10Label',
'$Size1Qty',
'$Size2Qty',
'$Size3Qty',
'$Size4Qty',
'$Size5Qty',
'$Size6Qty',
'$Size7Qty',
'$Size8Qty',
'$Size9Qty',
'$Size10Qty',
'$Packs',
'$CustomerPO'
)";

if ($conn->query($sql) === TRUE) {
    echo "ASN items saved to database asnitems. ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 

$conn->close();
?>


