<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Escape-Game </title>
</head>

<body>
    <div class="bs-example">
        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="J1/images/alessio-ferretti-747215-unsplash.jpg" width="100%" class="img-responsive"
                        alt="Là où rêvent nos pères">
                </div>

            </div>
            <!-- Carousel controls -->
            <!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>-->
        </div>
    </div>
    <div class="container">
        <style>
        .navbar {
            border-top: 1px ridge #c1c9d0;
        }
        </style>
        <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#navbar-collapse-target">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"> Découvrez nos derniers escape-games ! </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-target">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Je veux jouer ! <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="connexion.php">Rejoindre une partie</a></li>
                                <li><a href="admin.php">Accès administrateur</a></li>
                            </ul>

                        </li>
                    </ul>
                </div>
                <!-- <footer class="footer">
    Ce site est la  propriété de Belain Corporations.
</footer> -->
            </div><!-- /.container -->
        </nav>



    </div>
    <?php include_once("includes/footer.php"); ?>
</body>

</html>