   <?php require_once("connectbdd.php");?>
    <style>
        body {
            background-image: url(images/fdlogin2.jpg);
            opacity: 0.85;
            
        }
        
    </style>
 <script language="javascript" type="text/javascript">

var auto_refresh = setInterval(
function ()
{
$('#links').load('ajaxload.php').fadeIn("slow");

}, 1000); // refresh every 10000 milliseconds

</script>
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top transparent" role="navigation" id="nav1">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <ul class="nav navbar-nav">
                
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Je veux jouer ! <b class="caret"></b>
                            </a>
                           
                            <ul class="dropdown-menu">
                                <li><span id="links"><?php include_once("chat.php");
                                afficheMSGjoueur($bdd);
                             ?></span></li>
                            </ul>
                            

                        </li>
                        <style>  #nav1
{  
    opacity: 1; 
    filter:(opacity=50);       
} </style>
                </ul>

                <div class="collapse navbar-collapse" id="navbar-collapse-target">
                    <ul class="nav navbar-nav navbar-nav">
                     
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../logout.php">Abandonner</a></li>
                    </ul>
<?php include_once("connectbdd.php");include_once("fetchlevelitems.php");  ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <p class="navbar-text">Il vous reste <span id="timer">
                                   <?php fetchtimer($bdd);?>
                                </span> secondes pour résoudre cette énigme</p>
                        </li>
                    </ul>

                </div>
            </div>
         
                             </div>    </nav> 
                                <!-- jQuery -->
   <script src="../lib/jquery/jquery.min.js"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
