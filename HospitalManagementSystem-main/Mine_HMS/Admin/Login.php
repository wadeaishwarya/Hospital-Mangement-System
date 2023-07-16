<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="post" action="proc.php">
    <h1>Admin Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" name="username" placeholder="Enter Email" required autofocus>
      </div>
      <div class="input-field">
        <input type="password" name="password" placeholder="Enter Password" maxlength="10" required>
    <div class="action">
      <button type="submit" value="Login">Sign in</button>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>