<!DOCTYPE html>
<html>
<head>
	<title>Project Website</title>
	<link rel="stylesheet" type="text/css" href="css/stylingg.css">
	<script type="text/javascript" src="script.js"></script>
	


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

<!-- MAIN (Center website) -->
<div class="mains">

<h1>Wellnesity is all about taking take care of your mental health and trust us you are not alone!</h1>
<hr>

<h2>Read the Top stories of people overcoming their fear and mental illness. <span class="blink">Personal Stories of Triumph!</span></h2>

<div id="myBtnContainer">
  <button class="btns active" onclick="filterSelection('all')"> Show all</button>
  <button class="btns" onclick="filterSelection('nature')"> Top Stories</button>
  <button class="btns" onclick="filterSelection('cars')"> Must Read</button>
  <button class="btns" onclick="filterSelection('people')"> Upcoming Stories</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="rows" >
  <div class="column nature">
    <div class="contents">
      <img src="images/james.jpeg" alt="anxiety" style="width:100%" class="image">

      				<div class="middle">
   						 <div class="text"><a href="james.php">Read Full Story</a></div>
 					 </div>

      <h4><i>Dealing Anxiety-My Story</i></h4>
      <p><b>By James Kirkendell</b><br>January 29, 2020</p>
    </div>
  </div>
  <div class="column nature">
    <div class="contents">
    <img src="images/deb.jpeg" alt="Lights" style="width:100%" class="image">

    				<div class="middle">
   						 <div class="text"><a href="deb.php">Read Full Story</a></div>
 					 </div>

      <h4><i>Getting My Smile Back!</i></h4>
      <p><b>By DEB TOKARZ</b><br>August 16, 2019</p>
    </div>
  </div>
  <div class="column nature">
    <div class="contents">
    <img src="images/victoria.png" alt="Nature" style="width:100%" class="image">

    				<div class="middle">
   						 <div class="text"><a href="victoria.php">Read Full Story</a></div>
 					 </div>

      <h4><i>Redefining My LIFE..Whats Your Story</i></h4>
      <p><b>By VICTORIA FENRY</b><br>October 28, 2019</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="contents">
      <img src="images/tobias.jpeg" alt="Car" style="width:100%" class="image">

      				<div class="middle">
   						 <div class="text"><a href="tobias.php">Read Full Story</a></div>
 					 </div>

      <h4><i>My Lifelong Struggle With Social Anxiety</i></h4>
      <p><b>by Tobias Atkins</b><br>September 7,2019</p>
    </div>
  </div>
  <div class="column cars">
    <div class="contents">
    <img src="images/ariana.jpeg" alt="Car" style="width:100%" class="image">

    				<div class="middle">
   						 <div class="text"><a href="ariana.php">Read Full Story</a></div>
 					 </div>


      <h4><i>Speaking Up For Others</i></h4>
      <p><b>by ARIANA LEONARD</b><br>November 19, 2009</p>
    </div>
  </div>
  <div class="column cars">
    <div class="contents">
    <img src="images/mikail.jpeg" alt="Car" style="width:100%" class="image">

    				<div class="middle">
   						 <div class="text"><a href="mikail.php">Read Full Story</a></div>
 					 </div>

      <h4><i>CLearing My Path To a Healthier Life</i></h4>
      <p><b>by Mikail Shaikh</b><br>June 13, 2014</p>
    </div>
  </div>

  <div class="column people">
    <div class="contents">
      <img src="images/williams.jpeg" alt="Car" style="width:100%" class="image">

      				<div class="middle">
   						 <div class="text"><a href="williams.php">Read Full Story</a></div>
 					 </div>

      <h4><i>NO MORE CONSTANT FEAR</i></h4>
      <p><b>by Williams Murray</b><br>March 30, 2015</p>
    </div>
  </div>
  <div class="column people">
    <div class="contents">
    <img src="images/maria.jpg" alt="Car" style="width:100%" class="image">

    				<div class="middle">
   						 <div class="text"><a href="maria.php">Read Full Story</a></div>
 					 </div>

      <h4><i>I'm a Comedian, And I'm Depressed</i></h4>
      <p><b>By MARIA PIERCE</b><br>September 30, 2017</p>
    </div>
  </div>
  
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<br><br><br><br><br><br>
	</header>

	

<div class="footer">
  <p><i>&copy Wellnesity</i></p>
</div>
		
</body>
</html>