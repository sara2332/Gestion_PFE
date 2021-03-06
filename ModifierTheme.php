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
          Nom,Prenom
        FROM
            enseignant where id_ens= ?');
$params=array($ens);

$total->execute($params);
$sq=$total->fetch(PDO::FETCH_ASSOC);

?>

<?php
require("cnxbdd.php");
if(isset($_POST['submit'])) {
    $inti = $_POST['inti'];
    $id = $_POST['id'];

    $req = $db->prepare('UPDATE theme SET intitule =? WHERE id_theme =?');
    $req->execute(array($inti, $id));
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

                        <li><a href="Sujet.php">Proposer Sujet</a></li>
                        <li class="active"><?php echo "<a href='ModifierTheme.php?ens=$ens'>"?> Modifier Proposition</a></li>
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

                            
                            <div class="row" align="center">
                              <h3><b> Mr:</b> <?php echo ($sq['Nom']) ?> <?php echo( $sq['Prenom'])?> </h3>

                            </div><br>
                        </fieldset>
                        <div class="col-sm-12">
                            <fieldset >

                                <legend>Liste des themes:</legend>
                              
                           <table border="1" style="width:1000px "  class="table table-striped table-hover table-bordered "><thead>


                    <tr>
                        <th align="center" > Theme </th>
                        <th align="center">Modifier</th>
						
                    </tr></thead></fieldset>
                </fieldset><br>
            </form><br>
                        
<?php
include("cnxbdd.php");
try {

    // Find out how many items are in the table
    $total = $db->query("
        SELECT
            COUNT(*)
        FROM
            theme
   
    ")->fetchColumn();

    // How many items to list per page
    $limit = 5;

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

    $stmt = $db->prepare("
        SELECT * from theme 
		where id_ens=$ens
   ORDER BY
            id_theme
			desc
        LIMIT
            :limit
        OFFSET
            :offset
    ");

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
 

                echo "<tr><form action='' method='post'>
<td><input type='hidden' name='id' value='$id'><input type='text'  name='inti' class='champ'  size='50' value='".$ligne["intitule"]."'></td>
				<td align=\"center\"><button type='submit' class=\"btn btn-light\"  name= 'submit' value='Edit' style='color: ligthness' >Modifier</button></td></form></tr>";
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


        </div>
    </div>
</div><br>
</body>
</html>
<script>
$(function(){
  var count = 3,
      $btn = $("#addon"); 
      //Or which ever you want
      //Change the label of $btn
      //$btn.val($btn.val()+' ('+count+')')
      
  $btn.click(function(){
      $btn.val($btn.val().replace(count,count-1));
      count--;
      if(count==0) {
            return !$btn.attr('disabled','disabled');
        /* FOR HYPERLINK
        return !$btn.unbind('click');
        */
      }
  })
  
  //Adding GROUP of elements ONCLICK
    $("#addon").click(function() {

  <?php
include("cnxbdd.php");
if(isset($_POST['submit'])) {
    $sql1=$db->prepare('select nbr from nbrsujet');
    $sql1->execute();
    $result = $sql1->fetch();

    /** @var TYPE_NAME $result  renvoi le nbr de sujet proposée par chaque enseignant*/
        $specialite = implode(', ', $_POST["specialite"]);

        $sql = $db->prepare('insert into theme (intitule,id_ens,specialite,statut) 
 values (?,?,?,?)');
        $params = array($_POST["titre"],$ens, $specialite, 0);
        $sql->execute($params);

    
}
?>
  }); 
});
HTML


</script>
<script src="jquery-1.12-0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="bootbox.min.js"></script>
