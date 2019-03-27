<?php 
    $addrequest= $bdd-> prepare("INSERT INTO SESSION (jeu, nom) VALUES (:jeu, :nom)");
    $fjeu = $_POST['gamename'];
    $fnom = $_POST['login2'];
    $addrequest->bindvalue('jeu', $fjeu, PDO::PARAM_STR);
    $addrequest->bindvalue('nom', $fnom, PDO::PARAM_STR);
    $addrequest->execute();
    $_SESSION['_id'] = $bdd->lastInsertId(); 
?>