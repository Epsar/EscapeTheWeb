<!doctype html>
<html>

<?php include_once("includes/connectbdd.php"); ?>
<?php include_once("includes/redirect.php"); ?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>BelainGames - Connexion</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $("#panel").slideDown("slow");
                $("#panel2").slideUp("slow");

            });
        });

        $(document).ready(function() {
            $("#flip2").click(function() {
                $("#panel2").slideDown("slow");
                $("#panel").slideUp("slow");
            });
        });
    </script>

</head>

<body>

    <style>
        body {
            background-image: url(images/fdlogin2.jpg);
            opacity: 0.85;
        }

        .navbar {
            border-bottom: 1px ridge #c1c9d0;
        }
    </style>
    <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Préparez vous pour l'aventure !</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-target">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Non connecté <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="connexion.php">Créer une session</a></li>

                                <li><a href="admin.php">Accès administrateur</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container -->
        </nav>
        <br><br><br><br>


        <div id="flip2">
            <h2 class="text-center">Démarrer une session</h2> <br>
        </div>
        
        <div id="panel2">

            <div class="well" class="pagination-centered">

                <div class="progress"></div>
                <?php include_once("includes/checkuser.php"); ?>
                <form class="form-signin form-horizontal" role="form" action="connexion.php" method="post">
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <input type="text" name="login2" class="form-control" placeholder="Entrez votre nom d'équipe ! " required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <input type="password" name="password2" class="form-control" placeholder="Entrez un code secret" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <select name="gamename" class="form-control" required>
                                <option value="J1" selected="selected"> EscapeTheLab!</option>
                                <option disabled value="J2"> Jeu 2 </option>
                                <option disabled value="J3"> Jeu 3</option>
                            </select></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <button type="submit" id="bouton" class="btn btn-default btn-primary"> Se connecter</button>
                        </div>
                    </div>

                    <div class="progress2">

                </form>
            </div>
        </div>
    </div>
    <?php if (!empty($_POST['password'])) {
        include_once("includes/adduser.php");
    } ?><br />
    <div id="flip">
        <h2 class="text-center"> Créer mon compte</h2> <br><br /><br />
    </div>
    <div id="panel">

        <div class="well" class="pagination-centered">


    

            <div class="progress"></div>
            <form class="form-signin form-horizontal" role="form" action="connexion.php" method="post">
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input type="text" name="login" class="form-control" placeholder="Entrez votre nom d'équipe ! " required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <input type="password" name="password" class="form-control" placeholder="Entrez un code secret" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <button type="submit" id="bouton" class="btn btn-default btn-primary"> Créer mon compte</button>
                    </div>
                </div>
                <div class="progress2">

            </form>
        </div>
    </div>
    </div>



   <?php include_once("includes/footer.php"); ?>

</body>

</html> 