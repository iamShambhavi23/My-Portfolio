<?php
$link=mysqli_connect("localhost","root","root");
if($link===false)
die("Error".mysqli_connect_error());
$sql="CREATE DATABASE portDB";
if(mysqli_query($link,$sql))
echo "Create database sussefully.";
else
echo "Error".mysqli_error($link);
mysqli_close($link);
?>