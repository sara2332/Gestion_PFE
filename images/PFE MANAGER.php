<!DOCTYPE html>
<!-- saved from url=(0045)http://localhost/Gestion_PFE/binome.php?etu=1 -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PFE MANAGER</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="keywords" content="Controller Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="./PFE MANAGER_files/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="./PFE MANAGER_files/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="./PFE MANAGER_files/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- js -->
    <style>
        .border {
            border: 1px solid #009;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 4px 4px 5px rgba(50, 50, 50, 0.75);
            -moz-box-shadow: 4px 4px 5px rgba(50, 50, 50, 0.75);
            box-shadow: 4px 4px 5px rgba(50, 50, 50, 0.75);
            Background-Color: #BCC4C3
        ;


        }
        label {
            display: block;
            margin-left: 3px;
            padding-top: 2px;
            text-shadow: 2px 2px 3px rgba(150, 150, 150, 0.75);
            font-family:Verdana, Geneva, sans-serif;
            font-size:.9em;
        }

        legend {
            color:red;
            text-shadow: 2px 2px 3px rgba(150, 150, 150, 0.75);
            font-family:Verdana, Geneva, sans-serif;
            font-size:1.4em;
            border-top: 2px solid #009;
            border-left: 2px solid #009;
            border-right:  2px solid #009;
            border-radius: 10px;
            -webkit-box-shadow: 4px 4px 5px rgba(50, 50, 50, 0.75);
            -moz-box-shadow: 4px 4px 5px rgba(50, 50, 50, 0.75);
            box-shadow: 4px 4px 5px rgba(50, 50, 50, 0.75);
            padding: 3px;
        }


    </style>
    <script type="text/javascript" src="./PFE MANAGER_files/jquery-2.1.4.min.js.téléchargement"></script>
    <!-- //js -->
    <link href="./PFE MANAGER_files/css" rel="stylesheet" type="text/css">
    <!-- start-smoth-scrolling -->

    <script type="text/javascript" src="./PFE MANAGER_files/move-top.js.téléchargement"></script>
    <script type="text/javascript" src="./PFE MANAGER_files/easing.js.téléchargement"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
<style type="text/css">.backpack.dropzone {
  font-family: 'SF UI Display', 'Segoe UI';
  font-size: 15px;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 250px;
  height: 150px;
  font-weight: lighter;
  color: white;
  will-change: right;
  z-index: 2147483647;
  bottom: 20%;
  background: #333;
  position: fixed;
  user-select: none;
  transition: left .5s, right .5s;
  right: 0px; }
  .backpack.dropzone .animation {
    height: 80px;
    width: 250px;
    background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; }
  .backpack.dropzone .title::before {
    content: 'Save to'; }
  .backpack.dropzone.closed {
    right: -250px; }
  .backpack.dropzone.hover .animation {
    animation: sxt-play-anim-hover 0.91s steps(21);
    animation-fill-mode: forwards;
    background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; }

@keyframes sxt-play-anim-hover {
  from {
    background-position: 0px; }
  to {
    background-position: -5250px; } }
  .backpack.dropzone.saving .title::before {
    content: 'Saving to'; }
  .backpack.dropzone.saving .animation {
    background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saving_loop.png") left center;
    animation: sxt-play-anim-saving steps(59) 2.46s infinite; }

@keyframes sxt-play-anim-saving {
  100% {
    background-position: -14750px; } }
  .backpack.dropzone.saved .title::before {
    content: 'Saved to'; }
  .backpack.dropzone.saved .animation {
    background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saved.png") left center;
    animation: sxt-play-anim-saved steps(20) 0.83s forwards; }

@keyframes sxt-play-anim-saved {
  100% {
    background-position: -5000px; } }
</style></head>

