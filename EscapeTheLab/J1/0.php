<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title>BelainGames - Connexion</title>


</head>

<body>
    <br>
    <br>
    <br>
    <div class="col-xs-3 text-center v-align-container">
        <div class="well" class="pagination-centered">
            <p class="example-one" data-text="L--18L-">L'EVEIL</p>
            <p class="synopsis"> 
            <?php include_once("../includes/fetchlevelitems.php"); fetchsynopsis($bdd); ?>
        
            <br>
         
            <p class="synopsis"> OBJECTIFS A REMPLIR :</p>
				<p class="synopsis"> 1. Trouver le mot de passe de l'ordinateur : </p>   <form class="form-signin form-horizontal" role="form" action="game.php" method="post"><input type="text" name="pass0"/></form>
				<p class="response">
					<?php if(isset($_POST['pass0'])){if (strtoupper($_POST['pass0'])=="NCLRZKUIWD"){ 
						echo ("<br/>L'ordinateur semble déconcerté au plus profond de son CPU, puis bafouille quelques caractères: <br/>A8421"); 
					}
					else {echo("<br/>L'ordinateur semble vous dédaigner. Vous le prenez extrêmement mal...");}}
						?> 
				<br/><p class="synopsis"> 2. utilisez ses indications pour vous échapper du noyau  </p>    <br/>
          <!--  <p class="synopsis"> Vous pouvez hacker les ordinateurs du laboratoire pour leur demander de l'aide, au bout d'un certain temps.</p>

            <br />
            <div id="indic">
                <div class="well">
                    <form class="form-signin form-horizontal" role="form" action="game.php" method="post">

                        <textarea rows="4" cols="20" name="HELP" placeholder="Entrez votre requête ici"> </textarea>
                        <br />
                        <br />

                        <button type="submit" id="bouton2" class="btn btn-default btn-primary center-block"> Hacker l'ordinateur</button>



                    </form>
                </div> 
            </div>-->
        </div>



    </div>
    <!-- ici on remplacera le synopsis par celui de la bdd -->
    </div>

    <div class="col-xs-8 text-center ">
	<div class="well" class="pagination-centered">
	<div class="scroll-left"><p>FF14972CDEFFDAéA842173219A8421ékda,nsD562143opzamdlps$$||A741249EDF54301874DF5430EDFGékdnà|[{#~]A842112379A8421DF5430ùù%####EDC$D54287EDC$Dé"((((azpadn"'èé"çfzndé541éaCDEélmNAK}adlza,cke5441ECDDF13241ECDDF</p></div>
	
	</div>
        <div class="well" class="pagination-centered">
		<div class="scroll-left"><p>EDFG154&3EC&{ùA842173219A8421ékda,nsD562143opzamdlps$$||A741249EDF543ùµ01874DF5430EDFGékdnà|[{#~]A842112379A8421DF5430ùù%####EDC$D54287EDC$Dé"((((azpadn"'èé"çfzndé541éaCDEFF14972CDEFFDAéélmNAK</p></div>
        </div>
        <div class="well" class="pagination-centered">

            <div class="luminaire"></div>
            <div class="luminaire2"></div>
            <div class="luminaire3"></div>
            <div class="luminaire4"></div>
            <div class="luminaire5"></div>
            <div class="luminaire6"></div>
            <div class="luminaire7"></div>
            <div class="luminaire8"></div>
            <div class="luminaire9"></div>



        </div>
        <form action="game.php" method="POST">
            <div> <input type="image" id="lvlup0" name="hurrah" class="pagination-centered" alt="">
        </form>
      


    </div></a>
    <div class="well" class="pagination-centered">
	<div class="scroll-left"><p>FF14972CDEFFDAéA842173219A8421ékda,nsD562143opzamdlps$$||A741249EDF54301874DF5430EDFGékdnà|[{#~]A842112379A842145--('gDF5430ùù%####EDC$D54287EDC$Dé"((((azpadn"'èé"çfzndé541éaCDEélmNAK}adlza,cke5441ECDDF13241ECDDF</p></div>
	<?php if (isset($_POST['hurrah_x'])) {
			include_once("../includes/levelup.php");
			echo("<script>function redirection(page) {window.location=page;} setTimeout('redirection(\"game.php\")',0);</script> " );
		} ?>
	</div>
	<div class="well" class="pagination-centered">
		<div class="scroll-left"><p>####4987'"çvm&&>10EDFG154&3EC&{ùA842173219A8421ékda,nsD562143opzamdlps$$||A741249EDF543ùµ01874DF5430EDFGékdnà|[{#~]A842112379A8421DF5430ùù%####EDC$D54287EDC$Dé"((((azpadn"'èé"çfzndé541éaCDEFF14972CDEFFDAéélmNAK</p></div>
        </div>

    </div>
    </div>


    <!-- jQuery -->
    <script src="../lib/jquery/jquery.min.js"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html> 