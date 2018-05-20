<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("cnxbdd.php");


 $stmt = $db->prepare('
       SELECT * FROM  specialite
');	
$params=array();
$stmt->execute($params);
$st=$stmt->fetchAll();
?>
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>


    <!-- for-mobile-apps -->
    
    
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */


.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 300px;
  margin: 0 auto 100px;
  padding: 30px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  text-align: center;
}
.form .thumbnail {
  background: #EF3B3A;
  width: 120px;
  height: 120px;
  margin: 0 auto 30px;
  padding: 50px 30px;
  border-top-left-radius: 100%;
  border-top-right-radius: 100%;
  border-bottom-left-radius: 100%;
  border-bottom-right-radius: 100%;
  box-sizing: border-box;
}
.form .thumbnail img {
  display: block;
  width: 100%;
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 5px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
  height:10%;
}
.form button {
  outline: 0;
  background: #EF3B3A;
  width: 100%;
  border: 0;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  color: #FFFFFF;
  font-size: 14px;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #EF3B3A;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

  button {
    background-color: red;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
select {
    padding:8px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
  background: #f2f2f2;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}

/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:18px}
}

label {position:relative}
label:after {
    content:'<>';
    font:11px "Consolas", monospace;
    color:#aaa;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ddd;
    position:absolute;
    pointer-events:none;
}
label:before {
    content:'';
    right:6px; top:0px;
    width:20px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
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
					    <ul class="nav navbar-nav" >
          							 
								<li  class="active" ><a href="#"><b>Acceuil</b></a></li>
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
									 <h4>Abu Bakr Belkaid</h4>
<button onclick="document.getElementById('id01').style.display='block'" class="hvr-underline-from-center read" style="width:auto;">Connexion</button>

<div id="id01" class="modal">
  
  <div class="form" id="id01">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

  <div class="thumbnail"><img src="images/hat.svg"/></div>
  <form class="register-form" method="post" action="inscription.php" enctype="multipart/form-data">
    <input type="text" placeholder="Entrer nom" name="nom" required />
	<input type="text" placeholder="Entrer prenom" name="prenom" required>
	<b>(*Etudiant)</b><input type="date" placeholder="Entrer la date de naissance" name="date_n" >
	
<?php
echo"

<select multiple name='specialite[]' class=\"selectpicker\" data-style=\"btn-default\" >
<option >Selectionner une specialite:</option>

";
foreach($st as $row){
	echo"
<option value='". $row['specialite'] ."'> ". $row['specialite'] ."</option>";
}
echo"

</select>
";

?> 
		<br>
		
		<select  name="grade" class="selectpicker" data-style="btn-default">
		
            <option  >Grade (*Enseignant)</option>

            <option value='MCA'> MCA </option>
			<option value='MAA'> MAA </option>
			<option value='MCB'> MCB </option>
			<option value='MAB'> MAB </option>
			<option value='Professeur'> Professeur </option>
		</select><br>
		<input type="text" placeholder="Entrer Email" name="email" required>

    <input type="password" placeholder="password" name="psw" required />
<button type="submit" name="submit1"   >Inscription</button>
    <p class="message"> <a href="#">Connexion</a></p>
  </form>
  <form class="login-form" action="authentifier.php" method="post">
    <input type="text" placeholder="username" name="uname"/>
    <input type="password" placeholder="password" name="psw"/>
<button type="submit" name="submit" >Connexion</button>
    <p class="message" > <a href="#">Inscrivez Vous</a></p>
  </form>
</div>
</div>	

  
</div>

							</div>
							</li>
							
						</ul>
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

   <!-- map -->
		<div class="map agileits">
		   <div class="location-mark"><i class="fa fa-map-marker"></i></div>
			   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471497559566"  frameborder="0" style="border:0" allowfullscreen></iframe>

			
		</div>
		<!-- //map -->
  </div>
  <!-- Footer -->
	<div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">

				<div class="col-md-3 footer-info-grid address">
					<h4>ADDRESS</h4>
					<address>
						<ul>
							<li>Tlemcen  Mansorah</li>

							<li>Telephone : +1 (734) 123-4567</li>
							<li>Email : <a class="mail" href="mailto:mail@example.com">info(at)example.com</a></li>
						</ul>
					</address>
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
    <script  src="js/index.js"></script>
<script src="jquery-1.12-0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="bootbox.min.js"></script>
</body>
</html>