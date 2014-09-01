<?php

    session_start();
    if(!$_SESSION['log_'] && $_SESSION['edo'] != "2"){
        header( 'Location: index.php' ) ;
    }

?>