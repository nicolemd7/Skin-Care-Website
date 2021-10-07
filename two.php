<?php
$server="localhost";
$user="root";
$pw="";
$dbname="corium";
$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!($conn))
echo "could not connect";
else{
$sql="CREATE TABLE enquiry_tb(
cid INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
cname VARCHAR (50),
cnum INT (20),
email VARCHAR(50),
comments VARCHAR(140))";
if(mysqli_query($conn,$sql))
echo"table created succesfully";
else
echo"table not created";
mysqli_close($conn);
}
?>