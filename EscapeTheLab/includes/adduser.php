<?php 
$fnom = $_POST['login'];
$fpwd = $_POST['password'];



$checkifexists = $bdd -> prepare("SELECT nom FROM UTILISATEUR WHERE nom=?");
$checkifexists->execute(array($fnom));
while ($line = $checkifexists->fetch()) {
    $a = ($line['nom']);
}

if (empty($a)) {$addrequest= $bdd-> prepare("INSERT INTO UTILISATEUR (nom, mdp) VALUES (:nom, :mdp)");
  
    $addrequest->bindvalue('nom', $fnom, PDO::PARAM_STR);
    $addrequest->bindvalue('mdp', $fpwd, PDO::PARAM_STR);
    $addrequest->execute();
    
}
else {echo ("  <div class=\"alert alert-danger\"> <strong>Erreur !</strong> Le nom d'utilisateur que vous avez choisi existe déjà !    </div>");}
?>