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
        background-image:url(images/serve.jpg);

        background-size:1530px 800px;
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

</body><br><br><br><br><br><br>
<div class="container">
    <div class="col-sm-8">
        <div class='row'>
            <div class='col-sm-8 col-sm-offset-1'>
                <?php echo " <a href='Sujet.php?ens=$ens'>";?> <img src='images/tr.jpg' class='img-circle' height='100px' width='100px' ></img><b><font size=5 color='#7fffd4'> Gestion des sujets</font></b></a></div></div><br>
        <div class='row'>
            <div class='col-sm-6'>

                <?php echo " <a href='validationSujet.php?ens=$ens'>";?> <img src='images/affecter.jpg' class='img-circle' height='100px' width='100px'/><b><font size=5 color='#7fffd4'> Validation Sujet</font></b></a></br></div></div><br>
        <div class='row'>
            <div class='col-sm-6 col-sm-offset-1 '>

                <?php echo "    <a href='avancement.php?ens=$ens'>";?><img src='images/ab.jpg' class='img-circle' height='100px' width='100px'></img><b><font size=5 color='#7fffd4'> Avancement travails</b></div></div><br>
        <div class='row'>




    </html>