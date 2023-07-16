<?php 
$servername="localhost";
$username="root";
$password="1234";
$database="hospital";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	die("error detected".mysqli_error($con));
}
else{
	echo"connection established successfully!";
}

?>