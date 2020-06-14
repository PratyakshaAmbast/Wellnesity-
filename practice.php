<!DOCTYPE html>
<html>
<head>
  <title>Project Website</title>
  <link rel="stylesheet" type="text/css" href="css/styling.css">
  
</head>
<body>
  <header>
    <div class="main">
      <div class="logo">
      <a href="main.php"><img src="images/logopogo.png"></a>
      </div>
    <ul>
      <li><a class="active" href="home.php">HOME</a></li>
<li><a href="menheal.php">What Is Mental Health</a></li>
<li><a href="test.php">Know About the Illness</a></li>
<li><a href="#">Talk To Expert</a></li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="contact.php">Contact Us</a></li>
    </ul>
    </div>


  <div class="title">
      <h1>Please Fill The <br> Following Form.<br><br></h1>
        <p><i>"Provide correct data so that we contact you ASAP!"</i></p><br><br>
    </div>

  </header>


   <div class="w-50 m-auto">
			<form action="userinfo.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="uname" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Email-Id</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Phone No</label>
					<input type="text" name="phone" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Comment</label>
				<textarea class="form-control" name="comment"></textarea>
				</div>

				<button type="submit" class="btn btn-success">
  <span class="spinner-border spinner-border-sm"></span>
 Submit
</button>
					
					

			</form>
		</div>

 

  

    
</body>
</html>	