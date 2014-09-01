<?php

    session_start();
    if(!$_SESSION['log_'] or $_SESSION['nombre'] == ''){
        header( 'Location: index.php' );
    }

?>