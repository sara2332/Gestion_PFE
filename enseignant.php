<?php
session_start();
if(!(isset($_SESSION['enseignant']))){
    header("location:acceuil.php");
}
$ens=$_GET['ens'];

?>


<html>

<head>

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
</head>
<script>


</script>
<style>
    body{
        background-size:1370px 600px;
        background-repeat:no-repeat

    }
</style>
<body>





<div class="container">

    <div class="col-sm-8">
        <form method="post" action="" >


        </form>
    </div>


</div>

</body>
<div class="container">
    <div class="col-sm-8">
        <div class='row'>
            <div class='col-sm-8 col-sm-offset-1'>
                <?php echo " <a href='Sujet.php?ens=$ens'>";?> <img src='images/shutterstock_126804434.jpg' class='img-circle' height='100px' width='100px' ></img><b><font size=5 color='blue'> Gestion des sujets</font></b></a></div></div><br>
        <div class='row'>
            <div class='col-sm-4'>

                <?php echo " <a href='validationSujet.php?ens=$ens'>";?> <img src='images/affecter.jpg' class='img-circle' height='100px' width='100px'/><b><font size=5 color='blue'>Validation Sujet</font></b></a></br></div></div><br>
        <div class='row'>
            <div class='col-sm-6 '>

                <a href='rendez_vous.php'>		 <img src='images/rend.jpg' class='img-circle' height='100px' width='100px'></img><b><font size=5 color='blue'> Avancement travails</b></div></div><br>
        <div class='row'>
            <div class='col-sm-6 col-sm-offset-1'>

                <a href='dossier.php'>		 <img src='image/dossier.jpg' class='img-circle' height='100px' width='100px'></img><b><font size=5 color='blue'> Dossiers medicaux</b></div></div>





    </html>