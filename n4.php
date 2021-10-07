<?php
$server="localhost";
$user="root";
$pw="";
$dbname="corium";
$e=$_POST["mail"];
$p=$_POST["psd"];

$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{
$sql1="SELECT * FROM regi_tb Where email='$e'";
$sql2="SELECT * FROM regi_tb Where password ='$p'";
		$res= mysqli_query($conn,$sql1);
		
		if (mysqli_num_rows($res)>0)
		{
			echo "login succesful";
			}
			
		}
			header("location:postlog.html");
	mysqli_close($conn);
    ?>