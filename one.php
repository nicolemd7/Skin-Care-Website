<?php
$server="localhost";
$user="root";
$pw="";
$conn=mysqli_connect($server,$user,$pw);
if (!($conn))
echo"could not connect";
else {
echo"connected";
$sql="CREATE DATABASE corium";
if (mysqli_query($conn,$sql))
echo"database created";
else
echo"not created";
mysqli_close($conn);
}
?>
