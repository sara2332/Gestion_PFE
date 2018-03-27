<?php
include("cnxbdd.php");
if(isset($_POST['submit1'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateN = $_POST['date_n'];
    $specialite = $_POST['specialite'];
    $grade = $_POST['grade'];
    $login = $_POST['email'];
    $passwor = $_POST['psw'];

    if (empty($_POST['grade']) and (!empty($_POST['specialite']))) {
        $ps = $db->prepare("insert into etudiant(Nom,Prenom,DateNaissance,specialite,login,password) values(?,?,?,?,?,?)");
        $params = array($nom, $prenom, $dateN, $specialite, $login, $passwor);
        $ps->execute($params);
    } elseif (empty($_POST['specialite']) and empty($_POST['date_n']) and (!empty($_POST['grade']))) {

        $ps1 = $db->prepare("insert into enseignant(Nom,Prenom,Grade,login,password) values(?,?,?,?,?)");
        $params = array($nom, $prenom,$grade, $login, $passwor);
        $ps1->execute($params);
    } elseif (empty($_POST['specialite']) and empty($_POST['grade']) and empty($_POST['date_n'])) {

        $ps2 = $db->prepare("insert into administrateur(nom,prenom,login,password) values(?,?,?,?)");
        $params = array($nom,$prenom,$login,$passwor);
        $ps2->execute($params);
    } else {
        header("location:acceuil.php");
    }
}

?>