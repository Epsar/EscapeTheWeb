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
<script language="javascript">
    function changeImage() {

        if (document.getElementById("imgClickAndChange").src == "images/c7.jpg") 
        {
            document.getElementById("imgClickAndChange").src = "images/c6.jpg";
        }
        else 
        {
            document.getElementById("imgClickAndChange").src = "images/c7.jpg";
        }
    }
</script>
<div class="col-xm-4 text-center v-align-container">
    <div class="well" class="pagination-centered">

        <p class="example-one" data-text="NIVEAU -2-">NIVEAU 2</p>


    </div>
</div>
<div class="col-xm-8 text-center ">
	<div class="well" class="pagination-centered">
<img src="images/c7.jpg" width="50%" id="imgClickAndChange" onclick="changeImage()"/>

</div>
</div>

    <!-- jQuery -->
    <script src="../lib/jquery/jquery.min.js"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html> 