<!doctype html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adminstyle.css" rel="stylesheet">
    <title>BelainGames - Connexion</title>
</head>

<body>
    <div class="container">

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
            <div class="col-md-4">
                <h3><u>temps moyens :</u></h3>
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
            <div class="col-md-4">
                <?php
                averagetime($bdd);
                ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-comment"></span> Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                    data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li><a href="#"><span class="glyphicon glyphicon-refresh"></span>Refresh</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-ok-sign"></span>Available</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-remove"></span>Busy</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-time"></span>Away</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-off"></span>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=JS" alt="User Avatar"
                                            class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small
                                                class="pull-right text-muted">
                                                <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix"><span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff&text=BP" alt="User Avatar"
                                            class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13
                                                mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix"><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=JS" alt="User Avatar"
                                            class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small
                                                class="pull-right text-muted">
                                                <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix"><span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff&text=BP" alt="User Avatar"
                                            class="img-circle" />
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
                                </li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm"
                                    placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 


        <script src="../includes/chat.js"></script>
        <?php 
            // include_once("includes/authadmin.php");
            include_once("includes/footer.php"); 
        ?>
</body>

</html>