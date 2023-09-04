<?php

    session_start();

    session_unset();
    session_destroy();

    header("location: 100_login_project.php");
    exit;
?>