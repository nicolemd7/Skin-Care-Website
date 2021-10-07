<?php

$server="localhost";
$user="root";
$pw="";
$dbname="corium";
$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{ echo "connection established";
	$sql="CREATE TABLE regi_tb(
    	id    INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(20) NOT NULL, 
        password VARCHAR(20) NOT NULL,)";
    if (mysqli_query($conn,$sql))
		echo "TABLE created successfully";

	else 
		echo "TABLE not created ";

}/*
header("location: project.html");*/
mysqli_close($conn);


?>