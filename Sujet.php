<?php
session_start();
if(!(isset($_SESSION['enseignant']))){
    header("location:acceuil.php");
}
?>
<?php
include("cnxbdd.php");

$ens=$_GET['ens'];
$total = $db->prepare('
        SELECT
          *
        FROM
            enseignant where id_ens= ?');
$params=array($ens);

$total->execute($params);
$sql=$total->fetch(PDO::FETCH_ASSOC);


?>

<?php
include("cnxbdd.php");
if(isset($_POST['submit'])) {
    $sql1=$db->prepare('select nbr from nbrsujet');
    $sql1->execute();
    $result = $sql1->fetch();

    /** @var TYPE_NAME $result  renvoi le nbr de sujet proposée par chaque enseignant*/
    for ($i = 1; $i <= $result ['nbr']; $i++) {
        $specialite = implode(', ', $_POST["specialite'$i'"]);

        $sql = $db->prepare('insert into theme (intitule,id_ens,specialite,statut) 
 values (?,?,?,?)');
        $params = array($_POST["titre'$i'"],$ens, $specialite, 0);
        $sql->execute($params);

    }
}
?>
<!DOCTYPE html>
<body lang="en">
<head>
    <title>PFE MANAGER</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

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
        #id{
            background: url(images/hy.jpg) no-repeat 0px 0px;

            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            min-height: 350px;
        }
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

<div>>
    <!-- banner -->
    <div id="id" class="banner two" >
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <img height='100 px' width='200 px' src='./images/151871840444015710.png' />

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
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

                        <li class="active" ><a href="#">Proposer Sujet</a></li>
                        <li><?php echo "<a href='avancement.php?ens=$ens'>"?> Avancement travail</a></li>
                        <li><a href="logout.php">Deconnexion</a></li>

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
    <body>
    <div class="container">
        <div class="col-sm-12 " >
            <form method="post" action="" enctype="multipart/form-data"  >

                <fieldset  class="border" >
                    <legend>Sujets Proposés:</legend>

                    <div class="col-sm-12">
                        <fieldset >

                            <legend>Informations Personnelles:</legend>
                            <div class="row">
                                <label class="col-sm-4"> Nom:  <?php echo ($sql['Nom'] );  ?> </label><br><br>
                                <label class="col-sm-4"> Prénom:  <?php echo( $sql['Prenom']);   ?> </label><br><br>
                                <label class="col-sm-4"> Grade:  <?php echo( $sql['Grade']) ;   ?> </label>

                            </div><br>
                        </fieldset>
                        <div class="col-sm-12">
                            <fieldset >

                                <legend>Liste du theme:</legend>
                                <?php
                                $sql=$db->prepare('select nbr from nbrsujet');
                                $sql->execute();
                                $result = $sql->fetch();

                                for ($i = 1; $i <=$result['nbr']; $i++) {
                                    echo "
                           
                            <div class='col-sm-12'>

                            <div class='row'>
                                <label class='col-sm-2 col-sm-offset-4' >Theme $i</label><br>
                                <select class=\"selectpicker\" data-style=\"btn-default
\" multiple name=\"specialite'$i'[]\">
<option value='GL'> GL </option>
<option value='RSD'> RSD </option>
<option value='SIC'> SIC </option>
<option value='MID'> MID </option>


</select>
                                <label class='col-sm-2'>Intitule</label><input class='col-sm-6 ' type='text' name=\"titre'$i'\"/>
                                
                            </div></div> ";}

                                ?>
                        </div>
                        <div class="col-md-6 col-md-offset-5"> </label class="inline"> <input  type='submit' name='submit' class='btn btn-danger' value='Enregistrer'  ></div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<script src="jquery-1.12-0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="bootbox.min.js"></script>
