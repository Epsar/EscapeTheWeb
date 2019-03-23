    <style>
        body {
            background-image: url(images/fdlogin2.jpg);
            opacity: 0.85;
            
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

                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-target">
                    <ul class="nav navbar-nav navbar-nav">
                     
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../logout.php">Abandonner</a></li>
                    </ul>
<?php $time= 100 ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <p class="navbar-text">Il vous reste <span id="timer">
                                   <?= " $time" ?>
                                </span> secondes pour résoudre cette énigme</p>
                        </li>
                    </ul>

                </div>
            </div>
         
                             </div>    </nav> 