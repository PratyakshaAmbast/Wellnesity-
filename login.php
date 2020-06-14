<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login to CareerRide</title>
  <link rel="stylesheet" type="text/css" href="css/stylingg.css">
</head>

<style>
body {
  background-image: url('images/logopogo.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>


<body>
  <center>
  <div class="header">
  	<h2>Login to Wellnesity</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label><br>
  		<input type="text" name="username" ><br><br>
  	</div>
  	<div class="input-group">
  		<label>Password</label><br>
  		<input type="password" name="password"><br><br>
      <br>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</center>

<div class="footer">
  <p><i>&copy Wellnesity</i></p>
</div>
</body>
</html>