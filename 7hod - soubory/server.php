<?php
    if(isset($_POST["pridej_ucet"])){
        $bankovni_cislo = $_POST["bankovni_cislo"];
        $banka = $_POST["banka"];

        $text_k_ulozeni = "$bankovni_cislo/$banka\n";

        $soubor = fopen($_POST["vyber"],"a");
        
        fwrite($soubor,$text_k_ulozeni);
        fclose($soubor);
    }

    header("location: index.php");
?>