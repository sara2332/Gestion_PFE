<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">
<head>
<title>PFE MANAGER</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Controller Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: red;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img height='100 px' width='200 px' src='./images/151871840444015710.png' />
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
							  <ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					    <ul class="nav navbar-nav">
          							 
								<li  class="active"><a href="#"><b>Acceuil</b></a></li> 
         						 </ul>
       						 </div>
        				<!-- /.navbar-collapse -->
						 </nav>	   
				
				</div>
				<div class="clearfix"></div>
			
			<div class="w3l_banner_info">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="w3l_banner_info">
									 <h4>Initiate</h4>
<button onclick="document.getElementById('id01').style.display='block'" class="hvr-underline-from-center read" style="width:auto;">Connexion</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="authentifier.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>E-mail</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Connexion</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Annuler</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>	
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Inscrivez-Vous</button>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="inscription.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <h1>Inscription</h1>
      <hr>
		<label for="nom"><b>Nom</b></label>
		<input type="text" placeholder="Entrer nom" name="nom" required>
		<label for="prenom"><b>Prénom</b></label>
		<input type="text" placeholder="Entrer prenom" name="prenom" required>
		<label for="date_n"><b>Date Naissance</b></label>
		<input type="date" placeholder="Entrer la date de naissance" name="date_n">&nbsp;&nbsp;&nbsp;
		<label for="specialite"><b>Spécialité</b></label>
		<select  name="specialite">
            <option ></option>

            <option value='GL'> GL </option>
			<option value='RSD'> RSD </option>
			<option value='SIC'> SIC </option>
			<option value='MID'> MID </option>

		</select>&nbsp;&nbsp;&nbsp;
		<label for="grade"><b>Grade</b></label>
		<select  name="grade">
            <option  ></option>

            <option value='MCA'> MCA </option>
			<option value='MAA'> MAA </option>
			<option value='MCB'> MCB </option>
			<option value='MAB'> MAB </option>
			<option value='Professeur'> Professeur </option>

		</select>

		<label for="email"><b>Email</b></label>
      <input type="text" placeholder="Entrer Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>


      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Annuler</button>
        <button type="submit" name="submit1"  class="signupbtn"></button>
      </div>
    </div>
  </form>
</div>

							</div>
							</li>
							
						</ul>
					</div>
				</div>

				
						</div>			
					</div>
<!-- //banner -->	
<!-- about -->
   <div class="about" id="about">
        <div class="container">
			 <div class="wthree-about">
				  <div class="col-md-5 wthree-ab-left">
				      <img src="images/ab.jpg" class="responsive" alt=" " />
                  </div>
				  <div class="col-md-7 wthree-ab-right">
				     <h2>A Few Words About Us</h2>
				     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since, Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since, Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					 <a href="single.html" class="hvr-underline-from-center read">Read More</a>
				  </div>
				  <div class="clearfix"></div>
			 </div>
		</div>
	</div>
<!--// about -->
<!---->
<div class="content-bottom">
		<div class="content-in">
            <div class="port effect-1">
                <div class="image-box">
                   <img src="images/g1.jpg" alt="" class="img-responsive">
               </div>
                <div class="text-desc">
                    <h6>Controller</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor .</p>
                </div>
           </div>
         </div>
		<div class="content-in">
            <div class="port effect-1">
                <div class="image-box">
                    <img src="images/g2.jpg" alt="" class="img-responsive">
                </div>
				<div class="text-desc">
                    <h6>Controller</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor .</p>	
                </div>
            </div>
        </div>
		<div class="content-in">
            <div class="port effect-1">
                <div class="image-box">
                    <img src="images/g3.jpg" alt="" class="img-responsive">
                </div>
				<div class="text-desc">
					<h6>Controller</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor .</p>   	
				</div>
			</div>
        </div>
		<div class="content-in">
            <div class="port effect-1">
                <div class="image-box">
                    <img src="images/g4.jpg" alt="" class="img-responsive">
                </div>
                <div class="text-desc">
                    <h6>Controller</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor .</p>	
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
</div>
<!---->
 <!-- /services -->

<!-- //client -->
<!-- /contact -->
   <div class="contact-main-agile-info" id="contact">
        <div class="container">
		   <h3 class="tittle">Contact Us</h3>
		   <p class="sub">We are waiting your next move </p>
		  <div class="contact-top-agileits">
               <div class="col-md-4 contact-grid ">
					<div class="contact-grid1 agileits-w3layouts">
						<i class="fa fa-location-arrow"></i>
						<div class="con-w3l-info">
						   <h4>Address </h4>
						  <p>12K Street<span>New York City.</span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid2 w3">
						<i class="fa fa-volume-control-phone"></i>
						<div class="con-w3l-info">
						  <h4>Call Us</h4>
						   <p>+1234 567 890<span>+1234 567 890</span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid3 w3l">
						<i class="fa fa-envelope"></i>
						<div class="con-w3l-info">
						  <h4>Email</h4>
						  <p><a href="mailto:info@example.com">info@example1.com</a>
						  <span><a href="mailto:info@example.com">info@example2.com</a></span></p>
						  </div>
						  <div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		  </div>
   <!-- map -->
		<div class="map agileits">
		   <div class="location-mark"><i class="fa fa-map-marker"></i></div>
			   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471497559566"  frameborder="0" style="border:0" allowfullscreen></iframe>
					<div class="map-grids">
					    <h4>Send Us a Message Now</h4>
						<form action="#" method="post">
						<input type="text" name="Your Name" placeholder="Your Name" required=" ">
						<input type="text" name="Your Email" placeholder="Your Email" required=" ">
						<textarea name="Your Message" placeholder="Your Message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
					
				</div>
			
		</div>
		<!-- //map -->
  </div>
  <!-- Footer -->
	<div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>QUICK LINKS</h4>
					<ul>
						       <li><a href="index.html">Home</a></li> 
								<li><a href="about.html">About</a></li> 
								<li><a href="codes.html">Services</a></li> 
								<li><a href="portfolio.html">Portfolio</a></li> 
								<li><a href="contact.html">Contact</a></li> 
					</ul>
				</div>
				<div class="col-md-3 footer-info-grid address">
					<h4>ADDRESS</h4>
					<address>
						<ul>
							<li>London Victoria 3000</li>
							<li>40019 King Street Melbourne</li>
							<li>BO,London</li>
							<li>Telephone : +1 (734) 123-4567</li>
							<li>Email : <a class="mail" href="mailto:mail@example.com">info(at)example.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-3 footer-grid">
				   <h4>INSTAGRAM</h4>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f2.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="#"><img src="images/f3.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f4.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-info-grid newsletter">
					<h4>NEWSLETTER</h4>
					<p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
					</p>

					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email...">
						<input type="submit" class="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="connect-agileits">
				<div class="connect-social">
					<h4>CONNECT WITH US</h4>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="icon rss" href="#"><i class="fa fa-rss"></i></a></li>
							<li><a class="icon lin" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>

				</div>
			</div>

			<div class="copyright-wthree">
				<p>&copy; 2017 Controller. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
			</div>

		</div>
	</div>
<!-- for bootstrap working -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script>
					$('ul.nav li.dropdown').hover(function() {
 						 $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
							}, function() {
  								$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
							});
				</script>	
					<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

							<!--banner Slider starts Here-->
	<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider4").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>