<!doctype html>
<html>


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="refresh" content="45;url=pageadmin.php" /> -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/adminstyle.css" rel="stylesheet">
        <title>Tableau de bord</title>
    </head>

    <body>
        <div class="container-fluid">

            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navbar-collapse-target">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Retour index</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse-target">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="adminlogout.php">Se déconnecter</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <br><br>
            <?php
                include_once("includes/connectbdd.php");
                include 'includes/adminfunctions.php';
                ?>
            <h3><u> Sessions Actives : </u></h3>
            <?php
                activesessions($bdd);
            ?>

            <div class="row">
                <div class="col-md-4">
                    <h3><u>Meilleur temps :</u></h3>
                </div>
                <div class="col-md-4">
                    <h3><u>Pire temps :</u></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php
                        besttime($bdd);
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                        worsttime($bdd);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3><u>temps moyens :</u></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php
                    averagetime($bdd);
                    ?>
                </div>
                <?php
                    include("includes/chat.php");
                    afficheMSG($bdd);
                ?>
            </div>
            <br /><br /><br />
        </div>

        



        <?php 
                // include_once("includes/authadmin.php");
                include_once("includes/footer.php"); 
        ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>







<!-- <li class="left clearfix"><span class="chat-img pull-left">
        <img src="http://placehold.it/50/55C1E7/fff&text=JS" alt="User Avatar" class="img-circle" />
    </span>
    <div class="chat-body clearfix">
        <div class="header">
            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
            ornare dolor, quis ullamcorper ligula sodales.
        </p>
    </div>
</li>
<li class="right clearfix"><span class="chat-img pull-right">
        <img src="http://placehold.it/50/FA6F57/fff&text=BP" alt="User Avatar" class="img-circle" />
    </span>
    <div class="chat-body clearfix">
        <div class="header">
            <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15
                mins ago</small>
            <strong class="pull-right primary-font">Bhaumik Patel</strong>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
            ornare dolor, quis ullamcorper ligula sodales.
        </p>
    </div>
</li> -->