<?php
    print_r($_POST);
    print_r($_COOKIE);
    echo $_COOKIE["oblibenaSusenka"]; 
    echo $_COOKIE["preference"]; 
    //if(isset($_POST)){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        setcookie("oblibenaSusenka","Horalka");
        setcookie("preference", $_POST["preference"],time() + 60 );
        header("location: index.php");
        die();
    }
    //= $_POST["preference"]; 
?>