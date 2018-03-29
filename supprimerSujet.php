
<?php
$ens=$_GET['ens'];
session_start();
if(isset($_GET["sup"]))
{

$id=$_GET["sup"];
include("cnxbdd.php");
$query =("delete from theme where id_theme=$id");

$db->exec($query);
header("Location:validationSujet.php?ens=$ens");

}

else
{
header("Location:validationSujet.php?ens=$ens");
}

?>