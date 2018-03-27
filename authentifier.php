<?php
$login=$_POST['uname'];
$pass=$_POST['psw'];

require_once("connexion.php");

$ps=$pdo->prepare("SELECT * FROM user WHERE email=? AND password=?");
$params=array($login,$pass);
$ps->execute($params);


if($user=$ps->fetch()){
	session_start();
$_SESSION['profil']=$user;
	
	if($_SESSION['profil']['role']=='etudiant'){
	header("location:etudiant.php");}
	
	elseif($_SESSION['profil']['role']=='enseignant'){
	header("location:enseignant.php");}
	
	elseif($_SESSION['profil']['role']=='administration'){
	header("location:administration.php");}

}


else{
	header("location:index.html");
}

?>