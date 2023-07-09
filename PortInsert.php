<?php
$link=mysqli_connect("localhost","root","root","portDB");
if($link===FALSE)
die("Error".mysqli_connect_error());
$na_me=mysqli_real_escape_string($link,$_POST['nm']);
$em_ail=mysqli_real_escape_string($link,$_POST['email']);
$mess=mysqli_real_escape_string($link,$_POST['msg']);


$sql="INSERT INTO ReceiveDetails(Name,Email,Message)VALUES('$na_me','$em_ail','$mess')";
if(mysqli_query($link,$sql))
{
    echo"<html><body bgcolor=pink>";
    echo "<br><h1><center>Record added successfully.</center></h1>";
    echo "</body></html>";
}

else
echo "<br>Error".mysqli_error($link);
?>