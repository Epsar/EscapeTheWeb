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
        <br /><br /><br />




        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <button class="collapsible panel-heading">
                            <!-- <div class="panel-heading"> -->
                            <span class="glyphicon glyphicon-envelope"></span> Chat
                            <!-- </div> -->
                        </button>

                        <div class="content">
                            <div class="panel-body">
                                <ul class="chat">
                                    <?php
                                        include('includes/chat.php');
                                        afficheMSG($bdd);

                                    ?>

                                </ul>
                            </div>
                            <div class="panel-footer">
                                <form action="pageadmin.php" method="post">
                                    <div class="input-group">
                                        <input id="btn-input" type="text" name="msgMJ" class="form-control input-sm"
                                            placeholder="Type your message here..." />
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-warning btn-sm" id="btn-chat">
                                                Send
                                            </button>
                                        </span>
                                        <?php
                                            ecrireMSGmj($bdd);
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            }
        </script>


        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            * {
                box-sizing: border-box;
            }

            /* Button used to open the chat form - fixed at the bottom of the page */
            .open-button {
                background-color: #555;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                opacity: 0.8;
                position: fixed;
                bottom: 23px;
                right: 28px;
                width: 280px;
            }

            /* The popup chat - hidden by default */
            .chat-popup {
                display: none;
                position: fixed;
                bottom: 0;
                right: 15px;
                border: 3px solid #f1f1f1;
                z-index: 9;
            }

            /* Add styles to the form container */
            .form-container {
                max-width: 300px;
                padding: 10px;
                background-color: white;
            }

            /* Full-width textarea */
            .form-container textarea {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background: #f1f1f1;
                resize: none;
                min-height: 200px;
            }

            /* When the textarea gets focus, do something */
            .form-container textarea:focus {
                background-color: #ddd;
                outline: none;
            }

            /* Set a style for the submit/send button */
            .form-container .btnt {
                background-color: #4CAF50;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                margin-bottom: 10px;
                opacity: 0.8;
            }

            /* Add a red background color to the cancel button */
            .form-container .cancel {
                background-color: red;
            }

            /* Add some hover effects to buttons */
            .form-container .btnt:hover,
            .open-button:hover {
                opacity: 1;
            }
        </style>


        <!-- <h2>Popup Chat Window</h2>
<p>Click on the button at the bottom of this page to open the chat form.</p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p> -->

        <button class="open-button" onclick="openForm()">Chat</button>

        <div class="chat-popup" id="myForm">
            <form action="pageadmin.php" class="form-container">
                <h2><span class="glyphicon glyphicon-envelope"></span> Chat</h2>

                <ul class="chat">
                    <li> 
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Session 18</strong>
                                <small class="pull-right text-muted">
                                    <span class="glyphicon glyphicon-envelope"></span>heure
                                </small>
                            </div>
                            <p>
                                on est perdus
                            </p>
                        </div>
                    </li>
                </ul>     

                                
                
                
                <div class="input-group">
                    <input id="btn-input" type="text" name="msgMJ" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-warning btn-sm" id="btn-chat">
                                Send
                            </button>
                        </span>
                        <?php
                            ecrireMSGmj($bdd);
                        ?>
                </div>
                <!-- <button type="submit" class="btn">Send</button> -->
                <button type="button" class="btnt cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>

        <script src="../includes/chat.js"></script>
        <?php 
            // include_once("includes/authadmin.php");
            include_once("includes/footer.php"); 
        ?>
</body>

</html>







<!-- <li class="left clearfix"><span class="chat-img pull-left">
        <img src="http://placehold.it/50/55C1E7/fff&text=JS" alt="User Avatar" class="img-circle" />
    </span>
    <div class="chat-body clearfix">
        <div class="header">
            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
            ornare dolor, quis ullamcorper ligula sodales.
        </p>
    </div>
</li>
<li class="right clearfix"><span class="chat-img pull-right">
        <img src="http://placehold.it/50/FA6F57/fff&text=BP" alt="User Avatar" class="img-circle" />
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
</li> -->