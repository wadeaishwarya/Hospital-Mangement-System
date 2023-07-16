<?php
	//include 'database.php';
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass="1234";
	$db="hospital";

	$conn= new mysqli($dbhost,$dbuser,$dbpass,$db);


	$username = $_POST['username'];
	$password = $_POST['password'];

	//echo $username;
	//echo $password;

	$sql = "SELECT * FROM doctb WHERE username= '$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if($row['username'] == $username && $row['password'] == $password){
		echo "<center>Welcome ".$row['username']." you are successfully loged in!!<br>";
		$sql1= "SELECT * FROM appointtb WHERE Doctor='$username'";
		$result1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_array($result1);
	}else{
		echo"<script>alert('Check your credentials')</script>";
		echo"<script>location.replace('login.php')</script>";
	}


?>

<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>Appointments List</h2>
<center>
<table style="width:50%">
  <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Doctor</td>
    <td>Fee</td>
    <td>Date</td>
    <td>Time</td>
    
  </tr>
  <tr>
    <td><?php echo $row1["Name"]; ?></td>
    <td><?php echo $row1["Email"]; ?></td>
    <td><?php echo $row1["Doctor"]; ?></td>
    <td><?php echo $row1["Fee"]; ?></td>
    <td><?php echo $row1["Date"]; ?></td>
    <td><?php echo $row1["Time"]; ?></td>
  </tr>
</table>
</center>
</body>
</html>