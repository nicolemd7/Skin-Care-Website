
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
	$sql="INSERT INTO regi_tb(email,password) VALUES('$e','$p')";
if (mysqli_multi_query($conn,$sql))
{
		echo "Your account has been made succesfully";
	}

	else {
		echo "Not created";
		
		}

	}

	header("location:signup.html");
	mysqli_close($conn);
    
?>

