<?php 
    function redirect($urlredir)
    {
        header("Location: $urlredir ");

        exit();
    }
?>