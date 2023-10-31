<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kámen nůžky papír</title>
</head>
<body>

<?php
    print_r($_GET);
    if($_GET["vyhralHrac"]){
        ?>
            <h1 style="color:lime">Hráč:</h1>
        <?php
    }
    else{
        ?>
            <h1 style="color:red">Hráč:</h1>
        <?php
    }
?>
    <form action="server.php" method="POST">
        <label for="vyber">Kámen</label>
        <input type="radio" name="vyber" value="kamen" 
        <?php
            if($_GET["vyberHrace"] == "kamen")
                echo "checked";
        ?>
        ><br>

        <label for="vyber">Nůžky</label>
        <input type="radio" name="vyber" value="nuzky"
        <?= $_GET["vyberHrace"] == "nuzky" ?  "checked" : "" ?>
        ><br>

        <label for="vyber">Papír</label>
        <input type="radio" name="vyber" value="papir"
        <?= $_GET["vyberHrace"] == "papir" ?  "checked" : "" ?>
        ><br>

        <input type="submit" value="Hraj!">
    </form>

<?php
    if($_GET["vyhralPocitac"]){
        ?>
            <h1 style="color:lime">Počítač:</h1>
        <?php
    }
    else{
        ?>
            <h1 style="color:red">Počítač:</h1>
        <?php
    }
?>

</body>
</html>