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

$servername = "mysqlcluster24.registeredsite.com";
$username = "asnuser";
$password = "Xforce86!";
$dbname = "asn";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE asn SET FromName='$FromName', ToName='$ToName',CustomerName='$CustomerName',ShipMode='$ShipMode',Destination='$Destination',XFTYDate='$XFTYDate',HandoverDate='$HandoverDate',Division='$Division',InvoiceNumber='$InvoiceNumber',HMSPONumber_RelationalKey='$HMSPONumber_RelationalKey',StyleNumber='$StyleNumber',Container='$Container',Dimention='$Dimention',NW='$NW',GW='$GW'
    where Id='$ID';";

if ($conn->query($sql) === TRUE) {
    echo "ASN Updated on database. ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

//================= remove all rows of ASN item table =================
$username = "asnitems";
$dbname = "asnitems";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "delete from PO".$ID;
$conn->query($sql);
$conn->close();

?>


