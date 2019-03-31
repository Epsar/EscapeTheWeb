<html>

<head>
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adminstyle.css" rel="stylesheet">
</head>

<body>



    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- <style type="text/css">
    .bs-example{
    	margin-left: 800px;
    }
</style> -->


    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-9 col-lg-3">
                    <div class="bs-example">
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1. What
                                            is HTML? bla bla</a>
                                    </h4>
                                </div>

                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>HTML stands for HyperText Markup Language. HTML is the standard markup
                                            language for describing the structure of web pages.
                                        </p>

                                        <form action="pageadmin.php" method="post">
                                            <div class="input-group">
                                                <input id="btn-input" type="text" name="msgMJ"
                                                    class="form-control input-sm"
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


                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. What
                                            is Bootstrap?</a>
                                    </h4>
                                </div>

                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster
                                            and easier web development. It is a collection of CSS and HTML
                                            conventions.</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. What
                                            is CSS?</a>
                                    </h4>
                                </div>

                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style
                                            properties for a given HTML element such as colors, backgrounds, fonts etc.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">je sais
                                            pas ce que je fait</a>
                                    </h4>
                                </div>

                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>alalalalalalalallalalalala
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>

</html>