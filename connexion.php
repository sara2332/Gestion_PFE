<?php
 try {
        $connexion='mysql:host=localhost;dbname=pfe';
		$pdo = new PDO ( $connexion, 'root', '');
		
    } catch (PDOException $e) {
        $msg = 'Erreur: ' . $e->getMessage();
		die($msg);
    }
	?>