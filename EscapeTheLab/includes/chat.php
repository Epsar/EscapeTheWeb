

<?php
include_once("redirect.php");
    function afficheMSG($pdo)
    {
        
        echo"   <div class=\"container-fluid\">
                <div class=\"row\">
            <div class=\"col-lg-offset-9 col-lg-3\">
                        <div class=\"bs-example\">
                            <div class=\"panel-group\" id=\"accordion\">";

        $active = $pdo->prepare("SELECT * FROM SESSION WHERE duree=0 ");
        $active->execute();
        while ($ligne = $active->fetch()) 
        {
            $IDsession=$ligne['ID'];
            $table1 = $pdo -> prepare("SELECT * FROM chat where IDsession = $IDsession");
            $table1->execute();
            echo"   
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse$IDsession\"> 
                                    Session $IDsession
                                </a>
                            </h4>
                        </div>

                        <div id=\"collapse$IDsession\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                <p>";

            while($ligne1 = $table1 -> fetch())
            {
                $msg=$ligne1['conversation'];
                $NumSession=$ligne1['IDsession'];
                if ($ligne1['EstMJ']==1 )
                {
                    Echo"<p> MJ : $msg<p>";
                }
                else
                {
                    Echo"<p> Session $NumSession : $msg<p>";
                }
            }

                Echo "  <form action=\"pageadmin.php\" method=\"post\">
                            <div class=\"input-group\">
                                <input id=\"btn-input\" type=\"text\" name=\"msgMJ\" class=\"form-control input-sm\"
                                    placeholder=\"Type your message here...\" />
                                    <input id=\"btn-input2\" type=\"hidden\" name=\"ID\" value=\"$IDsession\" class=\"form-control input-sm\"
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
        }
        echo" </div></div></div></div></div>";
        ecrireMSGmj($pdo);
    }

    

function afficheMSGjoueur($pdo)
{

   
$active = $pdo->prepare("SELECT * FROM SESSION WHERE ID=? AND duree=0");
$active->execute(array($_SESSION['_id']));
while ($ligne = $active->fetch()) 
{
$IDsession=$ligne['ID'];
$table1 = $pdo -> prepare("SELECT * FROM chat where IDsession = $IDsession");
$table1->execute();

while($ligne1 = $table1 -> fetch())
{
    $msg=$ligne1['conversation'];
    $NumSession=$ligne1['IDsession'];
    if ($ligne1['EstMJ']==1 )
    {
        Echo"<p> MJ : $msg<p>";
    }
    else
    {
        Echo"<p> Moi : $msg<p>";
    }
}

    Echo "  <form action=\"game.php\" method=\"post\">
                <div class=\"input-group\">
                    <input id=\"btn-input\" type=\"text\" name=\"msgMJ\" class=\"form-control input-sm\"
                        placeholder=\"Type your message here...\" />
                        <input id=\"btn-input2\" type=\"hidden\" name=\"ID\" value=\"$IDsession\" class=\"form-control input-sm\"
                        placeholder=\"Type your message here...\" />
                    <span class=\"input-group-btn\">
                        <button type=\"submit\" class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                            Send
                        </button>
                    </span>                                        
                </div>
            </form>
       ";
}
ecrireMSj($pdo);



}

function ecrireMSj($pdo)
{   
    
    
    if ( !empty($_POST['msgMJ']))
    {
        $nimporte=$_POST['ID'];
        $msg=$_POST['msgMJ'];
        $addrequest= $pdo-> prepare("INSERT INTO chat (IDsession,conversation,EstMJ) VALUES (:IDsession, :conversation, 0)");
        $addrequest->bindvalue('IDsession', $nimporte, PDO::PARAM_INT);
        $addrequest->bindvalue('conversation', $msg, PDO::PARAM_STR);
        $addrequest->execute();
            }
       

}
function ecrireMSGmj($pdo)
{   
    
    
    if ( !empty($_POST['msgMJ']))
    {
        $nimporte=$_POST['ID'];
        $msg=$_POST['msgMJ'];
        $addrequest= $pdo-> prepare("INSERT INTO chat (IDsession,conversation,EstMJ) VALUES (:IDsession, :conversation, 1)");
        $addrequest->bindvalue('IDsession', $nimporte, PDO::PARAM_INT);
        $addrequest->bindvalue('conversation', $msg, PDO::PARAM_STR);
        $addrequest->execute();
        unset($_POST['msgMJ']);
        unset($msg);   
    }

}



?>


