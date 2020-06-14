<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration to Wellnesity</title>
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
  	<h2>Register to Wellnesity</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label><br>
  	  <input type="text" name="username" value="<?php echo $username; ?>"><br><br>
  	</div>
  	<div class="input-group">
  	  <label>Email</label><br>
  	  <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
  	</div>
  	<div class="input-group">
  	  <label>Password</label><br>
  	  <input type="password" name="password_1"><br><br>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label><br>
  	  <input type="password" name="password_2"><br><br>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</center>
</body>
</html>