<!DOCTYPE html>
<html>
<head>
	<title>Project Website</title>
	<link rel="stylesheet" type="text/css" href="css/stylingg.css">
	
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

      <div class="sidenav">
  <a href="aboutus.php">Our Co-Founders :</a>

  <button class="dropdown-btn">About Wellnesity :
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#"><i>Mental health is the level of psychological well-being or an absence of mental illness.<br> It is the state of someone who is "functioning at a satisfactory level of emotional and behavioral adjustment".<br> Here , Wellnsesity is all about looking after your mental health and provide various services to have menatl peace.<br> Trust us you are not all and do not fear to open up to others!</i></a>
   
  </div>


	</header>



	<div class="card">
  		<img src="images/pratyaksha.jpeg" alt="Pratyaksha" style="width:100%">
  		<h1>Pratyaksha Ambast</h1>
  		<p class="title"><b>CO-Founder of Wellnesity</b></p>
  		<p>Thakur College Of Engineering And Technology</p>
  		<div style="margin: 24px 0;">
   		 <a href="#"><i class="fa fa-dribbble"></i></a> 
  		  <a href="#"><i class="fa fa-twitter"></i></a>  
   		 <a href="#"><i class="fa fa-linkedin"></i></a>  
   		 <a href="#"><i class="fa fa-facebook"></i></a> 
  	</div>
 		 <p><button><a href="mailto:pratyakshaambast2000@gmail.com">Contact</a></button></p>
		</div>

		<div class="cards">
  		<img src="images/deeksha.jpeg" alt="Deeksha" style="width:100%">
  		<h1>Deeksha <br>Rai</h1>
  		<p class="title"><b>CO-Founder of Wellnesity</b></p>
  		<p>Thakur College Of Engineering And Technology</p>
  		<div style="margin: 24px 0;">
   		 <a href="#"><i class="fa fa-dribbble"></i></a> 
  		  <a href="#"><i class="fa fa-twitter"></i></a>  
   		 <a href="#"><i class="fa fa-linkedin"></i></a>  
   		 <a href="#"><i class="fa fa-facebook"></i></a> 
  	</div>
 		 <p><button><a href="mailto:raideeksha809@gmail.com">Contact</a></button></p>
		</div>






    <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

<div class="footer">
  <p><i>&copy Wellnesity</i></p>
</div>
		
</body>
</html>