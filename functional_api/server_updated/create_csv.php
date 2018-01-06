<?php

$id=$_POST["id"];
$csv_data=$_POST["csv_data"];
$fileName = '../asn-uploads/'.$id.'.csv';

file_put_contents($fileName, $csv_data);

?>


