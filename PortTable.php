<?php
$link=mysqli_connect("localhost","root","root","portDB");
if($link===false)
die("Error".mysqli_connect_error());
$sql="CREATE TABLE ReceiveDetails(Name varchar(100) not null,Email varchar(30) not null,Message varchar(300) not null)";
if(mysqli_query($link,$sql))
echo "Table ReceiveDetails created.";
else
echo "Error".mysqli_error($link);
?>