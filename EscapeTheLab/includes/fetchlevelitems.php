<?php 

function fetchsynopsis(PDO $pdo){
 
  $syn = $pdo->prepare("SELECT * FROM NIVEAU WHERE id=? AND jeu=?");
    $syn->execute(array( $_SESSION['level'],$_SESSION['_gamename']));
    while ($ligne = $syn->fetch()) {
          echo ($ligne['Synopsis']);
        }}
function fetchtimer(PDO $pdo){
 
  $timer = $pdo->prepare("SELECT * FROM NIVEAU WHERE id=? AND jeu=?");
    $timer->execute(array( $_SESSION['level'],$_SESSION['_gamename']));
    while ($ligne = $timer->fetch()) {
          echo ($ligne['Timer']);
        }}
function fetchindic(PDO $pdo){
 
  $indic = $pdo->prepare("SELECT * FROM NIVEAU WHERE id=? AND jeu=?");
    $indic->execute(array( $_SESSION['level'],$_SESSION['_gamename']));
    while ($ligne = $indic->fetch()) {
          echo ($ligne['Indice']);
        }}
function fetchmessage(PDO $pdo){
 
  $mess = $pdo->prepare("SELECT * FROM NIVEAU WHERE id=? AND jeu=?");
    $mess->execute(array( $_SESSION['level'],$_SESSION['_gamename']));
    while ($ligne = $mess->fetch()) {
          echo ($ligne['Message']);
        }}
 ?>