<body>
<!-- banner -->
<div class="banner two">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img height="100 px" width="200 px" src="./PFE MANAGER_files/151871840444015710.png">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="top-links">
                <li><a href="http://localhost/Gestion_PFE/binome.php?etu=1#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://localhost/Gestion_PFE/binome.php?etu=1#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="http://localhost/Gestion_PFE/binome.php?etu=1#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="http://localhost/Gestion_PFE/binome.php?etu=1#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost/Gestion_PFE/index.html">Home</a></li>


                    <li class="dropdown active">
                        <a href="http://localhost/Gestion_PFE/binome.php?etu=1#" class="dropdown-toggle" data-toggle="dropdown">Fiche de Voeux <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://localhost/Gestion_PFE/codes.html">Monome</a></li>
                            <li class="active"><a href="http://localhost/Gestion_PFE/codes.html">Binome</a></li>
                        </ul>
                    </li>
                    <li><a href="http://localhost/Gestion_PFE/contact.html">Contact</a></li>
                    <li><a href="http://localhost/Gestion_PFE/portfolio.html">Deconnexion</a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <script>
            $('ul.nav li.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });
        </script>
    </div>
    <div class="clearfix"></div>

    <div class="w3l-sub-head">
    </div>
</div><br>
<!-- //banner -->
<!-- /single-page -->
<div class="container">
    <div class="col-sm-8 col-sm-offset-2">
        <form method="post" action="http://localhost/Gestion_PFE/binome.php?etu=1" enctype="multipart/form-data">

            <fieldset class="border">
                <legend>Fiche De Voeux:</legend>

                <div class="col-sm-12">
                    <fieldset>

                        <legend>Informations Personnelles:</legend>
                        <div class="row">
                            <label class="col-sm-4"> Nom etudiant(1): larbi  </label><br><br>
                            <label class="col-sm-6"> Prénom etudiant(1):  fatima zohra</label><br><br>

                            <label class="col-sm-4"> Nom etudiant(2): </label><input type="text" name="nom"><br><br>
                            <label class="col-sm-4"> Prénom etudiant(2):</label> <input type="text" name="prenom"><br><br>
                            <label class="col-sm-4"> Spécialité:  GL</label>
                        </div><br>
                    </fieldset>
                    <div class="col-sm-12">
                        <fieldset>

                            <legend>Choix du theme:</legend>

                            <div class="row">

                                <label class="col-sm-2 col-sm-offset-2">Choix1</label>
                                

<select name="choix1">


<option value="Gestion de l’évolution des ontologies dans les "> Gestion de l’évolution des ontologies dans les </option>
<option value="MAINTENANCE d un logiciel generateur de site Web"> MAINTENANCE d un logiciel generateur de site Web</option>
<option value="llkjgftdr"> llkjgftdr</option>
<option value="poiuytrds"> poiuytrds</option>
<option value="lkjhgf"> lkjhgf</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="sdfghjk"> sdfghjk</option>

</select>

                            </div><br>
                            <div class="row">

                                <label class="col-sm-2 col-sm-offset-2">Choix2</label>
                                
<form>
<select name="choix2">


<option value="Gestion de l’évolution des ontologies dans les "> Gestion de l’évolution des ontologies dans les </option>
<option value="MAINTENANCE d un logiciel generateur de site Web"> MAINTENANCE d un logiciel generateur de site Web</option>
<option value="llkjgftdr"> llkjgftdr</option>
<option value="poiuytrds"> poiuytrds</option>
<option value="lkjhgf"> lkjhgf</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="sdfghjk"> sdfghjk</option>

</select>
</form>                            </div><br>
                            <div class="row">

                                <label class="col-sm-2 col-sm-offset-2">Choix3</label>
                                
<form>
<select name="choix3">


<option value="Gestion de l’évolution des ontologies dans les "> Gestion de l’évolution des ontologies dans les </option>
<option value="MAINTENANCE d un logiciel generateur de site Web"> MAINTENANCE d un logiciel generateur de site Web</option>
<option value="llkjgftdr"> llkjgftdr</option>
<option value="poiuytrds"> poiuytrds</option>
<option value="lkjhgf"> lkjhgf</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="sdfghjk"> sdfghjk</option>

</select>
</form>                            </div><br>
                            <div class="row">

                                <label class="col-sm-2 col-sm-offset-2">Choix4</label>
                                
<form>
<select name="choix4">


<option value="Gestion de l’évolution des ontologies dans les "> Gestion de l’évolution des ontologies dans les </option>
<option value="MAINTENANCE d un logiciel generateur de site Web"> MAINTENANCE d un logiciel generateur de site Web</option>
<option value="llkjgftdr"> llkjgftdr</option>
<option value="poiuytrds"> poiuytrds</option>
<option value="lkjhgf"> lkjhgf</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="sdfghjk"> sdfghjk</option>

</select>
</form>                            </div><br>
                            <div class="row">

                                <label class="col-sm-2 col-sm-offset-2">Choix5</label>
                                
<form>
<select name="choix5">


<option value="Gestion de l’évolution des ontologies dans les "> Gestion de l’évolution des ontologies dans les </option>
<option value="MAINTENANCE d un logiciel generateur de site Web"> MAINTENANCE d un logiciel generateur de site Web</option>
<option value="llkjgftdr"> llkjgftdr</option>
<option value="poiuytrds"> poiuytrds</option>
<option value="lkjhgf"> lkjhgf</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="wsdgnj,"> wsdgnj,</option>
<option value="sdfghjk"> sdfghjk</option>

</select>
</form>                            </div><br>
                            <div class="col-md-6 col-md-offset-5">  <input type="submit" name="submit" class="btn btn-danger" value="Enregistrer"></div>
                        </fieldset>
        
    </div>
</div>
</fieldset></form></div></div></body></html>