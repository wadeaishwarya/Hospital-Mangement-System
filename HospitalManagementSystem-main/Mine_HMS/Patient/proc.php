
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

	$sql = "SELECT * FROM patient WHERE Email= '$username' AND Password='$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if($row['Email'] == $username && $row['Password'] == $password){
		echo "<center>Welcome ".$row['Firstname']. $row['Lastname']." you are successfully loged in!!<br>";
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

<h2>Your Details</h2>
<center>
<table style="width:50%">
  <tr>
    <td>FristName</td>
    <td>LastName</td>
    <td>Gender</td>
    <td>Email</td>
    <td>Password</td>
    
  </tr>
  <tr>
    <td><?php echo $row["Firstname"]; ?></td>
    <td><?php echo $row["Lastname"]; ?></td>
    <td><?php echo $row["Gender"]; ?></td>
    <td><?php echo $row["Email"]; ?></td>
    <td><?php echo $row["Password"]; ?></td>
  </tr>
</table>
<br><br>
<a href="procb.php">Book Your Appoitment</a>
</center>
</body>
</html>

