<!doctype html>

<html>

<?php 
        session_start();
        include_once("includes/connectbdd.php");
    ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/logoutstyle.css" rel="stylesheet">
    <title>Game Over</title>
</head>

<body class="bodylogout">

    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="color : white">Charly's Escape</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Retour vers l'accueil</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <section class="row row1">
            <div class="col-xs-4 col-sm-3 col-md-6">
                <div class="Gameover" data-text="Gameover">Gameover</div>
            </div>
        </section>

        <section class="row row2">
            <div class="col-xs-4 col-sm-3 col-md-6">
                <p class="text-center annonce"> Vous êtes arrivé au niveau :
                    <?php 
                    include_once("includes/connectbdd.php");                    
                    $yourlevel= $bdd -> prepare("SELECT niveau FROM SESSION WHERE id = ?");
                    $yourlevel->execute(array($_SESSION['_id']));
                    while($ligne= $yourlevel->fetch())
                    {
                        $level =($ligne['niveau']);
                    }
                    print "$level"; 
                    ?>
                </p>
                <p class="text-center annonce"> Votre partie a duré :
                    <?php    
                    $duree = time()-$_SESSION['_connexiontime'];
                    $yourtime = $bdd -> prepare("UPDATE SESSION SET duree = ? WHERE id = ?");
                    $yourtime ->execute(array($duree,$_SESSION['_id']));
                    if ( $duree>60) 
                    {
                        $dureemin= intdiv ($duree , 60 );
                        $dureesec = $duree-60*$dureemin;
                        print "$dureemin minutes $dureesec secondes";
                    } 
                    else
                    {                     
                        print "$duree secondes";
                    }
                    session_destroy();
                    ?>
                </p>
                <p> <?php include("includes/adminfunctions.php"); ?></p>
            </div>
        </section>
    </div>
    </p>
    <!-- <img src="images\gameover.jpg" class="rounded mx-auto d-block" alt="stromtrooper" style="width:100%" -->





    <!-- jQuery -->
    <script src="../lib/jquery/jquery.min.js"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>


</html>
