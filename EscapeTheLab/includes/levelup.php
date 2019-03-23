<?php 

include_once("connectbdd.php");
$idbdd = $_SESSION['_id'];
$levelup = $bdd->exec("UPDATE SESSION SET niveau = niveau+1 WHERE id =$idbdd");
 