<?php 
    $req2= "SELECT * FROM UTILISATEUR";
    $res= $bdd -> query($req2);
    
    if (isset($_POST['login2'] )&& isset($_POST['password2']) && isset($_POST['gamename']))
    {
        $gamename=  $_POST['gamename'];
        while ($tuple = $res -> fetch())
        {
            if ($tuple["Nom"]== $_POST['login2'] && $tuple["Mdp"]== $_POST['password2'])
            {
                session_start();
                $_SESSION['_login']= $_POST['login2'];
                $_SESSION['_password']= $_POST['password2'];
                $_SESSION['_gamename']= $_POST['gamename'];
                $_SESSION['_connexiontime']=time();
                $_SESSION['level']=0;
                
                if ($tuple["EstMJ"]==0)
                {               
                    require_once("includes/opensession.php");
                    redirect("$gamename/game.php");
                }

                if ($tuple["EstMJ"]==1)
                {
                    redirect("pageadmin.php");
                }
                 
            
            }
    
            
        }
        if (session_status()!=2){echo ("  <div class=\"alert alert-danger\"> <strong>Erreur !</strong> Identifiants non valides - veuillez réessayer !    </div>");

        }
    }
?>
