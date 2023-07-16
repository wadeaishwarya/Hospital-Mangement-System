<!--<!DOCTYPE HTML>
<body>
	<center><h1>Patient Login system</h1></center>
	<center>
	<form method="post" action="proc.php">
		<input type="text" name="username" placeholder="Enter email" required autofocus><br><br>
		<input type="password" name="password" placeholder="Enter password" maxlength="10" 
		required><br><br>
		<input type="submit" value="Login">
		<br>
		<br>
		<a href="hms.php">Sign up?</a><br><br>
	</form>
	</center>
</body>
-->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Patient Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="post" action="proc.php">
    <h1>Patient Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" name="username" placeholder="Enter email" required autofocus>
      </div>
      <div class="input-field">
        <input type="password" name="password" placeholder="Enter Password" maxlength="10" required>
    <div class="action">
      <button type="submit" value="Login">Sign in</button>
    </div>
    <div class="action">
      <a href="hms.php">Sign up?</a>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>