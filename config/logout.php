<?php

    session_start();
    session_destroy();

    header("Location: ../backoffice/index.php");
    exit();

?>