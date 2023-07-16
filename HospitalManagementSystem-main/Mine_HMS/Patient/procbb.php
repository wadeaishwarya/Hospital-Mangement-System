<?php
include 'database.php';
if(isset($_POST['submit'])){
	$fname=$_POST['uname'];
	$email=$_POST['email'];
	$doctor=$_POST['doc'];
	$fee=$_POST['fee'];
	$date=$_POST['date'];
	$time=$_POST['time'];


	$sql="insert into appointtb(Name,Email,Doctor ,Fee,Date,Time) values('$fname','$email','$doctor','$fee','$date','$time');";

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