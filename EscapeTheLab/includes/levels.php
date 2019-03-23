<?php 
include_once("connectbdd.php");
$yourlevel = $bdd->prepare("SELECT niveau FROM SESSION WHERE id = ?");
$yourlevel->execute(array($_SESSION['_id']));
while ($ligne = $yourlevel->fetch()) {
        $level = ($ligne['niveau']);
    }
$path = $_SESSION['_gamename'];
include_once("../$path/$level.php");
echo ("<link href=\"../$path/csslevels/$level.css\" rel=\"stylesheet\">");
 