<?php

    include_once './includes/config.php';
    
    session_destroy();
    header('Location:login.php');
    exit;