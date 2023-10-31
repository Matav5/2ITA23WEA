<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>První hodina</title>
</head>
<body>
    <?php
    $jmeno = "Karel";
    echo "<b>Vítejte na první hodině!</b><br>";
    echo "Přístup povolen pro uživatele: " . $jmeno;
    echo "<br>";
    $a = 10;
    $b = 5;
    echo $a + $b;

    echo "<br>";
    if($a > $b){
        echo "A je větší jak B";
    } 
    else if($a == $b){
        echo "A je stejně velké jak B";
    }
    else{
        echo "B je větší jak A";
    }

    echo "<br>";

    switch($a){
        case 10:
            echo "A je o velikosti 10";
            break;
        default:
            echo "A neni o velikosti 10";
            break;
    }

    echo "<br>";
    #0 - 4 prvků: 5
    $pole = ["Bartoloměj", "Petr Štolc", "Kofjon","Zpityhněv", "Milan"];
    for($i = 0; $i < count($pole); $i++){
        echo $pole[$i];
        echo "<br>";
    }
    /*
        Super důležitej komentář
    */ 
    echo "For Opačně --------------- <br>";
    for($i = count($pole) - 1; $i >= 0 ; $i--){
        echo $pole[$i];
        echo "<br>";
    }
    echo "Foreach --------------- <br>";
    foreach($pole as $prvek ){
        echo $prvek;
        echo "<br>";
    }

    echo "While odpočet -------------- <br>";
    while($a > $b){
        # --$a nejdřív odečte potom vypíše
        # $a-- nejdřív vypíše potom odečte
        echo --$a;
        echo "<br>";
    }
    function SuperHustejVypis($barvicka){
        GLOBAL $vypis;

        echo "<p style=\"color: $barvicka\">";
        echo $vypis;
        echo "</p>";
        $vypis = "Konec existence";
    }
    
    $vypis = "Insert Recept Na perník :)";
    SuperHustejVypis("#048399");
    echo $vypis;

    $vypis = "Insert Recept Na Piko :)";
    SuperHustejVypis("red");

    $vypis = "Insert Recept Na bábovku :)";
    SuperHustejVypis("crimson");

    $vypis = "Jak vykrást banku";
    SuperHustejVypis("hotpink");
    ?>
</body>
</html>