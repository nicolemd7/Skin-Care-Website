<?php
$server="localhost";
$user="root";
$pw="";
$dbname="corium";
$n=$_POST["cname"];
$p=$_POST["cnum"];
$e=$_POST["email"];
$c=$_POST["text"];
$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo"connection no";
else
{echo"connection yes";
$sql=" INSERT INTO enquiry_tb(cname,cnum,email,comments)VALUES('$n','$p','$e','$c')";
if(mysqli_query($conn,$sql))
echo"record created succesfully";
else 
echo("record not created");}
	mysqli_close($conn);
	
?>