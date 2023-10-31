<?php
    session_start();
   
    $_SESSION["jePrihlaseny"] = FALSE;
    unset($_SESSION["username"]);
    //$_SESSION["username"] = null;

    
    //session_destroy();
    
    
    header("location: index.php");
    die();

?>