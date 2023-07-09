<?php
$link=mysqli_connect("localhost","root","root","portDB");
if(!$link)
{
    echo ("could not connect" .mysqli_connect_error());
}
$ret="SELECT * FROM ReceiveDetails";
if($result=mysqli_query($link,$ret))
{
    echo "<html>";
    echo "<body bgcolor=#ECC9EE>";
    echo "<center>";
    echo "<h2>Receive Information From Portfolio</h2>";
    if(mysqli_num_rows($result)>0)
    {
        echo "<table border=1px>";
            echo "<tr>";
            echo "<th>Name :&emsp;</th>";
            echo "<th>Email :&emsp;</th>";
            echo "<th>Message :&emsp;</th>";
            echo "</tr>";
    }
    while($rows=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$rows['Name']."</td>";
        echo "<td>".$rows['Email']."</td>";
        echo "<td>".$rows['Message']."</td>";
        echo "</tr>";    
    }
    echo "</table>";
    echo "</center>";
    echo "</body></html>";
    mysqli_free_result($result);
}
    else
    {
        echo "could not able to execute $ret".mysqli_error($link);
    }
    mysqli_close($link);
?>