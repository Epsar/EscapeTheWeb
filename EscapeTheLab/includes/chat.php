<?php

function ecrireMSGjoueur()
{
    

}

function ecrireMSGmj($pdo)
{
    if ( isset($_POST['msgMJ']))
    {
        $yourmsg = $pdo -> prepare("UPDATE CHAT SET msgMJ = ? WHERE IDsession = 3");
        $yourmsg ->execute(array($_POST['msgMJ']));
    }

}

function afficheMSG($pdo)
{
    $requete = "SELECT * FROM chat ";
    $table = $pdo -> query($requete);
    while($ligne = $table -> fetch())
    {
        $ID = $ligne["IDsession"];
        $heure=date("h:i:sa");
        $msgEquipe=$ligne["msgEQUIPE"];

        echo   "<li class=\"left clearfix\">
                    <span class=\"chat-img pull-left\">
                        <img src=\"http://placehold.it/50/55C1E7/fff&text=JS\" alt=\"User Avatar\" class=\"img-circle\" />
                    </span>
                    <div class=\"chat-body clearfix\">
                        <div class=\"header\">
                            <strong class=\"primary-font\">Session $ID</strong>
                            <small class=\"pull-right text-muted\">
                                <span class=\"glyphicon glyphicon-envelope\"></span>$heure
                            </small>
                        </div>
                        <p>
                            $msgEquipe
                        </p>
                    </div>
                </li>";
    }


}

function popup()
{
    
}

?>


<!-- <li class="left clearfix">
    <span class="chat-img pull-left">
        <img src="http://placehold.it/50/55C1E7/fff&text=JS" alt="User Avatar" class="img-circle" />
    </span>
    <div class="chat-body clearfix">
        <div class="header">
            <strong class="primary-font">Jack Sparrow</strong>
            <small class="pull-right text-muted">
                <span class="glyphicon glyphicon-time"></span>12 mins ago
            </small>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
            ornare dolor, quis ullamcorper ligula sodales.
        </p>
    </div>
</li>


<li class="right clearfix">
    <span class="chat-img pull-right">
        <img src="http://placehold.it/50/FA6F57/fff&text=BP" alt="User Avatar" class="img-circle" />
    </span>
    <div class="chat-body clearfix">
        <div class="header">
            <small class=" text-muted">
                <span class="glyphicon glyphicon-time"></span>13 mins ago
            </small>
            <strong class="pull-right primary-font">Bhaumik Patel</strong>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
            ornare dolor, quis ullamcorper ligula sodales.
        </p>
    </div>
</li> -->