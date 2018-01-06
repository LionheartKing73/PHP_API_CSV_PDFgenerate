<?php

$ID=$_POST["ID"];
$FromName=$_POST["FromName"];
$ToName=$_POST["ToName"];
$CustomerName=$_POST["CustomerName"];
$ShipMode=$_POST["ShipMode"];
$Destination=$_POST["Destination"];
$XFTYDate=$_POST["XFTYDate"];
$HandoverDate=$_POST["HandoverDate"];
$Division=$_POST["Division"];
$InvoiceNumber=$_POST["InvoiceNumber"];
$HMSPONumber_RelationalKey=$_POST["HMSPONumber_RelationalKey"];
$StyleNumber=$_POST["StyleNumber"];
$Container=$_POST["Container"];
$Dimention=$_POST["Dimention"];
$NW=$_POST["NW"];
$GW=$_POST["GW"];

$servername = "localhost";
$username = "root";
$password = "";

//================= ASN item table create on asnitems db========================
$dbname = "asnitems";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "CREATE TABLE PO".$ID." (
CTNNo VARCHAR(50),
NumberofCTNs VARCHAR(50),
Color VARCHAR(50),
Size1Label VARCHAR(50),
Size2Label VARCHAR(50),
Size3Label VARCHAR(50),
Size4Label VARCHAR(50),
Size5Label VARCHAR(50),
Size6Label VARCHAR(50),
Size7Label VARCHAR(50),
Size8Label VARCHAR(50),
Size9Label VARCHAR(50),
Size10Label VARCHAR(50),
Size1Qty VARCHAR(50),
Size2Qty VARCHAR(50),
Size3Qty VARCHAR(50),
Size4Qty VARCHAR(50),
Size5Qty VARCHAR(50),
Size6Qty VARCHAR(50),
Size7Qty VARCHAR(50),
Size8Qty VARCHAR(50),
Size9Qty VARCHAR(50),
Size10Qty VARCHAR(50),
Packs VARCHAR(50),
CustomerPO VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
} else {
    echo "This PO ID was already created on Databasae! Would you update that?";
    $sql = "delete from PO".$ID;
    $conn->query($sql);
    return;
}
$conn->close();

//=============== ASN Save =========================
$dbname = "asn";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO asn (Id, FromName, ToName,CustomerName,ShipMode,Destination,XFTYDate,HandoverDate,Division,InvoiceNumber,HMSPONumber_RelationalKey,StyleNumber,Container,Dimention,NW,GW)
VALUES ('$ID','$FromName' , '$ToName','$CustomerName','$ShipMode','$Destination','$XFTYDate','$HandoverDate','$Division','$InvoiceNumber','$HMSPONumber_RelationalKey','$StyleNumber','$Container','$Dimention','$NW','$GW')";

if ($conn->query($sql) === TRUE) {
    echo "ASN saved to database. ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>


