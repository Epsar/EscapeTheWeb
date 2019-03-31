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
                                    <!-- <?php
                                        // include('includes/chat.php');
                                        // afficheMSG($bdd);

                                    ?> -->

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
                                        <!-- <?php
                                            // ecrireMSGmj($bdd);
                                        ?> -->
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

<script src="../includes/playground.js"></script>

<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adminstyle.css" rel="stylesheet">