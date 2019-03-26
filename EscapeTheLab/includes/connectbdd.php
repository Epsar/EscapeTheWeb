<?php 
try {
    $bdd = new PDO("mysql:host=localhost;dbname=games;charset=utf8", "Superman2", "admin", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Erreur fatale :' . $e->getMessage());
} 
 