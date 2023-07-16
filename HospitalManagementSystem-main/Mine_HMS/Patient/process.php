<?php
include 'database.php';
if(isset($_POST['submit'])){
	$fname=$_POST['firstname'];
	$mname=$_POST['middlename'];
	$lname=$_POST['lastname'];

	$gender=$_POST['gender'];

	$phone=$_POST['phone'];

	$email=$_POST['email'];

	$password=$_POST['psw'];

	$sql="insert into patient(Firstname,Middlename,Lastname,Gender,Phone,Email,Password) values('$fname','$mname','$lname','$gender','$phone','$email','$password');";

	if(mysqli_query($con,$sql)){
		echo "<script>alert('new record inserted')</script>";
		echo"<script>window.open('hms.php','_self')</script>";
	}
	else{
		echo"error:".mysqli_error($con);
	}

	mysqli_close($con);
}
?>