<!doctype html>

<html>

<?php 
        include_once("includes/redirect.php");  
        session_start();
        session_destroy();
        redirect('index.php');
    ?>