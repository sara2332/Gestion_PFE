<?php
session_start();
if(!(isset($_SESSION['etudiant']))){
    header("location:acceuil.php");
}
?>

<?php
include("cnxbdd.php");

$etu=$_GET['etu'];
$total = $db->prepare('
        SELECT
          *
        FROM
            etudiant where NumeroEtudiant= ?');
$params=array($etu);

$total->execute($params);
$sql=$total->fetch();


?>
<?php
include("cnxbdd.php");
if (isset($_POST['submit'])) {

    $moy = $sql['Moyenne'];
    $specialite = $sql['specialite'];
    $choix1 = $_POST['choix1'];
    $choix2 = $_POST['choix2'];
    $choix3 = $_POST['choix3'];
    $choix4 = $_POST['choix4'];
    $choix5 = $_POST['choix5'];

    $nom = $sql['Nom'] . " " . $sql['Prenom'];
    $sql1 = $db->prepare('
        insert into fichevoeux(moyenne,etudiant,specialite,choix1,choix2,choix3,choix4,choix5)
            values (?,?,?,?,?,?,?,?)');
    $params = array($moy, $nom,$specialite, $choix1, $choix2, $choix3, $choix4, $choix5);

    $sql1->execute($params);
}elseif (isset($_POST['submit1']))
{
$choix1=$_POST['choix1'];
    $choix2=$_POST['choix2'];
    $choix3=$_POST['choix3'];
    $choix4=$_POST['choix4'];
    $choix5=$_POST['choix5'];
    $nom = $sql['Nom'] . " " . $sql['Prenom'];

$sql1 = $db->prepare('
        update  fichevoeux set choix1=?,choix2=?,choix3=?,choix4=?,choix5=? where etudiant=?');
$params=array($choix1,$choix2,$choix3,$choix4,$choix5,$nom);

$sql1->execute($params);
}

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
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
    <!-- start-smoth-scrolling -->
</head>

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
                    <li ><a href="acceuil.php">Home</a></li>


                    <li  class="dropdown active" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fiche de Voeux <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="monome.php">Monome</a></li>
                            <li><a href="binome.php">Binome</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="portfolio.html">Deconnexion</a></li>

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
    <div class="col-sm-8 col-sm-offset-2" >

            <fieldset  class="border" >
                <legend>Fiche De Voeux:</legend>

                <div class="col-sm-12">
                    <fieldset >

                        <legend>Informations Personnelles:</legend>
                        <div class="row">
                            <label class="col-sm-4"> Nom:  <?php echo( $sql['Nom'])    ?> </label><br><br>
                            <label class="col-sm-4"> Prénom: <?php echo( $sql['Prenom'])    ?></label><br><br>
                            <label class="col-sm-4"> Spécialité: <?php echo( $sql['specialite'])    ?></label>

                        </div><br>
                    </fieldset>
                    <div class="col-sm-12">
                        <fieldset >

                            <legend>Choix du theme:</legend>

                            <div class="row">

                                <label class="col-sm-2 col-sm-offset-2">Choix1</label>
                                <form method="post" action="" enctype="multipart/form-data"  >

                                <?php
                                include("cnxbdd.php");


                                $stmt = $db->prepare("
       SELECT * FROM theme where specialite LIKE '%{$sql['specialite']}%'");
                                $stmt->execute();
                                $st=$stmt->fetchAll();


                                echo"

<select name='choix1' >

";
                                foreach($st as $row){
                                    echo"
<option value='". $row['intitule'] ."'> ". $row['intitule'] ."</option>";
                                }
                                echo"
                                
</select>


                                

                            </div><br>
                            <div class='row'>

                                <label class='col-sm-2 col-sm-offset-2'>Choix2</label>";



                                $stmt = $db->prepare("
       SELECT * FROM theme where specialite LIKE '%{$sql['specialite']}%' ");
                                $stmt->execute();
                                $st=$stmt->fetchAll();


                                echo"

<select name='choix2' >

";
                                foreach($st as $row){
                                    echo"
<option value='". $row['intitule'] ."'> ". $row['intitule'] ."</option>";
                                }
                                echo"

</select>


                                
                            </div><br>
                            <div class='row'>

                                <label class='col-sm-2 col-sm-offset-2'>Choix3</label>";



                                $stmt = $db->prepare("
       SELECT * FROM theme where specialite LIKE '%{$sql['specialite']}%'
	   
");
                                $stmt->execute();
                                $st=$stmt->fetchAll();


                                echo"

<select name='choix3' >

";
                                foreach($st as $row){
                                    echo"
<option value='". $row['intitule'] ."'> ". $row['intitule'] ."</option>";
                                }
                                echo"

</select>

                                
                            </div><br>
                            <div class='row'>

                                <label class='col-sm-2 col-sm-offset-2'>Choix4</label>";


                                $stmt = $db->prepare("
       SELECT * FROM theme where specialite LIKE '%{$sql['specialite']}%'
	   
");
                                $stmt->execute();
                                $st=$stmt->fetchAll();


                                echo"

<select name='choix4' >

";
                                foreach($st as $row){
                                    echo"
<option value='". $row['intitule'] ."'> ". $row['intitule'] ."</option>";
                                }
                                echo"

</select>

                                
                            </div><br>
                            <div class='row'>

                                <label class='col-sm-2 col-sm-offset-2'>Choix5</label>";


                                $stmt = $db->prepare("
       SELECT * FROM theme where specialite LIKE '%{$sql['specialite']}%'
	   
");
                                $stmt->execute();
                                $st=$stmt->fetchAll();


                                echo"

<select name='choix5' >

";
                                foreach($st as $row){
                                    echo"
<option value='". $row['intitule'] ."'> ". $row['intitule'] ."</option>";
                                }
                                echo"

</select>";

                                ?>
                            </div><br>

                            <div class="col-md-4 col-md-offset-2"> </label class="inline"> <input  type='submit' name='submit' class='btn btn-danger' value='Enregistrer'  ></div>
                            <div class="col-md-4 col-md-offset-2"> </label class="inline"> <input  type='submit' name='submit1' class='btn btn-warning' value='Modifier'  ></div>

                        </fieldset><br>
        </form>
    </div>
</div>
</body>
</html>