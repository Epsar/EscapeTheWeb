<?php 
include_once('connectbdd.php');

$yourlevel = $bdd->prepare("SELECT * FROM SESSION WHERE duree=0 ");
    $yourlevel->execute();
    while ($ligne = $yourlevel->fetch()) {
          echo ($ligne['ID']." ".$ligne['Nom']." ".$ligne['Niveau']." "."<br/>");

        }
   
     