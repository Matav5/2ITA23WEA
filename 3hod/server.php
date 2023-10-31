<?php

    print_r($_GET);
    print_r($_POST);

    $moznostiPocitace = ["kamen","nuzky","papir"];
    $nahodnejIndex = rand(0,2);

    $vyberPocitace = $moznostiPocitace[$nahodnejIndex];

    $vyberHrace = $_POST["vyber"];

    $vyhralHrac = false;
    $vyhralPocitac = false;

    echo $vyberPocitace;

    if( $vyberHrace == $vyberPocitace ){
        echo "Remííííííííííííza";
    }
    else if($vyberHrace == "kamen") {
        if($vyberPocitace == "papir"){
            //Hráč prohrál
            //Počítač vyhrál
            $vyhralPocitac = true;
        }
        else{
            //Hráč vyhrál
            //Počítač prohrál  
            $vyhralHrac = true;
        }
    }
    else if($vyberHrace == "papir"){
        if($vyberPocitace == "kamen"){
            $vyhralHrac = true;
        }
        else{
            $vyhralPocitac = true;
        }
    }
    else if($vyberHrace == "nuzky"){
        if($vyberPocitace == "kamen"){
            $vyhralPocitac = true;
        }
        else{
            $vyhralHrac = true;
        }
    }

    echo "<br>";
    echo "Vyhrál hráč:" . $vyhralHrac;
    echo "<br>";
    echo "Vyhrál počítač:" . $vyhralPocitac;
    //Zjisti nakonci kdo vyhrál
/*
 Kámen poráží nůžky
 Nůžky poráží papír
 Papír poráží kámen
 */
    header("location: index.php?vyhralHrac=$vyhralHrac&vyhralPocitac=$vyhralPocitac&vyberHrace=$vyberHrace&vyberPocitace=$vyberPocitace");
    die();
?>