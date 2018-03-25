<?php
$dsn = "localhost";
$user = "root";
$password = "";

try{
	$db = new PDO("mysql:host=$dsn;dbname=pfe",$user,$password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
   }
catch(PDOException $e)
{
	echo"error:".$e->getMessage();	}



?>