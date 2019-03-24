<?php 

function activesessions(PDO $pdo){
  $active = $pdo->prepare("SELECT * FROM SESSION WHERE duree=0 ");
    $active->execute();
    while ($ligne = $active->fetch()) {
          echo ($ligne['ID']." ".$ligne['Nom']." ".$ligne['Niveau']." "."<br/>");
        }}
function besttime(PDO $pdo){
  $besttime = $pdo->prepare("SELECT * FROM SESSION WHERE duree= (SELECT MIN(duree) FROM SESSION WHERE duree<>0 AND niveau=1)");
    $besttime->execute();
    while ($ligne = $besttime->fetch()) {
          echo ($ligne['ID']." ".$ligne['Nom']." ".$ligne['Niveau']." "."<br/>");
        }}
function worsttime(PDO $pdo){
  $worsttime = $pdo->prepare("SELECT * FROM SESSION WHERE duree= (SELECT MAX(duree) FROM SESSION WHERE duree<>0 AND niveau=1)");
    $worsttime->execute();
    while ($ligne = $worsttime->fetch()) {
          echo ($ligne['ID']." ".$ligne['Nom']." ".$ligne['Niveau']." "."<br/>");
        }}
function averagetime(PDO $pdo, $level){
  $averagetime = $pdo->prepare("SELECT AVG(duree) FROM SESSION WHERE duree<>0 AND niveau = ?  ");
    $averagetime->execute(array($level));
    while ($ligne = $averagetime->fetch()) {
          echo ("Temps moyen pour le niveau $level :  " .$ligne['AVG(duree)']);
        }}        

        
   
     
