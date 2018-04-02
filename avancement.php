<?php
session_start();
if(!(isset($_SESSION['enseignant']))){
    header("location:acceuil.php");
}
$ens=$_GET['ens'];

?>
<?php
include("cnxbdd.php");

$stmt = $db->prepare('
       SELECT Nom,Prenom FROM enseignant
            where id_ens="'.$ens.'" 
    
    ');
$stmt->execute();

$ft=$stmt->fetch();

?>
<?php
include("cnxbdd.php");

if (isset($_POST['submit']))


{
    $id=$_POST['id'];
    $pourcentage=$_POST['pour'];

    $sql2 = $db->prepare('
update voeux set avancement=? where id_voeux=?');
    $params = array($pourcentage,$id);

    $sql2->execute($params);
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
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
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
<style>
    .champ {
        height:20px;
        width:40px;
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
</style>
<!-- start-smoth-scrolling -->

<nav class='navbar navbar-default'  >

    <div class="banner two">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">

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

                        <li  ><?php echo "<a href='Sujet.php?ens=$ens'>"?>Proposer Sujet</a></li>
                        <li class="active"><a href="avancement.php">Avancement travail</a></li>


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
    </div></nav>

<body>

<body>
</br>
<h3 align="center" style="color: black;font-family:Times New Roman, Times,serif"><mark >Enseignant: </mark> <?php echo ($ft['Nom']." ".$ft['Prenom']); ?></h3><br>
<div class="container">
    <div class="col-sm-8">
        <fieldset  class="border" style="width:1150px;">
            <legend>Liste des Etudiants:</legend>

            <table border="1" style="width:1000px "  class="table table-striped table-hover table-bordered "><thead>


                    <th align="center"> Etudiant </th>
                    <th align="center">Specialité</th>
                    <th align="center">Pourcentage</th>

                    <th align="center">Valider</th>


                </tr></thead></fieldset>
        <?php
        $dsn = "localhost";
        $user = "root";
        $password = "";


        $db = new PDO("mysql:host=$dsn;dbname=pfe",$user,$password);

        try {

            // Find out how many items are in the table
            $total = $db->query('
        SELECT
            COUNT(*)
        FROM
            voeux
            where id_ens="'.$ens.'"
    ')->fetchColumn();


            // How many items to list per page
            $limit = 10;

            // How many pages will there be
            $pages = ceil($total / $limit);

            // What page are we currently on?
            $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
                'options' => array(
                    'default'   => 1,
                    'min_range' => 1,
                ),
            )));

            // Calculate the offset for the query
            $offset = ($page - 1)  * $limit;

            // Some information to display to the user
            $start = $offset + 1;
            $end = min(($offset + $limit), $total);
// The "back" link
            $prevlink = ($page > 1) ? '<a href="?ens='.$ens.'&amp;page=1" title="premier page"> <i style="color:green" class="fa fa- fa-caret-left fa-lg"  ></i></a>
	<a href="?ens='.$ens.'&amp;page=' . ($page - 1) . '" title="page précédent"> &nbsp;&nbsp;<i style="color:red" class="fa fa- fa-hand-o-left fa-lg"  ></i> &nbsp;&nbsp  </a>':
                ' <span class="disabled"> &nbsp; <i style="color:green" class="fa fa- fa-caret-left fa-lg"  ></i></span>
	<span class="disabled"> &nbsp;&nbsp;<i style="color:red" class="fa fa- fa-hand-o-left fa-lg"  ></i></span>';




            // The "forward" link
            $nextlink = ($page < $pages) ? '<a href="?ens='.$ens.'&amp;page=' . ($page + 1) . '"&amp;ens=$id1 title="page suivant"> &nbsp;&nbsp;
	<i style="color:red" class="fa  fa-hand-o-right fa-lg"  ></i> &nbsp; 

</a> <a href="?ens='.$ens.'&amp;page=' . $pages . ' " title="dernière page">  &nbsp; 
<i  size="6" style="color:green " class="fa  fa-caret-right fa-lg"></i> 
</a>' : '<span class="disabled">&nbsp;
<i style="color:red" class="fa fa- fa-hand-o-right fa-lg"  ></i>
</span>
 <span class="disabled">&nbsp;<i style="color:green" class="fa fa- fa-caret-right fa-lg"  ></i>
';

            // Display the paging information

            // Prepare the paged query
            $stmt = $db->prepare('
       SELECT * FROM voeux
            where id_ens="'.$ens.'"
      
        LIMIT
            :limit
        OFFSET
            :offset
    ');

            // Bind the query params
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            // Do we have any results?
            if ($stmt->rowCount() > 0) {
                // Define how we want to fetch the results
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $iterator = new IteratorIterator($stmt);
                $stmt->bindColumn(1, $id);
                $stmt->bindColumn(2, $cover, PDO::PARAM_LOB);
                // Display the results
                foreach ($iterator as $ligne) {


                    {
                        $id =$ligne["id_voeux"];

                        echo "<tr><td>".$ligne["etudiant"]."</td><td>".$ligne["specialite"]."</td>
<form action='' method='post'>
<td><div class=\"progress\">
<div class=\"progress-bar progress-bar-warning progress-bar-striped active\" role=\"progressbar\" aria-valuenow=".$ligne["avancement"]." aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ".$ligne["avancement"]."%\">
        
            <input type='number' name='pour' class=\"champ\" value=".$ligne["avancement"]." style='color:black'> 

    </div>

</div>




</td>
<td>
<input type='hidden' name='id' value='$id'>
<input type='submit' class=\"btn btn-outline-danger\"  name= 'submit' value='save' style='color:orangered' ></td>
</form>
</tr>";
                    }
                }

                ?>


                </table><br>

                <?php
                echo '<div id="paging" align="center"><p>', $prevlink, '<b>' ,'&nbsp;&nbsp;&nbsp;','<span style="color:red">', $page,'</span>', ' / ','<span style="color:red">', $pages,'</span>', $nextlink, '</p></div>';
            } else {
                echo '<p>No results could be displayed.</p>';
            }

        } catch (Exception $e) {
            echo '<p>', $e->getMessage(), '</p>';
        }

        ?>

    </div>
</div>
</div>



<!-- //single -->
<!-- Footer -->

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>

