<?php

    function afficheMSG($pdo)
    {
        $requete1 = "SELECT * FROM chat where msgMJ='0'";
        $table1 = $pdo -> query($requete1);
        $presence = $table1 -> fetch();
        
        if ($presence["ID"] != "")
        {
            echo"
                        <div class=\"col-lg-offset-9 col-lg-3\">
                            <div class=\"bs-example\">
                                <div class=\"panel-group\" id=\"accordion\">";

            $requete2 = "SELECT * FROM chat where msgMJ = '0'";
            $table = $pdo -> query($requete2);
            $incrementation = 1;
            while($ligne = $table -> fetch())
            {
                $IDchat = $ligne["ID"];
                $IDsession = $ligne["IDsession"];
                // $heure=date("h:i:sa");
                $msgEquipe=$ligne["msgEQUIPE"];

                echo"   <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse$incrementation\"> 
                                        Session $IDsession
                                    </a>
                                </h4>
                            </div>

                            <div id=\"collapse$incrementation\" class=\"panel-collapse collapse in\">
                                <div class=\"panel-body\">
                                    <p>
                                        $msgEquipe
                                    </p>
                                    <form action=\"pageadmin.php\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input id=\"btn-input\" type=\"text\" name=\"msgMJ\" class=\"form-control input-sm\"
                                            placeholder=\"Type your message here...\" />
                                        <span class=\"input-group-btn\">
                                            <button type=\"submit\" class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                                                Send
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>";
                ecrireMSGmj($pdo,$IDchat);
                $incrementation= $incrementation+1;

        
            }
            echo"             </div>
                        </div>
                    </div>";
        }
    }



function ecrireMSGjoueur()
{
    

}

function ecrireMSGmj($pdo,$IDchat)
{
    if ( isset($_POST["msgMJ"]))
    {
        $yourmsg = $pdo -> prepare("UPDATE CHAT SET msgMJ = ? WHERE IDsession = $IDchat");
        $yourmsg ->execute(array($_POST['msgMJ']));
        $_POST["msgMJ"]=null;
    }

}



?>






<!-- "<li class=\"left clearfix\">
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
                </li>"; -->