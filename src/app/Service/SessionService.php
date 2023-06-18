<?php
    session_start();
    if(!(isset($_SESSION['login'])))
    {
        header("Location: ../conn-inscri/confconn.php");
    }
?>