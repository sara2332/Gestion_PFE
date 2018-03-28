<?php
session_start();
if(!(isset($_SESSION['etudiant']))){
    header("location:acceuil.php");
}
?>
<?php

$etu=$_GET['etu'];

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
        background-image:url(images/g3.jpg);

        background-size:cover;
        background-repeat:no-repeat

    }
</style>

<br>
<body >
<div class="container">

    <div class="col-sm-8">
        <form method="post" action="" >


        </form>
    </div>


</div>

</br>
<div class="container">
    <div class="col-sm-8">
        <div class='row'>
            <div class='col-sm-8 col-sm-offset-3'>

                <a href='#'> <img src='images/g3.jpg' class='img-circle' height='100px' width='100px'/><b><font size=5 color='blue'> Liste Sujet</font></b></a></br></div></div><br>



        <div class='row'>


            <div class='col-sm-8 col-sm-offset-2'>

                <a href='#'> <img src='images/g3.jpg' class='img-circle' height='100px' width='100px'/><b><font size=5 color='blue'> Affectation Sujet</font></b></a></br></div></div><br>

        <div class='col-sm-8  col-sm-offset-2'>
            <div class='row'>

                <a href='#' class="dropdown-toggle" data-toggle="dropdown"> <img src='images/fiche.jpg' class='img-circle' height='100px' width='100px' ></img><b><font size=5 color='blue'> Fiche De Voeux</font></b></a>
            </div></div><br>

        <div class='col-sm-6'>
            <div class='row'>
                <div class='col-sm-5'>

                    <?php echo "   <a href='monome.php?etu=$etu'>";?> <img src='images/monome.jpg' class='img-circle' height='80px' width='80px'/><b><font size=5 color='red'> Monome</font></b></a></div>

                <div class='col-sm-3 col-sm-offset-3'>

                    <?php echo "   <a href='binome.php?etu=$etu'> ";?><img src='images/binome.jpg' class='img-circle' height='80px' width='80px'/><b><font size=5 color='red'> Binome</font></b></a></div><br>

            </div>
        </div><br>




    </div>


</body>
</html>