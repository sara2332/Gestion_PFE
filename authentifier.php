<?php
include("cnxbdd.php");

$login=$_POST['uname'];
$passwor=$_POST['psw'];

if(!empty($login) and !empty($passwor))
{
    $ps=$db->prepare("SELECT * FROM etudiant WHERE login=? AND password=?");
    $params=array($login,$passwor);
    $ps->execute($params);

    $ps1=$db->prepare('SELECT * FROM enseignant WHERE login=? AND password=? ');
    $params=array($login,$passwor);
    $ps1->execute($params);

    $p=$db->prepare("SELECT * FROM administrateur WHERE login=? AND password=?");
    $param=array($login,$passwor);
    $p->execute($param);



    if($use=$ps1->fetch()){
        $id1=$use['id_ens'];

        session_start();
        $_SESSION['enseignant']=$use;
        header ("location:enseignant.php?ens=$id1");
    }
    else if
    ($use=$ps->fetch()){
        $id3=$use['NumeroEtudiant'];

        session_start();
        $_SESSION['etudiant']=$use;
        header ("location:etudiant.php?etu=$id3");

    }
    else if
    ($use=$p->fetch()){
        $id=$use['id_ad'];

        session_start();
        $_SESSION['administrateur']=$use;
        header ("location:admin.php?admin=$id");

    }

    else {
        header("location:acceuil.php");
    }
}

?>