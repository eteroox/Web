<?php
	session_start();

    session_destroy();
    session_unset();
    header('Location: ../index.php'); 
    /* Or whatever document you want to show afterwards */
?>